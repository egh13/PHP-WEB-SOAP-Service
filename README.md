# Servicio Web SOAP

Servicio web SOAP para gestionar productos, familias, stocks y precios.

## 📋 Requisitos

- PHP >= 7.4
- MySQL/MariaDB
- Composer
- Servidor web (Apache/Nginx)

## 🚀 Instalación

```bash
# 1. Clonar el proyecto
git clone <tu-repo>
cd PHP-WEB-SOAP-Service

# 2. Crear la Base de Datos
mysql -u root -p < mysql/DBcreation.sql
mysql -u root -p < mysql/DBinserts.sql

# 3. Configurar conexión BD (opcional)
# Edita config/dbconfig.json si necesitas otros valores:
{
    "host": "localhost",
    "db": "tarea6",
    "user": "alumno",
    "pass": "alumno"
}
```
## 📁 Estructura

```
├── config/
│   ├── config.php         # Configuración dinámica de URLs
│   └── dbconfig.json      # Configuración de BD
├── mysql/
│   ├── DBcreation.sql     # Script crear tablas
│   └── DBinserts.sql      # Script insertar datos
├── public/
|   ├── index.php          # Index a clientes
│   ├── cliente.php        # Cliente SOAP básico
│   ├── clienteW.php       # Cliente con WSDL
│   ├── clienteW2.php      # Cliente con clases generadas
│   ├── generarWsdl.php    # Generar WSDL
│   └── generarClases.php  # Generar clases desde WSDL
├── servidorSoap/
│   ├── servicio.php       # Servidor SOAP
│   ├── servicioW.php      # Servidor SOAP con WSDL
│   └── servicio.wsdl      # Definición WSDL
├── src/
│   ├── DBconnection.php   # Conexión BD
│   ├── Operaciones.php    # Operaciones principales
│   ├── Producto.php       # Modelo Producto
│   ├── Familia.php        # Modelo Familia
│   ├── Stock.php          # Modelo Stock
│   └── Clases1/           # Clases autogeneradas
└── vendor/                # Dependencias Composer
```

## 🔧 Configuración

### Base de Datos
Edita `config/dbconfig.json`:
```json
{
    "host": "tu-servidor",
    "db": "tu-bd",
    "user": "usuario",
    "pass": "contraseña"
}
```

## 📦 Dependencias

- **PHP SOAP** - Extensión nativa para SOAP
- **php2wsdl** ^0.7.0 - Generar WSDL desde clases
- **wsdl2phpgenerator** ^3.4 - Generar clases desde WSDL

## 💡 Uso

### Base de Datos
Los scripts SQL están en `mysql/`:
- **DBcreation.sql** - Crea la BD y las 4 tablas (tiendas, familias, productos, stocks)
- **DBinserts.sql** - Inserta 26 productos, 15 familias y 3 tiendas

Ejecutar una sola vez:
```bash
mysql -u root -p < mysql/DBcreation.sql
mysql -u root -p < mysql/DBinserts.sql
```

### Generar WSDL desde Clases PHP

Ejecutar script `public/generarWsdl.php` en el navegador. Debe crear el archivo `servicio.wsdl`

### Generar Clases desde WSDL

Ejecutar script `public/generarClases.php` en el navegador. Debe crear las clases en `src/Clases1`

## 🔗 Operaciones del Servicio

El servicio SOAP expone:

- `getPVP(codigoProducto)` - Obtener precio
- `getStock(codigoProducto, codigoTienda)` - Obtener stock
- `getFamilias()` - Listar familias de productos
- `getProductosFamilia(familia)` - Productos por familia

## ⚙️ Notas

- Las URLs se detectan automáticamente (HTTP/HTTPS, host, ruta)
- La BD se configura en `config/dbconfig.json`
- Los archivos autogenerados están en `src/Clases1/`
