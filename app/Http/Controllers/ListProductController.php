<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListProductController extends Controller
{
    public function getData(){
        //logika untuk mendapatkan array data
        $dataProduct = [
            ['id' => 1, 'nama' => 'Raw coconut', 'minimum order' => '30/pcs', 'production time' => '12 Days'],
            ['id' => 2, 'nama' => 'Coconut shell', 'minimum order' => '30/pcs', 'production time' => '12 Days'],
            ['id' => 3, 'nama' => 'Coconut milk', 'minimum order' => '30/pcs', 'production time' => '12 Days'],
            ['id' => 4, 'nama' => 'Coconut fiber', 'minimum order' => '30/pcs', 'production time' => '12 Days'],
            ['id' => 5, 'nama' => 'Coconut sugar', 'minimum order' => '30/pcs', 'production time' => '12 Days'],
            ['id' => 6, 'nama' => 'Virgin coconut oil', 'minimum order' => '30/pcs', 'production time' => '12 Days'],
            ['id' => 7, 'nama' => 'RBD coconut oil ', 'minimum order' => '30/pcs', 'production time' => '12 Days'],
            ['id' => 8, 'nama' => 'Coconut block sugar', 'minimum order' => '30/pcs', 'production time' => '12 Days'],
        ];

        return $dataProduct;
    }

    public function product()
    {
        $data = $this->getData();
        return view('list_product', compact('data'));
    }
}
