<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

# INSTALACION
## DESCARGAS E INSTALACION
1. Descargar GIT e instalar para su distribucion https://git-scm.com/downloads
2. Descargar un gestor de bases de datos Mysql Server o MariaDB y PHP7 o mayor.
3. Descargar Bitnami recomendado https://bitnami.com/stack/wamp/installer
4. Instalar composer https://getcomposer.org/download/
5. Descargar el repositorio o Clonar: `git clone https://github.com/oncene/academy.git`

## CONFIGURACION DE BASES DE DATOS
6. Copiar el archivo .env.example a .env `copy .env.example .env`
7. Crear bases de datos en su servidor mysql, Bitnami
8. Configurar las claves de acceso y bases de datos en el archivo `.env`

 > DB_CONNECTION=mysql  
DB_HOST=127.0.0.1  
DB_PORT=3306  
DB_DATABASE=`homestead`  
DB_USERNAME=`homestead`  
DB_PASSWORD=`secret`
9. Instalar dependencias `composer install`
10. Migrar las bases de datos semilla `php artisan migrate --seed`

## LEVANTAR EL SERVIDOR
11. `php artisan serve`
12. Ir a la direccion `http://127.0.0.1:8000`
13. Usuario por defecto `admin@gmail.com` `123456`
## COMANDOS UTILES
* php artisan migrate
* php artisan migrate:refresh --seed
* php artisan migrate:rollback
* php artisan cache:clear
* php artisan view:clear
* php artisan routes:clear
