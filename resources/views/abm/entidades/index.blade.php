 {{-- resources/views/abm/entidades/index.blade.php --}}
 @extends('layouts.app')

 @section('title', 'Entidades')
 @section('content')
     <div class="card">
         <div class="card-header d-flex justify-content-between">
             <h3>Entidades</h3>
             <button class="btn btn-info add-btn" data-bs-toggle="modal" data-bs-target="#modalAltaEntidad"><i
                     class="ri-add-fill me-1 align-bottom"></i> Crear Entidad</button>
         </div>
         <div class="card-body">
             @if (session('success'))
                 <div class="alert alert-success">{{ session('success') }}</div>
             @endif

             <table id="datatable-entidades"
                 class="table table-bordered dt-responsive nowrap table-striped align-middle table-sm">
                 <thead>
                     <tr>
                         <th>ID</th>
                         <th>Nombre</th>
                         <th>Tipo</th>
                         <th>Estado</th>
                         <th>Acciones</th>
                     </tr>
                 </thead>
                 <tbody>
                 </tbody>
             </table>
         </div>
     </div>
     @include('abm.entidades.create')
 @endsection
 @section('script')
     <script src="{{ URL::asset('build/js/pages/entidades.js') }}"></script>
 @endsection
