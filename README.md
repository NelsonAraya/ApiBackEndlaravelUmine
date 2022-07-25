# GUIA DE INSTALACION SYS UMINE-PRUEBA TECNICA
# -- BACKEND LARAVEL --

Tarea para el cargo de desarrollador fullstack para Empresa Umine  Desarrollado por [Nelson Araya](https://github.com/NelsonAraya).

## COMPONENTES UTILIZADOS

```bash
Laravel Framework 9.21.6
``` 
```bash
Composer 2.3.10
```
```bash
php 8.1.6
```

## PARA INICIAR

para comenzar la instalacion de nuestra API vamos a clonar nuestro repositorio
```bash
git clone https://github.com/NelsonAraya/ApiBackEndlaravelUmine.git
```
Ingresaremos a nuestro directorio
```bash 
cd ApiBackEndlaravelUmine
```
Ejecutaremos en nuestra Consola el siguiente comando para instalar nuestras dependencias
```bash
composer install
```
Modificaremos el nombre del siguiente Archivo y lo dejaremos como .env
```bash
mv env.example .env
```
En nuestro servidor de BD crearemos una nueva base de datos  con el nombre umine
```bash
CREATE DATABASE umine;
```
Modificaremos los siguientes valores en nuestro archivo .env
```bash
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=umine
DB_USERNAME=root
DB_PASSWORD=
```
```php
#direccion de nuesto servidor de BD
DB_HOST=127.0.0.1
#puerto del servidor de BD
DB_PORT=3306
#Nombre de la base de datos por defecto esta umine
DB_DATABASE=umine
#usuario de nuestra base de datos a utilizar
DB_USERNAME=root
#password del usuario de la bd a utilizar
DB_PASSWORD=
```
Ahora ejecutaremos el siguiente comando en nuestra consola dentro de nuestro directorio
```bash
php artisan migrate --seed
```
lo cual generara las tablas con los valores por defecto que trae el sistema para poder iniciar.
Ahora procederemos a levantar nuestra api con el siguiente comando 
```bash
php artisan serve
```
para poder iniciar sesion en nuestro sistema ocuparemos el usuario 
```bash
naraya.vatrogasci@gmail.com
```
y la contraseña
```bash
17096233
```
el sistema al Registrar usuarios les genera la contraseña que por defecto sera el RUT sin dijito verificador

