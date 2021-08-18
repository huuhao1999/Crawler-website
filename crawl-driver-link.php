<?php
 $ORL = 'https://drive.google.com/drive/folders/lzLT0p8YmOHUyqsnDfL3KOKY79qiElKij'; 
 $URL1 = 'https://drive.google.com/drive/folders/OB4fU5 VXklkdGZzdk5qMWF5Vjg?resourcekey.0-T9FZ32C5c1731n8yYs2WmA'; 
$ch = curl_init(); 
curl_setopt($ch, CURLOPT_URL, $URL1); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
$output = curl_exec($ch); // $output = json_decode($output, true); 
curl_close($ch); 
preg_match_all('/(data-id=")[^"]*/',$output, $matches); 
$result = $matches[0];
 foreach($result as $data){ echo get_link(substr($data, 9)); echo '<br>'; } 
 // echo var_dump($matches[0]); 
function get_link($data){ 
    return 'https://drive.google.com/file/d/'.$data.'/view';
}

?> 
