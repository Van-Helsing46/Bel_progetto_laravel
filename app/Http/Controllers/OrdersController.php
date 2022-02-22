<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        $orders = Order::with('users')
            ->where('user_id', $id)
            ->get();
        return $orders;
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

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

    public function findOrderByProduct (Request $request) { //questa funzione non funziona bene e Simone e Michele hanno fallito
        try {
            $data = $request->input();
            $risultato = User::with(['orders'=> function($query) use($data) {
                     $query->where('product_id', $data['product_id'])
                    ->where('user_id', $data['user_id']);
                }])->find($data['user_id']);
//            $risultato = Order::where('product_id', $data['product_id'])
//                ->where('user_id', $data['user_id'])  //questa funzione funziona, ma non come vogliamo
//                ->with('users')->get();               //credit by Michele
            return $risultato;
        } catch (\Exception $e){
            return "ERRORE".$e->getFile().$e->getMessage().$e->getLine();
        }
    }

    public function deleteOrder ($id) {
        try {
            $ordine = Order::destroy($id);
        } catch (\Exception $e) {
            return "ERRORE".$e->getFile().$e->getMessage().$e->getLine();
        }
    }
}
