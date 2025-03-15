# Proyecto Laravel - Estadia

Este es un proyecto desarrollado en Laravel

## Requisitos

- PHP >= 8.1
- Composer >= 2.0
- MySQL >= 8.0.30
- Laragon
## Instalación

1. Clona este repositorio:
   ```bash
   git clone https://github.com/Emmauel1234/ProyectoEstadia.git
   cd ESTADIA
2. Instalar dependencias de PHP y Node.js 
    ```bash
    composer install
    npm install
3. Installa el paquete de filament:
     ```bash
     composer require filament/filament
    php artisan vendor:publish --tag=filament-config
    Crea un usuario con el siguiente comando: php artisan make:filament-user
    Sigue las instrucciones para continuar.

## Configuración de base de datos
1. Abre Laragon y crea una base de datos llamada bdestadia

2. En el archivo .env de tu proyecto asegurate que se encuentre de la siguiente manera:
    ```bash
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=bdestadia
    DB_USERNAME=root
    DB_PASSWORD=
3. Realiza una migración para la base de datos con el siguiente comando:
    ```bash
    php artisan migrate
    
## Probar el proyecto.
1. En la terminal ejecuta el siguiente comando para iniciar el proyecto:
    ```bash
    Php artisan serve
2. En la url dirigete al login:
   ```bash
   http://127.0.0.1:8000/dashboard
   
3. Inicia sesion y verifica que este todo correcto.