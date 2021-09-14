<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<!DOCTYPE html>
<html lang="en">
  <head>
      <script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async></script>
<script>
  window.OneSignal = window.OneSignal || [];
  OneSignal.push(function() {
    OneSignal.init({
      appId: "6d6042b4-0894-4d7f-8d45-15a478a526b4",
      safari_web_id: "web.onesignal.auto.32551e0e-3454-416e-9258-23f2fe99c3c8",
      notifyButton: {
        enable: true,
      },
    });
  });
</script>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

  </head>
  <body>
    <h1>Hello, world!</h1>

    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
  </body>
</html>
<?php 
//function sendMessage() {
//    $content      = array(
//        "en" => 'English Messageas'
//    );
//    $hashes_array = array();
//    array_push($hashes_array, array(
//        "id" => "like-button",
//        "text" => "testtest",
//        "icon" => "http://i.imgur.com/N8SN8ZS.png",
//        "url" => "https://ariser2.com"
//    ));
//   
//    $fields = array(
//        'app_id' => "6d6042b4-0894-4d7f-8d45-15a478a526b4",
//        'included_segments' => array(
//            'Subscribed Users'
//        ),
//        'data' => array(
//            "foo" => "bar"
//        ),
//        'contents' => $content,
//        'web_buttons' => $hashes_array
//    );
//    
//    $fields = json_encode($fields);
//    print("\nJSON sent:\n");
//    print($fields);
//    
//    $ch = curl_init();
//    curl_setopt($ch, CURLOPT_URL, "https://onesignal.com/api/v1/notifications");
//    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
//        'Content-Type: application/json; charset=utf-8',
//        'Authorization: Basic OTRhNzhjZjEtNTVkNy00OGVkLWI4NDItNzE1ZjUxYjQ3NGYx'
//    ));
//    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
//    curl_setopt($ch, CURLOPT_HEADER, FALSE);
//    curl_setopt($ch, CURLOPT_POST, TRUE);
//    curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
//    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
//    
//    $response = curl_exec($ch);
//    curl_close($ch);
//    
//    return $response;
//}
//
//
//$response = sendMessage();
//$return["allresponses"] = $response;
//$return = json_encode($return);
//
//$data = json_decode($response, true);
//print_r($data);
//$id = $data['id'];
//print_r($id);
//
//print("\n\nJSON received:\n");
//print($return);
//print("\n");
?>

