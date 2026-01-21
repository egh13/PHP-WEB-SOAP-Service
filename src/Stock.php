<?php
namespace Egh\ServicioWebSoap;

class Stock
{
    private $db;

    public function __construct()
    {
        $this->db = (new DBconnection())->getConnect();
    }

    public function getStock(int $codProducto, int $codTienda)
    {
        $sql = "SELECT unidades FROM stocks WHERE producto = :prod AND tienda = :tienda";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(':prod', $codProducto);
        $stmt->bindValue(':tienda', $codTienda);
        $stmt->execute();

        $result = $stmt->fetch();
        return $result ? $result['unidades'] : null;
    }
}
