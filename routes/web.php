<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegistroDocentesController;
use App\Http\Controllers\DocenteController;
use App\Http\Controllers\EstudioController;
use App\Http\Controllers\CapacitacionController;
use App\Http\Controllers\ExperienciaDocenteController;
use App\Http\Controllers\ExperienciaProfesionalController;
use App\Http\Controllers\ReconocimientoController;
use App\Http\Controllers\ProduccionController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
  //  return view('welcome');
  return view('auth/login');
});

Auth::routes();
// Route User

Route::middleware(['auth','user-role:user'])->group(function()
{
    Route::get("/home",[HomeController::class, 'userHome'])->name("home");
});
// Route Editor
Route::middleware(['auth','user-role:editor'])->group(function()
{
    Route::get("/editor/home",[HomeController::class, 'editorHome'])->name("editor.home");
    Route::get('registro', [DocenteController::class, 'index'])->name('registro');
    Route::post('add', [DocenteController::class, 'add'])->name('add');
    Route::get('edit/{id}', [DocenteController::class, 'edit'])->name('edit');
    Route::put('/update/{id}', [DocenteController::class, 'update'])->name('update');

    Route::post('/add-study', [EstudioController::class, 'addStudy'])->name('add_study');
    Route::put('/update-study', [EstudioController::class, 'updateStudy'])->name('update_study');
    Route::delete('/delete-study/{id}', [EstudioController::class, 'deleteStudy']);

    Route::post('/add-training', [CapacitacionController::class, 'addTraining'])->name('add_training');
    Route::put('/update-training', [CapacitacionController::class, 'updateTraining'])->name('update_training');
    Route::delete('/delete-training/{id}', [CapacitacionController::class, 'deleteTrainingy']);

    Route::post('/add-profeexperience', [ExperienciaProfesionalController::class, 'addProfeexperience'])->name('add_profeexperience');
    Route::put('/update-profeexperience', [ExperienciaProfesionalController::class, 'updateProfeexperience'])->name('update_profeexperience');
    Route::delete('/delete-profeexperience/{id}', [ExperienciaProfesionalController::class, 'deleteProfeexperience']);
    
    Route::post('/add-teacherexperience', [ExperienciaDocenteController::class, 'addteacherexperience'])->name('add_teacherexperience');
    Route::put('/update-teacherexperience', [ExperienciaDocenteController::class, 'updateteacherexperience'])->name('update_teacherexperience');
    Route::delete('/delete-teacherexperience/{id}', [ExperienciaDocenteController::class, 'deleteteacherexperience']);
    
    Route::post('/add-production', [ProduccionController::class, 'addproduction'])->name('add_production');
    Route::put('/update-production', [ProduccionController::class, 'updateproduction'])->name('update_production');
    Route::delete('/delete-production/{id}', [ProduccionController::class, 'deleteproduction']);
    

});

// Route Admin
Route::middleware(['auth','user-role:admin'])->group(function()
{
    Route::get("/admin/home",[HomeController::class, 'adminHome'])->name("admin.home");
    Route::get('listar', [App\Http\Controllers\ListarDocentesController::class, 'index'])->name('listar');
   
});


Route::get('dashboard', [App\Http\Controllers\DocenteController::class, 'index'])->name('dashboard');




