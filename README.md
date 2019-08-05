# laravel-config
Es una configuración personalizada de Laravel. Incluye paquetes importantes para iniciar su proyecto con Laravel y todos los idomas disponibles.

## ¿Qué incluye?
En el archivo composer.json encontrará la siguiente configuración:

```json
"require": {
    "php": "^7.1.3",
    "barryvdh/laravel-dompdf": "^0.8.4",
    "fideloper/proxy": "^4.0",
    "intervention/image": "^2.5",
    "laravel/framework": "5.8.*",
    "laravel/tinker": "^1.0",
    "maatwebsite/excel": "^3.1"
}
```

En el archivo resources encontrará todos los archivos de idiomas soportadas por Laravel. Es libre de eliminar los archivos que no es dispensable para su aplicación. Los idiomas estan extraidos de [caouecs/Laravel-lang](https://github.com/caouecs/Laravel-lang)

```
/resources
    /lang
```

## ¿Cómo usarlo?

Clonar el repositorio

```
git clone https://github.com/dmpb/laravel-config.git
```

Instalar composer

```
composer install
```