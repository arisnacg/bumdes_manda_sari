<?php

Route::get("/", "PageController@index");
Route::get("/webpage", function(){
	return redirect("/");
})->name("webpage");
Route::get("home", function(){
	return redirect(route("dashboard"));
});
Route::get("about", "PageController@about")->name("about");
Route::get("usaha/{url}", "PageController@unitUsaha")->name("page.unit_usaha");
Route::get("blog/{url}", "PageController@blog")->name("page.blog");
Route::get("daftar/blog", "PageController@daftarBlog")->name("page.daftar_blog");
Route::get("daftar/usaha", "PageController@daftarUsaha")->name("page.daftar_usaha");
Route::get("program/anggota/{id}", "PageController@anggotaProgram")->name("page.program.anggota");
Route::get("program/{url}", "PageController@program")->name("page.program");
Route::get("kerjasama", "PageController@kerjasama")->name("page.kerjasama");

Auth::routes();

Route::group(["prefix" => "dashboard",  "middleware" => "auth"], function () {
	Route::get("/", "DashboardController@index")->name("dashboard");
	Route::get("/ganti-password", "DashboardController@gantiPassword")->name("ganti_password");
	Route::post("/ganti-password", "DashboardController@updatePassword");
	/////////////////////////////////////////////////////////////////////////////////////
	//CRUD

	//Anggota tentang kami
	Route::resource("anggota", "AnggotaController")->names("anggota");

	// Kerjasama
	Route::resource("kerjasama", "KerjasamaController")->names("kerjasama");
	//Anggota Program
	Route::resource("anggota_program", "AnggotaProgramController")->names("anggota_program");
	Route::get("anggota_program/{id_program}/add", "AnggotaProgramController@add")->name("anggota_program.add");
	Route::get("anggota_program/{id}/ganti_foto", "AnggotaProgramController@gantiFoto")->name("anggota_program.ganti_foto");
	Route::post("anggota_program/{id}/ganti_foto", "AnggotaProgramController@updateFoto");
	// Program
	Route::resource("program", "ProgramController")->names("program");
	Route::get("program/{id}/gambar", "ProgramController@viewUpdateGambar")->name("program.gambar");
	Route::post("program/{id}/gambar", "ProgramController@updateGambar");
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
	Route::get("blog/{id}/gambar", "BlogController@viewUpdateGambar")->name("blog.gambar");
	Route::post("blog/{id}/gambar", "BlogController@updateGambar");
	//Galllery
	Route::get("unit_usaha/gallery_usaha/{id_unit_usaha}", "GalleryUsahaController@gallery")->name("gallery_usaha.gallery");
	Route::get("gallery_usaha/add/{id_unit_usaha}", "GalleryUsahaController@add")->name("gallery_usaha.add");
	Route::resource("gallery_usaha", "GalleryUsahaController")->names("gallery_usaha");


});
