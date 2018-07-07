<?php

namespace App\Http\Controllers;
//include Africastalking gateway
require_once base_path ("/vendor/Africastalking/AfricasTalkingGateway.php");

use Illuminate\Http\Request;
use Spatie\GoogleCalendar\Event;
class omasetteController extends Controller
{

    public function test_sms()
    var_dump(event::get);
    dd() {
      // Specify your authentication credentials
  $username   = "Hcity";
  $apikey     = "7c9a6ed2ebc4367a88842cc30b9452084338b2a12c1ea07fa5193583b7412eb8";
  // Specify the numbers that you want to send to in a comma-separated list
  // Please ensure you include the country code (+254 for Kenya in this case)
  $recipients = "+254743372122, +254705486898";
  // And of course we want our recipients to know what we really do
  $message    = "Ni today buda. Na cha muhimu ni uhai. tupatane kwa Malik";
  // Create a new instance of our awesome gateway class
  $gateway    = new \AfricasTalkingGateway($username, $apikey, 'Htown');
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
