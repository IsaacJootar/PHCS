<?php

use App\Http\Controllers\NoteController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DailyController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TetanusController;
use App\Http\Controllers\AntenatalController;
use App\Http\Controllers\DeliveryController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\StaffController;



Route::get('/', function () {
    return view('auth.login');
});
Route::get('/password', function () {
    return view('auth.reset-password');
})->middleware(['auth', 'verified'])->name('password');


route::view('/addstaff','addstaff');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/calender', function () {
    return view('calender');
})->middleware(['auth', 'verified'])->name('calender');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});





// Route for daily record //
route::middleware('auth')->group(function () {
Route::get('/dailies', [DailyController::class, 'index'])->name('dailies.index');
Route::get('/dailies/create', [DailyController::class, 'create'])->name('dailies.create');
Route::post('/dailies', [DailyController::class, 'store'])->name('dailies.store');
Route::get('/dailies/{daily}', [DailyController::class, 'show'])->name('dailies.show');
Route::get('/dailies/{daily}/edit', [DailyController::class, 'edit'])->name('dailies.edit');
Route::put('/dailies/{daily}', [DailyController::class, 'update'])->name('dailies.update');
Route::delete('/dailies/{daily}', [DailyController::class, 'destroy'])->name('dailies.destroy');
});


// Route for Antenata //
route::middleware('auth')->group(function () {
Route::get('/antenatals', [AntenatalController::class, 'index'])->name('antenatals.index');
Route::get('/antenatals/create', [AntenatalController::class, 'create'])->name('antenatals.create');
Route::post('/antenatals', [AntenatalController::class, 'store'])->name('antenatals.store');
Route::get('/antenatals/{antenatal}', [AntenatalController::class, 'show'])->name('antenatals.show');
Route::get('/antenatals/{antenatal}/edit', [AntenatalController::class, 'edit'])->name('antenatals.edit');
Route::put('/antenatals/{antenatal}', [AntenatalController::class, 'update'])->name('antenatals.update');
Route::delete('/antenatals/{antenatal}', [AntenatalController::class, 'destroy'])->name('antenatals.destroy');
});


// Routes for Post natal records//
route::middleware('auth')->group(function () {
Route::get('/post_natal', [PostController::class, 'index'])->name('post_natal.index');
Route::get('/post_natal/create', [PostController::class, 'create'])->name('post_natal.create');
Route::post('/post_natal', [PostController::class, 'store'])->name('post_natal.store');
Route::get('/post_natal/{post}', [PostController::class, 'show'])->name('post_natal.show');
Route::get('/post_natal/{post}/edit', [PostController::class, 'edit'])->name('post_natal.edit');
Route::put('/post_natal/{post}', [PostController::class, 'update'])->name('post_natal.update');
Route::delete('/post_natal/{post}', [PostController::class, 'destroy'])->name('post_natal.destroy');
});

//Route for Tetanus record //
route::middleware('auth')->group(function () {
Route::get('/tetanus', [TetanusController::class, 'index'])->name('tetanus.index');
Route::get('/tetanus/create', [TetanusController::class, 'create'])->name('tetanus.create');
Route::post('/tetanus', [TetanusController::class, 'store'])->name('tetanus.store');
Route::get('/tetanus/{tetanus}', [TetanusController::class, 'show'])->name('tetanus.show');
Route::get('/tetanus/{tetanus}/edit', [TetanusController::class, 'edit'])->name('tetanus.edit');
Route::put('/tetanus/{tetanus}', [TetanusController::class, 'update'])->name('tetanus.update');
Route::delete('/tetanus/{tetanus}', [TetanusController::class, 'destroy'])->name('tetanus.destroy');
});



// Route for Deliveries //
Route::get('/deliveries', [DeliveryController::class, 'index'])->name('deliveries.index');
Route::get('/deliveries/create', [DeliveryController::class, 'create'])->name('deliveries.create');
Route::post('/deliveries', [DeliveryController::class, 'store'])->name('deliveries.store');
Route::get('/deliveries/{delivery}', [DeliveryController::class, 'show'])->name('deliveries.show');
Route::get('/deliveries/{delivery}/edit', [DeliveryController::class, 'edit'])->name('deliveries.edit');
Route::put('/deliveries/{delivery}', [DeliveryController::class, 'update'])->name('deliveries.update');
Route::delete('/deliveries/{delivery}', [DeliveryController::class, 'destroy'])->name('deliveries.destroy');



// Route for A clients record-gets record from assessement register,its a once time register for everyone //
route::middleware('auth')->group(function () {
Route::get('/clients', [ClientController::class, 'index'])->name('clients.index');
Route::get('clients/{antenatal}', [ClientController::class, 'show'])->name('clients.show'); // pass the atenatal model object here to gain access to variables

});
//Route for clinic Notes record //
route::middleware('auth')->group(function () {
Route::get('/notes', [NoteController::class, 'index'])->name('notes.index');
Route::get('/notes/create', [NoteController::class, 'create'])->name('notes.create');
Route::post('/notes', [NoteController::class, 'store'])->name('notes.store');
Route::get('/notes/{note}', [NoteController::class, 'show'])->name('notes.show');
Route::get('/notes/{note}/edit', [NoteController::class, 'edit'])->name('notes.edit');
Route::put('/notes/{note}', [NoteController::class, 'update'])->name('notes.update');
Route::delete('/notes/{note}', [NoteController::class, 'destroy'])->name('notes.destroy');

});


require __DIR__.'/auth.php';
