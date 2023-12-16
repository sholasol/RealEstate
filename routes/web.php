<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\backend\RoleController;
use App\Http\Controllers\backend\AgentController;
use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\backend\PropertyTypeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('', [AuthController::class, 'authLogin'])->name('auth.login');
Route::get('/auth/logout', [AuthController::class, 'adminLogout'])->name('auth.logout');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/dashboard', [DashboardController::class, 'adminDashboard'])->name('admin.dashboard');
    Route::get('/admin/profile', [DashboardController::class, 'adminProfile'])->name('admin.profile');
    Route::post('/uploadImg', [DashboardController::class, 'uploadImg'])->name('uploadImg');
    Route::post('/changePassword', [DashboardController::class, 'changePassword'])->name('changePassword');
    //changePassword
    Route::get('/admin/property_type', [PropertyTypeController::class, 'propertyType'])->name('admin.property_type');
    Route::get('/admin/create_type', [PropertyTypeController::class, 'createType'])->name('admin.create_type');
    Route::post('/createPropertyType', [PropertyTypeController::class, 'createPropertyType'])->name('createPropertyType');

    Route::get('/admin/edit_type/{id}', [PropertyTypeController::class, 'editType'])->name('admin.edit_type'); // 
    Route::post('updatePropertyType', [PropertyTypeController::class, 'updatePropertyType'])->name('updatePropertyType'); // 
    Route::get('/admin/delete_type/{id}', [PropertyTypeController::class, 'deleteType'])->name('admin.delete_type'); // 

    Route::get('/amenity/all', [PropertyTypeController::class, 'allAmenity'])->name('amenity.all');
    Route::post('/createAmenity', [PropertyTypeController::class, 'createAmenity'])->name('createAmenity');
    Route::post('updateAmenity', [PropertyTypeController::class, 'updateAmenity'])->name('updateAmenity'); // 
    Route::get('/amenity/delete/{id}', [PropertyTypeController::class, 'deleteAmenity'])->name('amenity.delete'); // 

    //Role
    Route::get('/role/permissions', [RoleController::class, 'permissions'])->name('role.permissions');
    Route::get('/createPermission', [RoleController::class, 'createPermission'])->name('createPermission');
});


Route::middleware(['auth', 'role:agent'])->group(function () {
    Route::get('/agent/dashboard', [AgentController::class, 'agentDashboard'])->name('agent.dashboard');
});
