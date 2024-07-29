Para instalar el proyecto en la parte del backend hay que hacer los siguientes pasos:
Instalar Dependencias

Asegúrate de tener Composer instalado.

bash
Copiar código
composer install
Configurar el Archivo .env

Copia el archivo de ejemplo .env.example a un nuevo archivo .env.

bash
Copiar código
cp .env.example .env
Edita el archivo .env con tus configuraciones locales, incluyendo la conexión a la base de datos.

Generar la Clave de Aplicación

bash
Copiar código
php artisan key:generate
Ejecutar Migraciones

bash
Copiar código
php artisan migrate
Instalar JWT Auth

bash
Copiar código
composer require tymon/jwt-auth
Publica el archivo de configuración:

bash
Copiar código
php artisan vendor:publish --provider="Tymon\JWTAuth\Providers\LaravelServiceProvider"
Genera la clave secreta de JWT:

bash
Copiar código
php artisan jwt:secret
Iniciar el Servidor

bash
Copiar código
php artisan serve

Ahora para instalar en frontend hay que hacer los siguientes pasos:

Instalar Dependencias

Asegúrate de tener Node.js y npm instalados.

bash
Copiar código
npm install
Ejecutar el Proyecto

bash
Copiar código
npm run serve
