<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdukController extends Controller
{
	public function index()
	{
		$data['nama'] = "Disal";
		$data['jk'] = "Laki-Laki";
		return view ('belajar', $data);
	}
	
	public function create()
	{
		return view ('produk.form');
	}
	
	public function store(Request $request)
	{
		$rules = [
			'kategori_produk' => 'required',
			'harga_produk' => 'required|numeric|min:1000'
		];
		$this->validate($request, $rules);
	}
}