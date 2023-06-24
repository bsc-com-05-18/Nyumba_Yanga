<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;
use App\Models\Landlord;
use App\Models\User;
use App\Models\Assignments;
use Chatify\Facades\ChatifyMessanger as Chatify;

class ChatController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $chats = Chatify::getChats($user->id);    
         return view('landlord.rent', compact('chats'));
    }

    public function show($conversation)
    {
        $user = auth->user();
        $chats = Chatify::getChats($user->id);  
        $chat = Chatify::getChatById($conversation)  ;

        if (!$chat) {
            abort(404);
        }

        return view('chats.show', compact('chats', 'chat'));
    }
    public function storeMessage(Request $request, $conversation)
    {
        $user = auth->user();
        $chat = Chatify::getChatById($conversation);

        if (!$chat) {
            abort(404);
        }

        $message = Chatify::newMessage($request->message, $conversation)->send(auth()->user()->id);

        if ($message) {
            return response()->json(['success' => true, 'message' => 'Message sent successfully']);
        }
        else 
        {
            return response()->json(['success' => false, 'message' => 'Message NOT sent successfully']);

        }


    }
}
