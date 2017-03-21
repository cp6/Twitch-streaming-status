<?php
error_reporting(0);
ini_set('display_errors', 0);

//streamers username
$streamer = 'kyr_sp33dy';

//twitch status
function is_channel_live( $channel )
{
    $request = json_decode( @file_get_contents( 'https://api.twitch.tv/kraken/streams/' . $channel ) );
    return ( ! is_null( $request->stream ) ) ? TRUE : FALSE;
}

if(is_channel_live($streamer)){
    $result = 1;//streaming
}else{
    $result = 0;//not streaming
}
//array
$array = array('data' => array('streaming'=> $result));
/*
 {"data":{"streaming":0}}
 */

//output array in json
header('Content-Type: application/json');
echo json_encode($array);
$encode = json_encode($array);
$fp = fopen("twitch/status.json", "w");
fwrite($fp, $encode);
fclose($fp);