<?php

class BaseModel{
    private $items;
    private $status;
    private $table;
    private $sql;
    private $fields;
    private $where;
    private $order;

    private $rows;
    
    function BaseModel($table)
    {
        $this->status= "off";
        $this->table= $table;

    	if ($this->db_connect(BD_HOST, BD_NAME, BD_USER, BD_PASS))
        {
            $this->status= "on";
        }
    }

    function getRows($fields= "*", $where= "WHERE (1)", $order= "")
    {
        $this->rows= array();

        $this->fields= $fields;
        $this->where= $where;
        $this->order= $order;

        $this->sql= "SELECT ".$this->fields."\nFROM `".$this->table."`\n".$this->where."\n".$this->order;

        //pinta($this);
        if ($result= mysql_query($this->sql))
        {           
            while ($row = mysql_fetch_assoc($result)) 
            {
                $this->rows[]= $row;
            }
        }
        return $this->rows;
    }

    private function db_connect($dbhost, $dbname, $dbuser, $dbpass) 
    {
        if (!@mysql_connect( $dbhost, $dbuser, $dbpass )) 
        {
            return false;
        }   
        if (! mysql_select_db( $dbname )) 
        {
            return false;
        }
        
        return true;
    }

    private function db_disconnect() 
    {
        mysql_close();
    }
}
?>