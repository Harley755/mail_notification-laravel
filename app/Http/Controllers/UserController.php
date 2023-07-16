<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Notifications\BirthdayWish;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $user = User::find(1);

        $messages["hi"] = "Hey, Happy Birthday {$user->name}";
        $messages["wish"] = "On behalf of the entire company I wish you a very happy birthday and send you my best wishes for much happiness in your life.";

        $user->notify(new BirthdayWish($messages));

        dd('Done');
    }
}
