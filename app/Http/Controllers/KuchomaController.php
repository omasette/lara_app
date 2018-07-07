<?php

namespace App\Http\Controllers;

require_once '/home/omasette/lara_app/vendor/Africastalking/AfricasTalkingGateway.php';

use Illuminate\Http\Request;

class KuchomaController extends Controller
{
  public function tuchome(){
KuchomaController::send();
}
public static function send(){

// Specify your authentication credentials


$username   = env('AFRICASTALKING_USERNAME');
$apikey     = env('AFRICASTALKING_API');


// Specify the numbers that you want to send to in a comma-separated list
// Please ensure you include the country code (+254 for Kenya in this case)
$recipients = "+254717887675";

// And of course we want our recipients to know what we really do
$message    = "from deep down i know it is you i want to be with. come rain come shine i choose no one but you. nakupenda WAWIRA. ";

// Create a new instance of our awesome gateway class
$gateway    = new \AfricasTalkingGateway($username, $apikey, env('AFRICASTALKING_APP'));
/*************************************************************************************
NOTE: If connecting to the sandbox:
1. Use "sandbox" as the username
2. Use the apiKey generated from your sandbox application
   https://account.africastalking.com/apps/sandbox/settings/key
3. Add the "sandbox" flag to the constructor
$gateway  = new AfricasTalkingGateway($username, $apiKey, "sandbox");
**************************************************************************************/
// Any gateway error will be captured by our custom Exception class below,
// so wrap the call in a try-catch block
try
{
// Thats it, hit send and we'll take care of the rest.
$results = $gateway->sendMessage($recipients, $message);

foreach($results as $result) {
  // status is either "Success" or "error message"
  echo " Number: " .$result->number;
  echo " Status: " .$result->status;
  echo " StatusCode: " .$result->statusCode;
  echo " MessageId: " .$result->messageId;
  echo " Cost: "   .$result->cost."\n";
}
}
catch ( AfricasTalkingGatewayException $e )
{
echo "Encountered an error while sending: ".$e->getMessage();
}
// DONE!!!
}

}
