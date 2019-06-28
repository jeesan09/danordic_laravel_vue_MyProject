<?php

use App\User;
//use Illuminate\Auth\Middleware\Auth;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;


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


 
     $user=Auth()->User();
//Create Role and Permissions  
   // Role::create(['name'=>'role1']); //Create Role
   // Permission::create(['name' => 'fn3']);*/ // Create Permission
  
     $role = Role::findById(1); //Finding a Spacific Role;

//Assaigning Roles and Permissions 
    // $role->givePermissionTo('fn5');// Assaign permission to a spacific role;
    // $user->assignRole('role1');// Assaign role to a user;
    // $user->givePermissionTo('fn2');  //  Assaign Permission to a user


//  Curren Logged in user's Role 
    //return $roles = $user->getRoleNames();

// Different User Permissions    
    //return   $permissions = $user->getDirectPermissions();  // User gets Diect Permission
    // return $permissions = $user->getPermissionsViaRoles(); // User gets Via Role Permission
    // return $permissions = $user->getAllPermissions();  // User gets all Role Permission
   //All permission of a spcific Role   
        //return  $permissions = $role->getAllPermissions(); //Return all the Permission of a Spacific Role






    return view('welcome');
});


Route::get('fn1', 'Auth\LoginController@fn1');
Route::get('fn2', 'Auth\LoginController@fn2');
Route::get('fn3', 'Auth\LoginController@fn3');
Route::get('fn4', 'Auth\LoginController@fn4');
Route::get('fn5', 'Auth\LoginController@fn5');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
