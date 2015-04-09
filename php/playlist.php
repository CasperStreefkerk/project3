<?php
$data = json_decode(file_get_contents("https://api.spotify.com/v1/albums/669MIsrGaRpMze2ajXgfE4/tracks"));

for ($i=0; $i < count($data->items); $i++) {
    $trackData[] = array(
        'track'=> $data->items[$i]->name,
        'url'=> $data->items[$i]->external_urls->spotify
    );
}

header("Content-type: application/json");
echo json_encode($trackData);
?>