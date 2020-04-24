<?php
// URL API LINE
$API_URL = 'https://api.line.me/v2/bot/message';
// ใส่ Channel access token (long-lived)
$ACCESS_TOKEN = '7jnVbvPUenlAy0awlVB2lqTUGCbZd7Iqq8aPLHFMkmWqMQyzgmh5HIMOdy/2uDH80qo9dKW867a2+WSpXoeEGodkHo2t9vUaPpDn9jx+dX9ylzV2K42d6GRQxnWLYiGspjxRkurxxd9e6gQO3K6CrgdB04t89/1O/w1cDnyilFU=';
// ใส่ Channel Secret
$CHANNEL_SECRET = '6726449bcbd3c1268eaae176d837844f';
// Set HEADER
$POST_HEADER = array('Content-Type: application/json', 'Authorization: Bearer ' . $ACCESS_TOKEN);

$request = file_get_contents('php://input');   // Get request content
$request_array = json_decode($request, true);   // Decode JSON to Array



if ( sizeof($request_array['events']) > 0 ) {

    foreach ($request_array['events'] as $event) {

        $reply_message = '';
        $reply_token = $event['replyToken'];

        $text = $event['message']['text'];<?php
// URL API LINE
$API_URL = 'https://api.line.me/v2/bot/message';
// ใส่ Channel access token (long-lived)
$ACCESS_TOKEN = '7jnVbvPUenlAy0awlVB2lqTUGCbZd7Iqq8aPLHFMkmWqMQyzgmh5HIMOdy/2uDH80qo9dKW867a2+WSpXoeEGodkHo2t9vUaPpDn9jx+dX9ylzV2K42d6GRQxnWLYiGspjxRkurxxd9e6gQO3K6CrgdB04t89/1O/w1cDnyilFU=';
// ใส่ Channel Secret
$CHANNEL_SECRET = '6726449bcbd3c1268eaae176d837844f';
// Set HEADER
$POST_HEADER = array('Content-Type: application/json', 'Authorization: Bearer ' . $ACCESS_TOKEN);

$request = file_get_contents('php://input');   // Get request content
$request_array = json_decode($request, true);   // Decode JSON to Array



if ( sizeof($request_array['events']) > 0 ) {

    foreach ($request_array['events'] as $event) {

        $reply_message = '';
        $reply_token = $event['replyToken'];

        $text = $event['message']['text'];
//         if($text == 'สมัครฮิดี้'){
//             $text_test = 'สมัครฮิดี้';  
//         }else if($text == 'แลเบี้ยฮิดดี้'){
//             $text_test = 'แลเบี้ยฮิดดี้';   
//         }else{
            $text_test = 'Sanuck';
//         }
        
        $data = [
            'replyToken' => $reply_token,
//             'messages' => [['message' => 'type', 'text' => json_encode($request_array) ]] //
            $user_id = [['type' => 'text', 'text' => json_encode($event['source']['userId']) ]]
//             if($user_id == 'U1a7e5034f3c27cd6526ea186b77d3138' || $user_id == '"U1a7e5034f3c27cd6526ea186b77d3138"'){
                'messages' => [['type' => 'text', 'text' => $user_id ]]
//             }
        ];
        
        $post_body = json_encode($data, JSON_UNESCAPED_UNICODE);

        $send_result = send_reply_message($API_URL.'/reply', $POST_HEADER, $post_body);

        echo "Result: ".$send_result."\r\n";
        

    }
}

echo "OK";

// {"events":
//     [ 
//         {"type":"message","replyToken":"fb9c7fd69ea94c899f8b3eee310bb4f4", 
//             "source":{"userId":"U1a7e5034f3c27cd6526ea186b77d3138","type":"user"},
//             "timestamp":1587710430978,"mode":"active",
//             "message":{"type":"text","id":"11844130639935","text":"Hi"}
//         }
//     ],"destination":"U7581820a5898b594bb0196cb81b196a4"
//  }


function send_reply_message($url, $post_header, $post_body)
{
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $post_header);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $post_body);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    $result = curl_exec($ch);
    curl_close($ch);

    return $result;
}

?>

//         if($text == 'สมัครฮิดี้'){
//             $text_test = 'สมัครฮิดี้';  
//         }else if($text == 'แลเบี้ยฮิดดี้'){
//             $text_test = 'แลเบี้ยฮิดดี้';   
//         }else{
//             $text_test = 'กรณาเลือกจากเมนูค่ะ';
//         }
        
        $data = [
            'replyToken' => $reply_token,
//             'messages' => [['message' => 'type', 'text' => json_encode($request_array) ]] //
            'messages' => [['type' => 'text', 'text' => json_encode($event['source']['userId']) ]]
        ];
        
        $post_body = json_encode($data, JSON_UNESCAPED_UNICODE);

        $send_result = send_reply_message($API_URL.'/reply', $POST_HEADER, $post_body);

        echo "Result: ".$send_result."\r\n";
        

    }
}

echo "OK";

// {"events":
//     [ 
//         {"type":"message","replyToken":"fb9c7fd69ea94c899f8b3eee310bb4f4", 
//             "source":{"userId":"U1a7e5034f3c27cd6526ea186b77d3138","type":"user"},
//             "timestamp":1587710430978,"mode":"active",
//             "message":{"type":"text","id":"11844130639935","text":"Hi"}
//         }
//     ],"destination":"U7581820a5898b594bb0196cb81b196a4"
//  }


function send_reply_message($url, $post_header, $post_body)
{
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $post_header);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $post_body);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    $result = curl_exec($ch);
    curl_close($ch);

    return $result;
}

?>
