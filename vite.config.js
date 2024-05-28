import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
// import vue from "@vitejs/plugin-vue";

// import fs from "fs-extra";
// import path from "path";

const folder = {
    src: "resources/", // source files
    src_assets: "resources/", // source assets files
    dist: "public/", // build files
    dist_assets: "public/build/", //build assets files
};

export default defineConfig({
    plugins: [
        laravel({
            input: [
                // "resources/scss/bootstrap.scss",
                // "resources/scss/icons.scss",
                "resources/sass/app.scss",
                "resources/sass/custom.scss",
                "resources/js/app.js",
            ],
            refresh: true,
        }),
        // vue({
        //     template: {
        //         transformAssetUrls: {
        //             base: null,
        //             includeAbsolute: false,
        //         },
        //     },
        // }),
    ],
    // resolve: {
    //     alias: {
    //         vue: "vue/dist/vue.esm-bundler.js",
    //     },
    // },
    build: {
        manifest: true,
        rtl: true,
        outDir: "public/build/",
        cssCodeSplit: true,
        rollupOptions: {
            output: {
                assetFileNames: (css) => {
                    if (css.name.split(".").pop() == "css") {
                        return "css/" + `[name]` + ".min." + "css";
                    } else {
                        return "icons/" + css.name;
                    }
                },
                entryFileNames: "js/" + `[name]` + `.js`,
            },
        },
    },
    // build: {
    //     rollupOptions: {
    //         output: {
    //             entryFileNames: "js/app.js",
    //             chunkFileNames: "js/[name].js",
    //             assetFileNames: ({ name }) => {
    //                 if (/\.(css|scss)$/.test(name ?? "")) {
    //                     return "css/app.css";
    //                 }
    //                 return "assets/[name].[ext]";
    //             },
    //         },
    //     },
    // },
});
