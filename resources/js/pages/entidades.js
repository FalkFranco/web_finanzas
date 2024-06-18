$(function () {
    var datatable_entidades = $("#datatable-entidades");

    axios
        .get("/api/entidades")
        .then((response) => {
            console.log("Entidades obtenidas:", response.data);
            datatable_entidades.DataTable({
                data: response.data,
                columns: [
                    { data: "id" },
                    { data: "nombre" },
                    { data: "tipo_entidad_id" },
                    { data: "created_at" },
                    { data: "updated_at" },
                ],
            });
        })
        .catch((error) => {
            console.error("Error al obtener entidades:", error);
        });
});
