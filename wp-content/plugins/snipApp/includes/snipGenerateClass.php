<?php

class snipGenerateClass 
{
    /**
     *
     * plugin options
     * 
     * @var array(); 
     */
    public $options;
    
    const FILE_EXTENSION = 'pdf';
    
    //const API_URL = 'http://localhost/gosti';
    const API_URL = 'http://5.9.156.3/~gosti';
    
    public function __construct()
    {
        $options = get_option('snipApp');
        if(!$options){
            $options = array(
                'ext' => self::FILE_EXTENSION,
                'snipAppUrl' => self::API_URL
            );
            $options = json_encode($options);
        }
        
        $this->options = $options;
    }

    public function activate()
    {
        add_option('snipApp', $this->options);
    }
    
    public function deactivate()
    {
        delete_option('snipApp');
    }
    
    public function saveOptions($options)
    {
        $options = json_encode($options);
        $this->options = $options;
        update_option('snipApp', $options);
    }
    
    public function getOptions()
    {
        $options = get_option('snipApp');
        
        $options = json_decode($options, true);
        
        return $options; 
    }
}

