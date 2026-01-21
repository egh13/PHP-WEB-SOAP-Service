# Servicio Web SOAP - Documentación

## 📋 Descripción

Aplicación de servicio web SOAP que proporciona operaciones para gestionar información de productos, familias, stocks y precios. Incluye un servidor SOAP que expone operaciones a través de WSDL y clientes PHP para consumir el servicio.

---

## 📦 Librerías Utilizadas

### Dependencias Principales

Este proyecto utiliza las siguientes librerías de PHP:

| Librería | Versión | Descripción |
|----------|---------|-------------|
| **PHP SOAP** | Nativa (>=7.4) | Extensión nativa de PHP para crear servidores y clientes SOAP |
| **Composer** | - | Gestor de dependencias de PHP |

### Dependencias de Desarrollo

| Librería | Versión | Descripción |
|----------|---------|-------------|
| **wsdl2phpgenerator** | ^3.4 | Generador de clases PHP a partir de archivos WSDL |
| **php2wsdl** | ^0.7.0 | Generador de archivos WSDL a partir de clases PHP |


--

## 📁 Estructura del Proyecto

```
servicio_web_SOAP/
├── composer.json                 # Configuración de dependencias
├── README.md                     # Este archivo
├── config/
│   └── dbconfig.json            # Configuración de base de datos
├── public/                      # Archivos accesibles desde web
│   ├── cliente.php              # Cliente SOAP básico (SoapClient directo)
│   ├── clienteW.php             # Cliente SOAP corregido con manejo de errores
│   ├── clienteW2.php            # Cliente SOAP usando clase generada
│   ├── generarClases.php        # Script para generar clases PHP desde WSDL
│   └── generarWsdl.php          # Script para generar WSDL desde clases PHP
├── servidorSoap/
│   ├── servicio.php             # Servidor SOAP básico
│   ├── servicioW.php            # Servidor SOAP con WSDL
│   └── servicio.wsdl            # Descripción WSDL del servicio
├── src/                         # Código fuente principal
│   ├── DBconnection.php         # Clase de conexión a base de datos
│   ├── Familia.php              # Modelo de Familia
│   ├── Operaciones.php          # Clase con operaciones del servicio
│   ├── Producto.php             # Modelo de Producto
│   ├── Stock.php                # Modelo de Stock
│   └── Clases1/                 # Clases generadas a partir del WSDL
│       ├── autoload.php         # Autocargador personalizado
│       ├── Client.php           # Cliente SOAP generado
│       └── EghServicioWebSoapOperacionesService.php
└── vendor/                      # Librerías instaladas por Composer
    ├── autoload.php
    ├── composer/
    ├── php2wsdl/
    ├── symfony/
    ├── wingu/
    └── wsdl2phpgenerator/
```

---

## 🚀 Instalación y Configuración

### 1. Requisitos Previos

- **PHP 7.4 o superior**
- **Apache/Nginx** con mod_rewrite
- **MySQL** o base de datos compatible
- **Composer** instalado globalmente

**Verificar versión de PHP:**
```bash
php --version
```

**Verificar Composer:**
```bash
composer --version
```

### 2. Instalación de Dependencias

Clona o descarga el proyecto en tu servidor web:

```bash
cd c:\wamp64\www\e_servidor\servicio_web_SOAP
```

Instala las dependencias con Composer:

```bash
composer install
```

O si necesitas actualizar las dependencias:

```bash
composer update
```

### 3. Configuración de Base de Datos

Edita el archivo `config/dbconfig.json`:

```json
{
    "host": "localhost",
    "db": "tarea6",
    "user": "alumno",
    "pass": "alumno"
}
```

## 🔧 Uso de la Aplicación

### A. Generación del WSDL desde Clases PHP

Para generar el archivo WSDL que describe el servicio:

**Desde el navegador:**
```
http://localhost/e_servidor/servicio_web_SOAP/public/generarWsdl.php
```

**Desde terminal:**
```bash
php public/generarWsdl.php
```

**Resultado:** Se actualiza/crea el archivo `servidorSoap/servicio.wsdl`

### B. Generación de Clases desde WSDL

Para generar automáticamente clases PHP que representan el servicio SOAP:

**Desde el navegador:**
```
http://localhost/e_servidor/servicio_web_SOAP/public/generarClases.php
```

**Desde terminal:**
```bash
cd C:\wamp64\www\e_servidor\servicio_web_SOAP
php public/generarClases.php
```

**Resultado:** Se crea la clase `Client.php` en `src/Clases1/`


