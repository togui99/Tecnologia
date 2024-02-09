<?php
class Database {
    private $host;
    private $dbname;
    private $username;
    private $password;
    private $db;

    public function __construct($host, $dbname, $username, $password) {
        $this->host = $host;
        $this->dbname = $dbname;
        $this->username = $username;
        $this->password = $password;
    }

    public function connect() {
        try {
            // Conexión a la base de datos utilizando PDO
            $this->db = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->username, $this->password);
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Error al conectar a la base de datos: " . $e->getMessage();
            exit;
        }
    }

    public function getDB() {
        return $this->db;
    }
}

// Crear una instancia de la clase Database y conectar a la base de datos
$database = new Database('localhost', 'sistemadb', 'root', '');
$database->connect();

// Obtener la conexión a la base de datos
$db = $database->getDB();
?>

?>
