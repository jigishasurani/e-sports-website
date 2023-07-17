<?php

class datacontroller
{
    // database connection Properties
    protected $host = 'localhost';
    protected $user = 'root';
    protected $password = '';
    protected $database = "s8ul";
    //connection property
    public $con = null;

    // call constructur
    public function __construct()
    {
        $this->con = mysqli_connect($this->host, $this->user, $this->password, $this->database);
        if ($this->con->connect_error) {
            echo "Fail" . $this->con->connect_error;
        }   
    }
    public function __destruct(){
        $this->closeConnection();
    }
    protected function closeConnection(){
        if($this->con !=null){
            $this->con-> close();
            $this->con= null;
        }
    }


}