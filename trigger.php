<?php

							//Dialogflow-Fulfillment


 $ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://ca1treament.herokuapp.com/");
// Set so curl_exec returns the result instead of outputting it.

curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
curl_setopt($ch, CURLOPT_TIMEOUT, 30);
//BugfixPart1


curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// Get the response and close the channel.
$response = curl_exec($ch);

if(curl_errno($ch)){
    throw new Exception(curl_error($ch));
}
//BugfixPar2

curl_close($ch);

//-----------------------------------------------------------------------------------------------------------------------------

								//Sarah1
 $ci = curl_init();
curl_setopt($ci, CURLOPT_URL, "https://chatbotexperiment1.herokuapp.com/");

curl_setopt($ci, CURLOPT_CONNECTTIMEOUT, 10);
curl_setopt($ci, CURLOPT_TIMEOUT, 30);
//BugfixPart1

// Set so curl_exec returns the result instead of outputting it.
curl_setopt($ci, CURLOPT_RETURNTRANSFER, true);
// Get the response and close the channel.
$response1 = curl_exec($ci);

if(curl_errno($ci)){
    throw new Exception(curl_error($ci));
}
//BugfixPar2


curl_close($ci);

//-----------------------------------------------------------------------------------------------------------------------------

									//Sarah2

 $cf = curl_init();
curl_setopt($cf, CURLOPT_URL, "https://ca2experiment.herokuapp.com/");
// Set so curl_exec returns the result instead of outputting it.

curl_setopt($cf, CURLOPT_CONNECTTIMEOUT, 10);
curl_setopt($cf, CURLOPT_TIMEOUT, 30);
//BugfixPart1


curl_setopt($cf, CURLOPT_RETURNTRANSFER, true);
// Get the response and close the channel.
$response2 = curl_exec($cf);

if(curl_errno($cf)){
    throw new Exception(curl_error($cf));
}
//BugfixPar2


curl_close($cf);
?>	
