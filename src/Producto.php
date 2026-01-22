<?php
namespace Egh\ServicioWebSoap;

class Producto
{
    private $db;

    public function __construct()
    {
        $this->db = (new DBconnection())->getConnect();
    }

    public function getPVP(int $id)
    {
        $sql = "SELECT pvp FROM productos WHERE id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(':id', $id);
        $stmt->execute();

        $result = $stmt->fetch();
        
        return $result ? $result['pvp'] : null;
    }

    public function getProductosFamilia(string $codFamilia)
    {
        $sql = "SELECT id FROM productos WHERE familia = :fam";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(':fam', $codFamilia);
        $stmt->execute();

        return $stmt->fetchAll(); 
    }
}
