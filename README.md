# PASOS DE INSTALACION SYS UMINE-TAREA --BACKEND LARAVEL

tarea para el cargo de desarrollador fullstack para Empresa Umine  Desarrollado por [Nelson Araya](https://github.com/NelsonAraya).

## DEPENDENCIAS
```bash
Laravel Framework 9.21.6
```
```bash
Composer 2.3.10
```
```bash
Composer 2.3.10
```
```bash
php 8.1.6
```

## PARA INICIAR

para comenzar la instalacion de nuestra API vamos a clonar nuestro repositorio

### `git clone https://github.com/NelsonAraya/ApiBackEndlaravelUmine.git`
Ingresaremos a nuestro directorio 
### `cd ApiBackEndlaravelUmine`
Ejecutarmeos en nuestra Consola el siguiente comando para instalar nuestras dependencias
### `composer install`
Modificaremos el siguiente Archivo
### `.env.example => .env`
En nuestro servidor de BD crearemos una nueva base de datos  con el nombre 
### `umine`
Modificaremos los siguientes valores en nuestro archivo .env
### `DB_DATABASE=umine`
### `DB_USERNAME=usuariobd`
### `DB_PASSWORD=passbd`
Cabe mencionar que usuariobd y passbd corresponden a el usuario y password de su servidor de BD
Ahora ejecutaremos el siguiente comando en nuestra consola dentro de nuestro directorio
### `php artisan migrate --seed`
lo cual generara las tablas con los valores por defecto que trae el sistema para poder iniciar.
Ahora procederemos ha levantar nuestra api con el siguiente comando 
### `php artisan serve`
para poder iniciar sesion en nuestro sistema ocuparemos el usuario 
### `naraya.vatrogasci@gmail.com`
y la contraseña
### `17096233`

