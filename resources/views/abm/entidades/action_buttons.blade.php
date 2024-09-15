<div class="d-flex justify-content-center gap-2">
    <button class="btn btn-info btn-sm" onclick="verEntidad({{ $entidad->id }})" title="Ver">
        <i class="ri-eye-line"></i>
    </button>
    <button class="btn btn-primary btn-sm" onclick="editarEntidad({{ $entidad->id }})" title="Modificar">
        <i class="ri-pencil-line"></i>
    </button>
    <button class="btn btn-danger btn-sm" onclick="eliminarEntidad({{ $entidad->id }})" title="Eliminar">
        <i class="ri-delete-bin-2-line"></i>
    </button>
</div>
