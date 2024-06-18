import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

import fs from "fs-extra";
import path from "path";

const folder = {
    src: "resources/", // archivos fuente
    src_assets: "resources/", // archivos fuente de activos
    dist: "public/", // archivos de construcción
    dist_assets: "public/build/", // archivos de activos de construcción
};
function getAllJsFiles(dir) {
    const jsFiles = [];
    const files = fs.readdirSync(dir);

    files.forEach((file) => {
        const filePath = path.join(dir, file);
        const stat = fs.statSync(filePath);

        if (stat.isDirectory()) {
            jsFiles.push(...getAllJsFiles(filePath)); // Recurse into subdirectory
        } else if (filePath.endsWith(".js")) {
            jsFiles.push(filePath); // Add .js file to the list
        }
    });

    return jsFiles;
}

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/sass/bootstrap.scss",
                "resources/sass/app.scss",
                "resources/sass/custom.scss",
                "resources/js/app.js",
                "resources/sass/icons.scss",
                ...getAllJsFiles("resources/js"),
            ],
            refresh: true,
        }),
        {
            name: "copy-specific-packages",
            async writeBundle() {
                try {
                    // Copy images, json, fonts, and js
                    await Promise.all([
                        fs.copy(
                            folder.src_assets + "fonts",
                            folder.dist_assets + "fonts"
                        ),
                        fs.copy(
                            folder.src_assets + "img",
                            folder.dist_assets + "img"
                        ),
                        fs.copy(
                            folder.src_assets + "js",
                            folder.dist_assets + "js"
                        ),
                        fs.copy(
                            folder.src_assets + "json",
                            folder.dist_assets + "json"
                        ),
                    ]);
                } catch (error) {
                    console.error("Error copying assets:", error);
                }

                const outputPath = path.resolve(__dirname, folder.dist_assets); // Adjust the destination path
                const configPath = path.resolve(
                    __dirname,
                    "package-copy-config.json"
                );

                try {
                    const configContent = await fs.readFile(
                        configPath,
                        "utf-8"
                    );
                    const { packagesToCopy } = JSON.parse(configContent);

                    for (const packageName of packagesToCopy) {
                        const destPackagePath = path.join(
                            outputPath,
                            "libs",
                            packageName
                        );

                        const sourcePath = fs.existsSync(
                            path.join(
                                __dirname,
                                "node_modules",
                                packageName + "/dist"
                            )
                        )
                            ? path.join(
                                  __dirname,
                                  "node_modules",
                                  packageName + "/dist"
                              )
                            : path.join(__dirname, "node_modules", packageName);

                        try {
                            await fs.access(sourcePath, fs.constants.F_OK);
                            await fs.copy(sourcePath, destPackagePath);
                        } catch (error) {
                            console.error(
                                `Package ${packageName} does not exist.`
                            );
                        }
                    }
                } catch (error) {
                    console.error(
                        "Error copying and renaming packages:",
                        error
                    );
                }
            },
        },
    ],
    build: {
        manifest: true,
        outDir: "public/build/",
        cssCodeSplit: true,
        sourcemap: true, // Habilita la generación de sourcemaps para JS y CSS
        rollupOptions: {
            output: {
                assetFileNames: (css) => {
                    if (css.name.split(".").pop() == "css") {
                        return "css/" + `[name]` + ".min." + "css";
                    } else {
                        return "icons/" + css.name;
                    }
                },
                entryFileNames: "js/[name].js",
                chunkFileNames: "js/[name].js",
                // assetFileNames: "css/[name].min.css",
                sourcemapPathTransform: (relativePath) => {
                    return relativePath + ".map"; // Transforma el nombre de los sourcemaps
                },
            },
        },
    },
});
