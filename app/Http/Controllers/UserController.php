<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $search = request()->get('search');
        $users = User::with('orders')
            ->where('name', 'LIKE', '%'.$search.'%')
            ->get();
        return $users;
    }

    public function store(Request $request)
    {
        $data = $request->get('data');
        $user = User::firstOrCreate(["email" => $data['email']], $data);
        /*$user = new User($data);
        $user->save();*/
        return $user;
    }

    public function show($id)
    {
        return User::find($id);
    }

    public function update(Request $request, $id)
    {
        $data = $request->get('data');
        $user = User::find($id);
        $user->fill($data)->save();
        return $user;
    }

    public function destroy($id)
    {
        return User::destroy($id);
    }

    public function getProductsDetails($user_id) {
        $results = User::find($user_id)
            ->with('orders.products')
            ->first();
        return $results;
    }

    public function checkIfBuyedProduct($user_id, $product_id) {
        $result = User::find($user_id)
            ->with('orders.products')
            ->whereHas('orders.products', function($query) use ($product_id) {
                $query->where('id', $product_id);
            })
            ->get();
        return $result;
    }

    private function scalaSaldo($utente, $costo){
        $utente['saldo']-=$costo;
        $utente->save();
    }

    public function makeOrder(Request $request){
        $data=$request->input();
        $utente=User::find($data['user_id']);
        $prodotto=Product::find($data['product_id']);
        $quantita=$data['quantita'];
        $costo=$quantita*$prodotto['prezzo'];
        if($prodotto['quantita'] >= $quantita && $utente['saldo'] >= $costo){
            (new OrdersController())->creaOrdine($costo, $data);
            $this->scalaSaldo($utente, $costo);
            (new ProductsController())->scalaQuantita($prodotto, $quantita);
        }else{
            return "errore";
        }
    }

    public function aggiungiSaldo($utente, $saldo){
        $utente['saldo']+=$saldo;
        $utente->save();
    }

    public function deleteOrder(Request $request)
    {
        try {
            $data = $request->input();
            $ordine = Order::find($data['id']);
            $utente = User::find($ordine['user_id']);
            $this->aggiungiSaldo($utente,$ordine['prezzo']+$ordine['costo_spedizione']);
            $prodotto = Product::find($ordine['product_id']);
            (new ProductsController())->aggiungiQuantita($prodotto,$ordine['quantita']);
            (new OrdersController())->deleteOrder($data['id']);
        } catch (\Exception $e) {
            return "ERRORE".$e->getFile().$e->getMessage().$e->getLine();
        }
    }

    public function fallimenti () {
        return ("Si narra che tutti coloro che hanno provato a fare la funzione
        'findOrderByProduct' sono periti. I nomi dei pavidi cavalieri periti in battaglia sono:
        Rory Cannata, Ettore Casamento, Michele Lo Giudice, Andrea Aviusocognomu, Vincenzo Avinautrucognomiancora
         e Simone Battiato, il quale però con un ultimo sforzo è riuscito a sconfiggere il temibile Laravel.");
    }

    public function vincitori () {
        return ("WALL OF FAME: Simone Battiato");
    }
}
