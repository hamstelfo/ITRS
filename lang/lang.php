<?php

class Lang{
    private $lng;
    private $source;
    private $status;
    private $strings;
    
    function Lang($lng= "en")
    {
    	$this->status= "off";
    	$this->lng= mb_strtolower($lng);
    	$this->source= APP_HOME_LANG.$this->lng.".php";

    	if (!file_exists($this->source))
    	{
	    	throw new Exception('Language "'.$this->lng.'" ('.$this->source.') not found.');
    	}
    	else
    	{
    		include_once($this->source);
    		$this->status= "on";
    		$this->strings= lang();
    	}
    }
    
    function getLang()
    {
        return $this->lng;
    }
    
    function i18n($var)
    {
    	if ($this->status=="on")
    	{
    		if (isset($this->strings[$var]))
    		{
    			return $this->strings[$var]	;
    		}
    	}
    }
}
?>