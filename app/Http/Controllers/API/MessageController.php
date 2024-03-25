<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Message;
class MessageController extends Controller
{
   public function saveMessage(Request $request)
    {
        $message = new Message();
        $message->user_id = $request->user()->id; // Assuming authenticated user
        $message->content = $request->input('content');
        $message->save();

        return response()->json($message);
    }

    public function getMessages()
    {
        $messages = Message::latest()->take(50)->get(); // Fetch latest 50 messages
        return response()->json($messages);
    }
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    
    public function chat_view(){
        $messages = Message::all();
    $user = auth()->user();
    $fname = $user->fname;
    $lname = $user->lname;
   return view('chat_view', compact('fname', 'lname', 'messages'));
    }
    public function store(Request $request)
    {
    
        $message = Message::create($request->all());
        broadcast(new NewMessageEvent($message))->toOthers();
        return response()->json($message, 201);
    }

    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
