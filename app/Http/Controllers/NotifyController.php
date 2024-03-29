<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Notifications\AppliedNotification;

class NotifyController extends Controller
{

    public function send()
    {
       // return 'eeee';

       $user = Auth::user();

        $user->notify( new AppliedNotification());
    }

    public function read()
    {
        $user = Auth::user();

        return view('notifications', compact('user'));
    }

    public function notify($id)
    {
        $user = Auth::user();
        $notify = $user->notifications()->find($id);

        // dd($notify->data['url']);
        $notify->markAsRead();

        return redirect($notify->data['url']);

    }
}
