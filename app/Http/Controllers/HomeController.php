<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Home;

class HomeController extends Controller
{
    //
    public function index()
    {
    	// mengambil data pegawai
        $product_update = Home::orderBy('update_at', 'DESC')->get();
        $product_update = $product_update->sortBy('count')->take(6);
        $product_star = Home::orderBy('star', 'DESC')->get();
        $product_star = $product_star->sortBy('count')->take(6);

    	// mengirim data pegawai ke view pegawai
    	return view('home', ['home' => $product_update], ['star' => $product_star]);
    }
}
