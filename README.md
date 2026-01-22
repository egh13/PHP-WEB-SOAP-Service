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

# 2. Configurar BD (opcional)
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
├── public/
│   ├── cliente.php        # Cliente SOAP básico
│   ├── clienteW.php       # Cliente con WSDL
│   └── generarWsdl.php    # Generar WSDL
├── servidorSoap/
│   ├── servicio.php       # Servidor SOAP
│   └── servicio.wsdl      # Definición WSDL
├── vendor/
|    ...
└── src/
    ├── Operaciones.php    # Operaciones principales
    ├── Producto.php       # Modelo Producto
    ├── Familia.php        # Modelo Familia
    └── Stock.php          # Modelo Stock

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

### 1. Generar WSDL
```bash
php public/generarWsdl.php
```

### 2. Generar Clases desde WSDL
```bash
php public/generarClases.php
```

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
