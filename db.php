<?php 

class database {
    private $host;
    private $db;
    private $user;
    private $pwd;
    private $charset;

    public function __construct(){
        $this->host = 'localhost';
        $this->db   = 'fondos_recaudacion';
        $this->user = 'root';
        $this->pwd  = '';
        $this->charset = 'utf8mb4';
    }
    function connect(){
        try{
            $connection = "mysql:host" . $this->host .";dbname=" . $this->db . ";charset=" . $this->charset;
            $options = [
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES   => false,
            ];
            $pdo = new PDO($connection, $this->user, $this->pwd, $options);

            return $pdo;
            
        }catch (PDOException $e){
            print_r('Error connections:' . $e->getMessage());
        }
    }
}



?>
