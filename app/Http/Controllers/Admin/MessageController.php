<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Message;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index()
    {
        $userId = Auth::id();

        $userMessages = Message::where('owner_id',$userId)->get();
        return view('admin.messages.index',compact('userMessages'));
    }
}
