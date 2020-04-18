<?php

use Illuminate\Database\Seeder;
use App\Blog;
use App\KategoriBlog;
use Faker\Factory as Faker;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        $kategori_blog = KategoriBlog::all();
        $jumlah = 100;
        for($i = 0; $i < $jumlah; $i++){
        	$kategori = $kategori_blog[rand(0, count($kategori_blog)-1)];
        	$judul = "Blog ".$kategori->nama." No. ".($i+1);
        	Blog::create([
        		"judul" => $judul,
		    	"url" => preg_replace('/[^A-Za-z0-9\-]/', '', str_replace(' ', '-', strtolower($judul))),
		    	"isi" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
							cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
							proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
		    	"dikunjungi" => rand(0, 1000),
        		"id_kategori" => $kategori->id,
        		"id_penulis" => 1
        	]);
        }
    }
}
