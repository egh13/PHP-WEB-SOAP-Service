<?php
namespace Egh\ServicioWebSoap;

class Operaciones
{
    private $producto;
    private $stock;
    private $familia;

    public function __construct()
    {
        $this->producto = new Producto();
        $this->stock = new Stock();
        $this->familia = new Familia();
    }

    /**
     * @soap
     * @param int $codigoProducto
     * @return float
     */
    public function getPVP($codigoProducto)
    {
        return $this->producto->getPVP((int)$codigoProducto);
    }

    /**
     * @soap
     * @param int $codigoProducto
     * @param int $codigoTienda
     * @return int
     */
    public function getStock($codigoProducto, $codigoTienda)
    {
        return $this->stock->getStock((int)$codigoProducto, (int)$codigoTienda);
    }

    /**
     * @soap
     * @return string[]
     */
    public function getFamilias()
    {
        return $this->familia->getFamilias();
    }

    /**
     * @soap
     * @param string $codigoFamilia
     * @return int[]
     */
    public function getProductosFamilia($codigoFamilia)
    {
        return $this->producto->getProductosFamilia((string)$codigoFamilia);
    }

}
