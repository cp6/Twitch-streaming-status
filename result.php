<?php
//gets json data
$json  = file_get_contents('twitch/status.json');
$data = json_decode($json);
//returns streaming 1 for Yes 0 for No
$streaming = $datastream->streaming->result;

if($streaming == 1){
    echo "Is Streaming";//1
}else{
    echo "Not Streaming";//0
}
?>