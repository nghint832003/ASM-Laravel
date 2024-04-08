<?php

use Illuminate\Support\Facades\Route;

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

 Route::get('/',[App\Http\Controllers\RoomController::class,'inforRoom'])->name('infor-room');
 Route::post('/',[App\Http\Controllers\BillController::class,'add'])->name('add-bill');

Route::get('home2',function(){
    return view('admin.image.add');
});

Route::prefix('admin')->group(function(){
    Route::get('image/list',[App\Http\Controllers\ImageController::class,'list'])->name('list-image');
    Route::get('image/add',[App\Http\Controllers\ImageController::class,'add'])->name('add-image');
    Route::post('image/add',[App\Http\Controllers\ImageController::class,'handleAdd'])->name('handleAdd-image');
    Route::get('image/edit/{id}',[App\Http\Controllers\ImageController::class,'edit'])->name('edit-image');
    Route::post('image/edit/{id}',[App\Http\Controllers\ImageController::class,'handleEdit'])->name('handleEdit-image');
    Route::get('image/delete/{id}',[App\Http\Controllers\ImageController::class,'delete'])->name('delete-image');


    Route::get('roomType/list',[App\Http\Controllers\RoomtypeController::class,'list'])->name('list-roomtype');
    Route::get('roomType/add',[App\Http\Controllers\RoomtypeController::class,'add'])->name('add-roomtype');
    Route::post('roomType/add',[App\Http\Controllers\RoomtypeController::class,'handleAdd'])->name('handleAdd-roomtype');
    Route::get('roomType/edit/{id}',[App\Http\Controllers\RoomtypeController::class,'edit'])->name('edit-roomtype');
    Route::post('roomtype/edit/{id}',[App\Http\Controllers\RoomTypeController::class,'handleEdit'])->name('handleEdit-roomtype');
    Route::get('roomtype/delete/{id}',[App\Http\Controllers\RoomTypeController::class,'delete'])->name('delete-roomtype');

    Route::get('room/list',[App\Http\Controllers\RoomController::class,'list'])->name('list-room');
    Route::get('room/add',[App\Http\Controllers\RoomController::class,'add'])->name('add-room');
    Route::post('room/add',[App\Http\Controllers\RoomController::class,'handleAdd'])->name('handleAdd-room');
    Route::get('room/edit/{id}',[App\Http\Controllers\RoomController::class,'edit'])->name('edit-room');
    Route::put('room/edit/{id}',[App\Http\Controllers\RoomController::class,'handleEdit'])->name('handleEdit-room');
    Route::get('room/delete/{id}',[App\Http\Controllers\RoomController::class,'delete'])->name('delete-room');

    Route::get('bill/list',[App\Http\Controllers\BillController::class,'list'])->name('list-bill');

});


