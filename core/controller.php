<?php

class Controller{
    private $id;
    private $source;
    private $viewSource;
    private $status;
    
    private $lng;

    public $data;

    public $extraJS;
    public $extraCSS;
    
    function Controller($id)
    {
    	$this->status= "off";
    	$this->id= mb_strtolower($id);
        $this->source= APP_HOME_CONTROLLERS.$this->id.".php";
    	$this->viewSource= APP_HOME_VIEWS.$this->id.".php";
        $this->extraJS= array();
        $this->extraCSS= array();

        $this->lng= new Lang();

        $this->data= array();

    	if (!file_exists($this->source))
    	{
	    	throw new Exception('Controller "'.$this->id.'" ('.$this->source.') not found.');
    	}
    	else
    	{
            if (!file_exists($this->viewSource))
            {
                throw new Exception('View "'.$this->id.'" ('.$this->viewSource.') not found.');
            }
            else
            {
                include_once($this->source);
                $this->status= "on";    
            }    		
    	}
    }
    
    function addJS($file)
    {
        //pinta($this->extraJS);
        if (array_search($file, $this->extraJS)===false)
        {
            $this->extraJS[]= $file."?v=".APP_CACHE_AVOID;
        }
        //pinta($this->extraJS, true);
    }
    
    function addCSS($file)
    {
        if (array_search($file, $this->extraCSS)===false)
        {
            $this->extraCSS[]= $file."?v=".APP_CACHE_AVOID;
        }
    }

    function show()
    {
        if ($this->status=="on")
        {
            $menu= new Menu();
            //pinta("Estás en el controllador ".$this->id);
            require_once(APP_HOME_VIEWS."/layout/header.php");
            require_once(APP_HOME_VIEWS."/layout/content.php");
            require_once(APP_HOME_VIEWS."/layout/footer.php");    
        }        
    }
}
?>