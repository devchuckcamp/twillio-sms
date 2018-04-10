<?php
// Required if your environment does not handle autoloading
require __DIR__ . '/vendor/autoload.php';

// Use the REST API Client to make requests to the Twilio REST API
use Twilio\Rest\Client;

// Your Account SID and Auth Token from twilio.com/console
$sid = 'AC2cf9026ab20a0e0c83db3cc5175ceb84';
$token = 'a8c4948acd3e65f78246961d73feb5eb';
$client = new Client($sid, $token);

// Use the client to do fun stuff like send text messages!
$client->messages->create(
    // the number you'd like to send the message to
    '+639201168197',
    array(
        // A Twilio phone number you purchased at twilio.com/console
        'from' => '+19032011948',
        // the body of the text message you'd like to send
        'body' => 'Hey ian! I was wondering if you wanna have fun with me later tonight. I feel kinky today.!'
    )
);