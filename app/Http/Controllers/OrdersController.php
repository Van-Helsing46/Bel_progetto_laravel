<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $orders = Order::with('users')
            ->where('user_id', $id)
            ->get();
        return $orders;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function creaOrdine($totale, $data){
        $data['prezzo']=$totale;
        $data['costo_spedizione']='4.90';
        (new Order($data))->save();
    }

    public function showOrder(Request $request){
        $data=$request->input();
        $ordine=Order::find($data['id']);
        return $ordine;
    }

    public function showUserOrders (Request $request) {
        try {
            $data = $request->input();
            $risultato = User::with('orders')->find($data['user_id']);
            return $risultato;
        } catch (\Exception $e){
            return "ciccio con la palla".$e->getFile().$e->getMessage().$e->getLine();
        }
    }
}
