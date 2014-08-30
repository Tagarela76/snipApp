<?php

require( dirname(__FILE__) . '/../../../../wp-load.php' );
global $snipGeneral;
//get options
$snipPluginOptions = $snipGeneral->getOptions();
//$url = 'http://localhost/gosti/index.php/api/snipFileSearch';
$url = $snipPluginOptions['snipAppUrl'] . '/apiSnip/getFileListByFolderId';

$folderId = $_POST['folderId'];

$data = array('ext' => $snipPluginOptions['ext'], 'folderId' => $folderId);

$options = array(
    'http' => array(
        'header' => "Content-type: application/x-www-form-urlencoded\r\n",
        'method' => 'POST',
        'content' => http_build_query($data),
    ),
);
$context = stream_context_create($options);
$fileList = file_get_contents($url, false, $context);

$fileList = json_decode($fileList, true);
$html = '';
$html .= '</ul>';
foreach ($fileList as $file) {

    $html .= '<li>';
    //$html .= '<a href="'.$snipPluginOptions['snipAppUrl'].'/index.php/api/readSnipFile?id='.$file['id'].'" class="snip-file-name"  target="_blank" >';
    $html .= '<a class="snip-file-name" onclick="page.pdfReaderManager.readPdfFile(' . $file['id'] . ')">';
    $html .= $file['name'];
    $html .= '</a>';
    //$html .= '<a href="'.$snipPluginOptions['snipAppUrl'].'/index.php/api/SnipFileLoad?id='.$file['id'].'"> скачать</a>';
    $html .= '</li>';
}
$html .= '</ul>';


echo $html;



