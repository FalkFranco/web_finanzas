$(function () {
    var datatable_resumenes = $("#datatable_resumenes");

    axios
        .get("/api/resumenes")
        .then((response) => {
            console.log("Entidades obtenidas:", response.data);
            datatable_resumenes.DataTable({
                data: response.data,
                columns: [
                    { data: "id" },
                    // { data: "tarjeta.descripcion" },
                    {
                        data: null,
                        render: function (data) {
                            return `Resumen de ${data.tarjeta.entidad.nombre} `;
                        },
                    },
                    { data: "fecha_inicio" },
                    { data: "fecha_vencimiento" },
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
