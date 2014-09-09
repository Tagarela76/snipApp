<?php
require( dirname(__FILE__) . '/../../../../wp-load.php' );
global $snipGeneral;
//get options
$snipPluginOptions = $snipGeneral->getOptions();

$url = $snipPluginOptions['snipAppUrl'].'/index.php/apiSnip/snipFileSearch';

$searchFile = $_POST['fileName'];
//$folderId = $_POST['folderId'];
$folderId = '';
//$searchFile = 'ВН 39-1.9-004';
//$folderId = 18;

$data = array('ext' => $snipPluginOptions['ext'], 'searchString' => $searchFile );

if($folderId != ''){
    $data['folderId'] = $folderId;
}

$options = array(
    'http' => array(
        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        'method'  => 'POST',
        'content' => http_build_query($data),
    ),
);
$context  = stream_context_create($options);
$result = file_get_contents($url, false, $context);

$fileList = json_decode($result, true);

if(is_null($fileList)){
    echo 'Сервер не доступен';
    die();
}

if($fileList == 'not found'){
    echo 'Не найдено';
    die();
}

$html = '<ul>';
foreach($fileList as $file){
    $html .= '<li>';
    //$html .= '<a href="'.$snipPluginOptions['snipAppUrl'].'/index.php/api/readSnipFile?id='.$file['id'].'" class="snip-file-name"  target="_blank" >';
    $html .= '<a class="snip-file-name" onclick="page.pdfReaderManager.readPdfFile('.$file['id'].')">';
    $html .= $file['name'];
    $html .= '</a>';
    //$html .= '<a href="'.$snipPluginOptions['snipAppUrl'].'/index.php/api/SnipFileLoad?id='.$file['id'].'"> скачать</a>';
    $html .= '</li>';
}
$html .= '</ul>';

echo $html;


