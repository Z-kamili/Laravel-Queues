<?php

namespace App\Http\Controllers;

use App\Jobs\customerJob;
use Illuminate\Http\Request;

class EmailController extends Controller
{
    public function sendEmail()
    {
        dispatch(new customerJob())->delay(now()->addMinutes(1));

        dd('email has been dilevred');

    }
}
