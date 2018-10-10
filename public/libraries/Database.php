<?php

class Database {
    public $host = DB_HOST;
    public $username = DB_USER;
    public $password = DB_PASS;
    public $db_name = DB_NAME;

    public $link;
    public $error;
    /*
    * Class constructor
    */
     
    public function __construct() {
        // $this->host =       $host;
        // $this->username =   $username;
        // $this->password =   $password;
        // $this->db_name =    $db_name;
        // Call connect to db function
        $this->connect();
    }
    /*
    * Connector
    */
    private function connect() {
        $this->link = new mysqli ($this->host, $this->username, $this->password, $this->db_name);

        if ($this->link->connect_error) {
            $this->error = 'Connection failed: '.$this->link->connect_error;
            echo $this->error;
            return false;
            
            // Something not working - no error message
        }
        
    }
    /*
    *   Select method
    */
    public function select($query) {
        $result = $this->link->query($query) or die('Select error :' 
        .$this->link->error.__LINE__);
        if ($result->num_row > 0) {
            return $result;
        } else {
            return false;
        }
    }

    /*
    *   Insert
    */
    public function insert($query) {
        $insert_row = $this->link->query($query) or die('Insert error :' 
        .$this->link->error.__LINE__);
        if ($insert_row) {
            header('Location: index.php?msg='.urlencode('Record added'));
            exit();
        } else {
            die('Insert error :'.$this->link->error.__LINE__);
        }
    }

    public function update($query) {
        $update_row = $this->link->query($query) or die('Update error :' 
        .$this->link->error.__LINE__);
        if ($update_row) {
            header('Location: index.php?msg='.urlencode('Record updated'));
            ecit();
        } else {
            die('Update error :'.$this->link->error.__LINE__);
        }
    }

    public function delete($query) {
        $delete_row = $this->link->query($query) or die('Delete error :' 
        .$this->link->error.__LINE__);
        if ($delete_row) {
            header('Location: index.php?msg='.urlencode('Record deleted'));
            ecit();
        } else {
            die('Delete error :'.$this->link->error.__LINE__);
        }
    }    
}

