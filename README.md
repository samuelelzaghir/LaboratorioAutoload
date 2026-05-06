# LaboratorioAutoload

## Descripción

Este proyecto corresponde al laboratorio de Autocarga Automática utilizando Composer y el estándar PSR-4 en PHP.

El objetivo principal es demostrar cómo organizar clases mediante namespaces y cómo utilizar el archivo `vendor/autoload.php` generado por Composer para evitar el uso manual de múltiples instrucciones `include`, `include_once`, `require` o `require_once`.

## Tecnologías utilizadas

- PHP
- Composer
- WAMP
- Git
- GitHub
- Visual Studio Code

## Estructura del proyecto

```text
LaboratorioAutoload/
│
├── composer.json
├── index.php
├── README.md
├── .gitignore
│
├── src/
│   ├── Models/
│   │   └── Usuario.php
│   └── Services/
│       └── UsuarioService.php

Configuración PSR-4

En el archivo composer.json se configuró el bloque autoload de la siguiente manera:

"autoload": {
    "psr-4": {
        "App\\": "src/"
    }
}

Esto indica que el namespace principal App\ apunta a la carpeta física src/.

Por ejemplo:

App\Models\Usuario

corresponde al archivo:

src/Models/Usuario.php

Y:

App\Services\UsuarioService

corresponde al archivo:

src/Services/UsuarioService.php
Instalación

Después de clonar el repositorio, se debe entrar a la carpeta del proyecto:

cd LaboratorioAutoload

Luego se debe generar el autoload de Composer:

composer dump-autoload

También se puede usar:

composer install
Ejecución

Para ejecutar el proyecto desde la terminal:

php index.php

También se puede abrir desde el navegador usando WAMP:

http://localhost/LaboratorioAutoload/
Resultado esperado

Al ejecutar el proyecto, debe mostrarse un resultado parecido a:

Usuario: Samuel - Correo: samuel@utp.ac.pa

Esto demuestra que las clases fueron cargadas correctamente mediante Composer Autoload sin necesidad de usar includes manuales.

Higiene del repositorio

La carpeta vendor/ no se incluye en el repositorio porque se genera automáticamente mediante Composer.

Para ello, se configuró el archivo .gitignore con:

/vendor/
Conclusiones técnicas
Mantenibilidad:
El estándar PSR-4 permite agregar nuevas clases al proyecto manteniendo una estructura ordenada, sin modificar manualmente varios archivos con include o require.
Eficiencia de memoria:
Composer permite cargar las clases solamente cuando son necesarias, aplicando el principio de carga bajo demanda.
Estandarización:
PSR-4 facilita el trabajo colaborativo porque define una forma clara y profesional de organizar namespaces y carpetas.
Repositorio

https://github.com/samuelelzaghir/LaboratorioAutoload.git

Autor

Samuel El Zaghir
Universidad Tecnológica de Panamá
Desarrollo de Software VII