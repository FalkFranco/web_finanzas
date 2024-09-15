
<?php
// routes/web.php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\EntidadController;
use App\Http\Controllers\TarjetaController;
use App\Http\Controllers\ResumenController;
use App\Http\Controllers\GastoController;

Route::get('/', function () {
    if (Auth::check()) {
        return view('home');
    }
    return view('landing');
});

// Rutas de autenticación
Auth::routes();

// Rutas protegidas por autenticación
Route::middleware(['auth'])->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    // Rutas para Entidades
    // Route::get('/entidades', [EntidadController::class, 'index']);
    // Route::get('/entidades/data', [EntidadController::class, 'getData'])->name('entidades.data'); // Ruta para el Ajax

    Route::group(['prefix' => 'entidades', 'as' => 'entidades.'], function () {
        Route::get('/', [EntidadController::class, 'index'])->name('index');
        Route::get('/data', [EntidadController::class, 'getData'])->name('data');
        Route::get('/create', [EntidadController::class, 'create'])->name('create');
        Route::post('/', [EntidadController::class, 'store'])->name('store');
        Route::get('/{entidad}/edit', [EntidadController::class, 'edit'])->name('edit');
        Route::put('/{entidad}', [EntidadController::class, 'update'])->name('update');
        Route::delete('/{entidad}', [EntidadController::class, 'destroy'])->name('destroy');
    });

    // Rutas para Tarjetas
    Route::resource('tarjetas', TarjetaController::class);

    // Rutas para Resúmenes
    Route::resource('resumenes', ResumenController::class);

    // Rutas para Gastos
    Route::resource('gastos', GastoController::class);
});
