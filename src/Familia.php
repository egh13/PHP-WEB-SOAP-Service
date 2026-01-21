<?php
namespace Egh\ServicioWebSoap;

class Familia
{
    private $db;

    public function __construct()
    {
        $this->db = (new DBconnection())->getConnect();
    }

    public function getFamilias()
    {
        $sql = "SELECT cod FROM familias";
        $stmt = $this->db->query($sql);
        return $stmt->fetchAll();
    }
}
