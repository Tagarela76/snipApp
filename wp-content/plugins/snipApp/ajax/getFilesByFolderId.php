<?php
require( dirname(__FILE__) . '/../../../../wp-load.php' );
global $snipGeneral;
//get options
$options = $snipGeneral->getOptions();
//$url = 'http://localhost/gosti/index.php/api/snipFileSearch';
$url = $options['snipAppUrl'].'/apiSnip/getFileListByFolderId';

$folderId = $_POST['folderId'];

$data = array('ext' => $options['ext'], 'folderId' => $folderId);

$options = array(
    'http' => array(
        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        'method'  => 'POST',
        'content' => http_build_query($data),
    ),
);
$context  = stream_context_create($options);
$fileList = file_get_contents($url, false, $context);
$fileList = json_decode($fileList, true);
$html = '';
foreach($fileList as $file){
    $html .= $file['name'];
}


echo $html;



