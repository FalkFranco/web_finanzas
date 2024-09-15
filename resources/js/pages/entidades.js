$(function () {
    var datatable_entidades = $("#datatable-entidades");

    datatable_entidades.DataTable({
        processing: true,
        serverSide: true,
        ajax: {
            url: "/entidades/data",
            type: "GET",
        },
        columns: [
            { data: "id", name: "id" },
            { data: "nombre", name: "nombre" },
            { data: "tipo_entidad.nombre", name: "tipo_entidad.nombre" },
            {
                data: "created_at",
                name: "created_at",
                render: function (data) {
                    try {
                        return moment(data).format("DD/MM/YYYY HH:mm");
                    } catch (error) {
                        console.error("Error formatting date:", error);
                        return data;
                    }
                },
            },
            {
                data: "action",
                name: "action",
                orderable: false,
                searchable: false,
            },
        ],
        language: {
            url: "build/json/Spanish.json",
        },
        responsive: true,
    });
});

function verEntidad(id) {
    // Implementar lógica para ver entidad
    console.log("Ver entidad con ID:", id);
}

function editarEntidad(id) {
    // Implementar lógica para editar entidad
    console.log("Editar entidad con ID:", id);
}

function eliminarEntidad(id) {
    // Implementar lógica para eliminar entidad
    console.log("Eliminar entidad con ID:", id);
}
