<?php
$url = 'http://localhost/gosti/index.php/api/snipFileSearch';
//$searchFile = 'СНиП 12-04-2002';
$searchFile = $_POST['fileName'];
$data = array('ext' => 'rtf', 'searchString' => $searchFile);

$options = array(
    'http' => array(
        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        'method'  => 'POST',
        'content' => http_build_query($data),
    ),
);
$context  = stream_context_create($options);
$result = file_get_contents($url, false, $context);

$fileList = json_decode($result);

$html = '<ul>';
foreach($fileList as $file){
    $html .= '<li>'.$file->name.'<li>';
}
$html .= '</ul>';

echo $html;


