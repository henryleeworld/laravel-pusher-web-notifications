<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\MessageEvent;

class PusherController extends Controller
{
    public function sendNotification() {
        $message = '這是一個測試。';
        event(new MessageEvent($message));
        return "事件已經發送！";
    }
}
