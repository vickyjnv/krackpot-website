
<?php
/* class connectionClass extends mysqli{
    private $host="localhost",$dbname="krackpot",$dbpass="",$dbuser="root";
    public $con;
    
    public function __construct() {
        $this->con=  $this->connect($this->host, $this->dbuser, $this->dbpass, $this->dbname);
        if($this->con){}
        else{
        }
    }
} */

    $connect = mysqli_connect("localhost","root","","krackpot");

    if(!$connect){
        die("Connection Failed!");
    }else{
    }



?>