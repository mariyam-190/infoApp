<?php

namespace App\Http\Controllers;
// use Exception;
// use Twilio\Rest\Client;
use Illuminate\Http\Request;

class SendMessageController extends Controller
{
    public function sendmessage(Request $request)
    {
        $input = $request->all();
        dd($input);

        // $receiverNumber = "RECEIVER_NUMBER";
        // $message = "Your Flight Details";

        // try {

        //     $account_sid = getenv("TWILIO_SID");
        //     $auth_token = getenv("TWILIO_TOKEN");
        //     $twilio_number = getenv("TWILIO_FROM");

        //     $client = new Client($account_sid, $auth_token);
        //     $client->messages->create($receiverNumber, [
        //         'from' => $twilio_number,
        //         'body' => $message]);

        //     dd('SMS Sent Successfully.');

        // } catch (Exception $e) {
        //     dd("Error: ". $e->getMessage());
        // }
    }
}

