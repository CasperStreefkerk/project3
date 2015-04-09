<?php
$data = json_decode(file_get_contents("https://api.spotify.com/v1/albums/669MIsrGaRpMze2ajXgfE4/tracks"));

$i = 0;
echo "<pre>";
// print_r($data);
// navigatie naar een track name:
// $data->items[0]->name

    count($data->items);
//foreach ($data as $file) {
//    $i++;
//    print_r($i);
//    print_r($file[$i]->name);
//}
for ($i=0; $i < count($data->items); $i++) {
    echo "hoi";
}
echo "</pre>";


?>