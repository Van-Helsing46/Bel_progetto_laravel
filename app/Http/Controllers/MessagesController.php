<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessagesController extends Controller
{

    public function index()
    {
        return Message::all();
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $data = $request->get('data');
        $message = new Message($data);
        $message->save();
        return $message;
    }

    public function show($id)
    {
        return Message::find($id);
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $data = $request->get('data');
        $message = Message::find($id);
        $message->fill($data)->save();
        return $message;
    }

    public function destroy($id)
    {
        return Message::destroy($id);
    }
}
