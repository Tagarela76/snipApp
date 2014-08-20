<?php

require( dirname(__FILE__) . '/../../../../wp-load.php' );

class SnipAppManagerClass
{

    public function __construct()
    {
        
    }
    
    public static function getFolderByFolderName($folderName)
    {
        global $snipGeneral;
        //get options
        //$options = $snipGeneral->getOptions();
        $url = 'http://localhost/gosti/index.php/apiSnip/getFolderByFolderName';
        //$url = $options['snipAppUrl'];
        
        $folderName = 'RTF';

        $data = array('folderName' => $folderName);

        $options = array(
            'http' => array(
                'header' => "Content-type: application/x-www-form-urlencoded\r\n",
                'method' => 'POST',
                'content' => http_build_query($data),
            ),
        );
        $context = stream_context_create($options);
        $result = file_get_contents($url, false, $context);

        $folder = json_decode($result, true);

        return $folder;
    }
    
    public static function getFolderListByFolderName($folderName)
    {
        global $snipGeneral;
        //get options
        //$options = $snipGeneral->getOptions();
        $url = 'http://localhost/gosti/index.php/apiSnip/getFoldersStructureByFolderId';
        //$url = $options['snipAppUrl'];
        
        $folder = self::getFolderByFolderName($folderName);

        $data = array('folderId' => $folder['id']);

        $options = array(
            'http' => array(
                'header' => "Content-type: application/x-www-form-urlencoded\r\n",
                'method' => 'POST',
                'content' => http_build_query($data),
            ),
        );
        $context = stream_context_create($options);
        $result = file_get_contents($url, false, $context);
        $folderList = json_decode($result, true);
        
        return $folderList;
        
    }
    
    

}
