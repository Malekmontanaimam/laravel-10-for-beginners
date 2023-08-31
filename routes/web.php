<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Models\User;
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

Route::get('/', function () {
    // return view('welcome');
//    $user=User::find(1);
//   $user->update([//better
    // 'email'=>'dfhg@gmail.com',
//    ]);
   //like 1 $user=DB::table('users')->where('id',1)->get();//with query  builder
  //  $user=User::find(3);
 //  $user->delete();
 //we have 3 method for select
 //----------------------01-------------
     // $user=DB::select('select * from users');
   //----------------------2-------------------
     //    $user=DB::table('users')->get();
//-------------------------3----------------//
             $user=User::all(); //do not forget the library with models
  //_____________________  //*/*/*/*/**/**/*/*/*/*/**/*/*/*/*/*/*/*/*/*/*/****/*/ */ */ */ */________________________//
 //we have 3 methode for insert worker
 //-----------------------1-------------------//
            // $user=DB::table('users')->insert([
            // 'name'=>'dfg3',
            // 'email'=>'sdf31@gmail.com',
            // 'password'=>'ds'  ]);
   //---------------------2--------------------//
    // $user=DB::insert('insert into users (name,email,password) values (?, ?,?)',
    //  [ 'Dayle','g@gmail.com','password']);
    //---------------------3-------------------
    // $user=User::create([
        // 'name'=>'malek',
        // 'email'=>'imam@gmail.com',
        // 'password'=> ('gfjghfjfgds'),//for security
//  ]);

   dd($user);
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
//the benefit of user models its c0neccted with factory(sql),seed(?),
//controller ,policy, ......
