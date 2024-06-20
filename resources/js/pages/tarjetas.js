$(function () {
    var datatable_tarjetas = $("#datatable_tarjetas");

    axios
        .get("/api/tarjetas")
        .then((response) => {
            console.log("Entidades obtenidas:", response.data);
            datatable_tarjetas.DataTable({
                data: response.data,
                columns: [
                    { data: "id" },
                    { data: "descripcion" },
                    { data: "entidad.nombre" },
                    { data: "estado" },
                    {
                        data: null,
                        render: function (data) {
                            return `<div class="d-flex justify-content-center gap-2 column-gap-0">
                                            <button id="btnVer" class="btn bg-gradient waves-effect waves-light btn-info py-1 px-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Ver" ><i class="ri-eye-line"></i></button>
                                            <button id="btnModificar" class="btn bg-gradient waves-effect waves-light btn-primary py-1 px-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Modificar" ><i class="ri-pencil-line"></i></button>
                                            <button id="btnConfirmar" class="btn bg-gradient waves-effect waves-light btn-success py-1 px-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Cerrar Fondo Fijo" ><i class="ri-shield-check-line"></i></button>
                                            <button id="btnEliminar" class="btn bg-gradient waves-effect waves-light btn-danger py-1 px-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Eliminar" ><i class="ri-delete-bin-2-line"></i></button>
                                        </div>`;
                        },
                    },
                ],
                language: {
                    url: "build/json/Spanish.json",
                },
                responsive: true,
            });
        })
        .catch((error) => {
            console.error("Error al obtener entidades:", error);
        });
});
