<?php
class Db_Connect
{

  private $host = '127.0.0.1';
  private $db_name = 'lt_cloud_artigo_autores';
  private $username = 'root';
  private $password = 'root';
  private $conn;

  public function connect()
  {
    $this->conn = null;

    try {
      $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name . ";charset=utf8", $this->username, $this->password);
      $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
      die("Erro na conexão: " . $e);
    }
    return $this->conn;
  }
}
?>