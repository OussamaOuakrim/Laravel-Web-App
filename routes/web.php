<?php



use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReservationController;
use App\Models\Reservation ;
use App\Http\Controllers\UserController;
use App\Models\User ;
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
    return view('welcome');
});

//auth route for both 
Route::group(['middleware' => ['auth']], function() { 
    Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index')->name('dashboard');
});

require __DIR__.'/auth.php';
Route::get('/log', function () {
    return view('auth.login-perso');
});
Route::get('/home', function () {
    return view('Home');
});

Route::get('/cart', function () {
    return view('user.user-cart');
});
Route::get('/reserve',function() {
      return view('user.user-reservation');
});
Route::post('/reserve',function(){      // Route to save Data inside the DB 
   $reservation = new Reservation();
   $reservation->Name = request('name');
   $reservation->Date = request('date');
   $reservation->Hour = request('hour');
   $reservation->save();
   return redirect('/home');
});

Route::get('/users', function () {
    return view('admin.users');
});
Route::get('/crud', function () {
    return view('admin.crud');
});
Route::get('/sendmail', function () {
    return view('sendmail');
});
Route::get('users2',[UserController::class,'show']);      // Route to display data from DB using Controller Model and table migrations 

Route::get('reservations', [ReservationController::class,'show']);