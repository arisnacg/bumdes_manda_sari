<?php

Route::get("/", "PageController@index");
Route::get("/home", function(){
	return redirect(route("dashboard"));
});
Route::get("/usaha/{url}", "PageController@unitUsaha")->name("page.unit_usaha");

Auth::routes();

Route::group(["prefix" => "dashboard",  "middleware" => "auth"], function () {
	Route::get("/", "DashboardController@index")->name("dashboard");
	/////////////////////////////////////////////////////////////////////////////////////
	//CRUD
	/////////////////////////////////////////////////////////////////////////////////////
	//Jenis Usaha
	Route::resource("jenis_unit_usaha", "JenisUnitUsahaController")->names("jenis_unit_usaha");
	//Unit Usaha
	Route::resource("unit_usaha", "UnitUsahaController")->names("unit_usaha");
	Route::get("unit_usaha/{id}/gambar", "UnitUsahaController@viewUpdateGambar")->name("unit_usaha.gambar");
	Route::get("unit_usaha/{id}/deskiprsi", "UnitUsahaController@viewUpdateDeskripsi")->name("unit_usaha.deskripsi");
	Route::post("unit_usaha/{id}/deskiprsi", "UnitUsahaController@updateDeskripsi");
	Route::post("unit_usaha/{id}/gambar", "UnitUsahaController@updateGambar");
	//Kategori blog
	Route::resource("kategori_blog", "KategoriBlogController")->names("kategori_blog");
	//Blog
	Route::resource("blog", "BlogController")->names("blog");
});
