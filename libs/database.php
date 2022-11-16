<?php 
class Database{
    private $host;
    private $db;
    private $username;
    private $password;
    private $charset;

        public function __construct()
        {
            $this->host = constant('HOST');
            $this->db = constant('DB');
            $this->username = constant('USERNAME');
            $this->password = constant('PASSWORD');
            $this->charset = constant('CHARSET');
        }

        function connect()
        {
            try {
                $connection = "mysql:host=". $this->host . ";dbname=" . $this->db . ";charset=" . $this->charset ;
                $optons = [
                    PDO::ATTR_ERRMODE           => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_EMULATE_PREPARES  => false,
                ];
                $pdo = new PDO($connection, $this->username, $this->password, $optons);

                return $pdo;
            } catch(PDOException $e){
                print_r('Error de conexión: '. $e->getMessage());
            }

        }

}

?>