# <a name="_mwhq2fp6d1sy"></a>**API Laravel - Buenas Prácticas y Versionado**
Este proyecto es un ejemplo de cómo aplicar buenas prácticas en el desarrollo de APIs con Laravel. Se implementa el versionado de las APIs, el uso de Resources para transformar las respuestas y Custom Requests para validar las peticiones. El proyecto está basado en Laravel 11.20.0 y utiliza Laravel Sanctum para la autenticación.
## <a name="_nv5kddc9n0vy"></a>**Características**
- Versionado de API: Las rutas están versionadas para garantizar la estabilidad y permitir mejoras sin interrumpir la compatibilidad con versiones anteriores.
- Uso de Resources: Se utilizan Resources para estructurar y transformar los datos antes de enviarlos en las respuestas.
- Custom Requests: Se implementan Custom Requests para validar las entradas de manera robusta y flexible.
## <a name="_782llkb1idn4"></a>**Requisitos**
- PHP 8.0+
- Composer
- Laravel 11.20.0
- Sanctum para autenticación
## <a name="_hm41p082at7m"></a>**Instalación**
1. Clona este repositorio: git clone[ ](https://github.com/tu-repositorio/api-laravel.git)<https://github.com/tu-repositorio/api-laravel.git>
1. Instala las dependencias con Composer: composer install
1. Crea un archivo .env y configura la base de datos y otros valores necesarios: cp .env.example .env
1. Genera la clave de la aplicación: php artisan key
1. Ejecuta las migraciones de la base de datos: php artisan migrate
1. Ejecuta el servidor local de Laravel: php artisan serve
## <a name="_y3nfgef1rxgl"></a>**Uso de las APIs**
Las APIs están versionadas en /v1 y /v2, lo que permite evolucionar las funcionalidades sin afectar a los clientes que dependen de las versiones anteriores.
### <a name="_xyyjlc66g1fa"></a>**Autenticación**
Para utilizar las rutas protegidas, es necesario autenticarte utilizando Laravel Sanctum.
#### <a name="_q2ewu6xtru92"></a>**Ruta de Login**
- POST /login
  Envía las credenciales de usuario para obtener un token de autenticación.
### <a name="_ulhjtgr4tk15"></a>**API v1**
#### <a name="_5ml0iy3wfkad"></a>**Categorías**
- GET /v1/categories Devuelve una lista de categorías.
- GET /v1/categories/{category} Devuelve los detalles de una categoría específica.
#### <a name="_br9abwlm640k"></a>**Recetas**
- GET /v1/recipes Devuelve una lista de recetas.
- POST /v1/recipes Crea una nueva receta. Requiere autenticación.
- GET /v1/recipes/{recipe} Devuelve los detalles de una receta específica.
- PUT /v1/recipes/{recipe} Actualiza una receta existente. Requiere autenticación.
- DELETE /v1/recipes/{recipe} Elimina una receta existente. Requiere autenticación.
#### <a name="_z8p6v0ux26l9"></a>**Etiquetas (Tags)**
- GET /v1/tags Devuelve una lista de etiquetas.
- GET /v1/tags/{tag} Devuelve los detalles de una etiqueta específica.
### <a name="_6ri2hyroepx"></a>**API v2**
#### <a name="_mvergiuokglj"></a>**Recetas**
- GET /v2/recipes Devuelve una lista de recetas con mejoras en el rendimiento y formato de datos en comparación con v1.
## <a name="_v027kxgrqvfe"></a>**Buenas Prácticas Aplicadas**
- Versionado de API: Se implementa un sistema de versionado en las rutas (/v1, /v2) para manejar la evolución de la API sin interrumpir el servicio a clientes que usan versiones antiguas.
- Uso de Resources: En el controlador, se transforman los datos antes de enviarlos a través de Resources, mejorando la consistencia en las respuestas JSON.
- Custom Requests: La validación de las entradas se maneja mediante Custom Requests, lo que garantiza que las peticiones sean validadas antes de procesarlas.
## <a name="_9040rkl7ymr4"></a>**Ejecución de Pruebas**
Para ejecutar las pruebas unitarias y funcionales, utiliza el siguiente comando:

php artisan test

Las pruebas se ejecutan automáticamente a través de GitHub Actions en cada push a las ramas main y development.

