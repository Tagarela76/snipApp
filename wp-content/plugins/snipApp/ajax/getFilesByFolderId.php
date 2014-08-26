<?php
require( dirname(__FILE__) . '/../../../../wp-load.php' );
global $snipGeneral;
//get options
$options = $snipGeneral->getOptions();
//$url = 'http://localhost/gosti/index.php/api/snipFileSearch';
$url = $options['snipAppUrl'];

$searchFile = $_POST['fileName'];

$data = array('ext' => $options['ext'], 'searchString' => $searchFile);

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



