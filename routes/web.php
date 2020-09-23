<?php


use Illuminate\Http\Request;
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
    return view("guest.form");
});


Route::get("/formtosendpostmethod", function(){
	return view("guest.form");
});

Route::post("/testrequest", function(Request $request){
	$data=[[
		"name"=>$request->post()["name"],
		"lastname"=>$request->post()["lastname"],
		"address"=>$request->post()["address"],
		"biography"=>$request->post()["biography"],
		"birthdate"=>$request->post()["birthdate"]
	]];

	return view("guest.table", ["newdata"=>$data]);
})->name("posttest");

