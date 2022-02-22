<?php

namespace App\Http\Controllers;

use App\Models\Seller;
use Illuminate\Http\Request;

class SellerController extends Controller
{

    public function index()
    {
        return Seller::all();
    }

    public function create()
    {
       //
    }

    public function store(Request $request)
    {
        $data = $request->get('data');
        $seller = new Seller($data);
        $seller->save();
        return $seller;
    }

    public function show($id)
    {
        return Seller::find($id);
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $data = $request->get('data');
        $seller = Seller::find($id);
        $seller->fill($data)->save();
        return $seller;
    }

    public function destroy($id)
    {
        return Seller::destroy($id);
    }
}
