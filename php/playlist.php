<?php
$data = json_decode(file_get_contents("https://api.spotify.com/v1/albums/669MIsrGaRpMze2ajXgfE4/tracks"));

$i = 0;
echo "<pre>";
 print_r($data);
// navigatie naar een track name:
// $data->items[0]->name


//foreach ($data as $file) {
//    $i++;
//    print_r($i);
//    print_r($file[$i]->name);
//}
//for ($i=0; $i < count($data->items); $i++) {
//    $trackData[] = array(
//        'track'=> $data->items[$i]->name,
//        'url'=> $data->items[$i]->;
//    );
//}
echo "</pre>";


?>
<!--$photoValues[] = array(-->
<!--'image'=> $data->data[$i]->images->thumbnail->url,-->
<!--'latitude'=> $data->data[$i]->location->latitude,-->
<!--'longitude'=> $data->data[$i]->location->longitude-->
<!--);-->