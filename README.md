# LaboratorioAutoload

## Laboratorio #4: Autocarga Automática

Universidad Tecnológica de Panamá  
Facultad de Ingeniería en Sistemas Computacionales  
Licenciatura en Desarrollo y Gestión de Software  
Desarrollo de Software VII  

## Descripción

Este proyecto corresponde al laboratorio de Autocarga Automática utilizando Composer y el estándar PSR-4 en PHP.

El objetivo es organizar las clases mediante namespaces y utilizar el archivo `vendor/autoload.php` generado por Composer para evitar el uso manual de múltiples instrucciones `include`, `include_once`, `require` o `require_once`.

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
```

## Configuración PSR-4

En el archivo `composer.json` se configuró el bloque `autoload`:

```json
"autoload": {
    "psr-4": {
        "App\\": "src/"
    }
}
```

Esto indica que el namespace principal `App\` apunta a la carpeta física `src/`.

Ejemplos de relación entre namespaces y archivos:

```text
App\Models\Usuario           -> src/Models/Usuario.php
App\Services\UsuarioService  -> src/Services/UsuarioService.php
```

## Instalación

Después de clonar el repositorio, entrar a la carpeta del proyecto:

```bash
cd LaboratorioAutoload
```

Generar la carga automática de Composer:

```bash
composer dump-autoload
```

También se puede utilizar:

```bash
composer install
```

## Ejecución

Para ejecutar el proyecto desde la terminal:

```bash
php index.php
```

También se puede ejecutar desde el navegador usando WAMP:

```text
http://localhost/LaboratorioAutoload/
```

## Resultado esperado

```text
Usuario: Samuel - Correo: samuel@ejemplo.com
```

Este resultado demuestra que las clases fueron cargadas correctamente mediante Composer Autoload sin necesidad de includes manuales.

## Higiene del repositorio

La carpeta `vendor/` no se incluye en el repositorio porque se genera automáticamente mediante Composer.

El archivo `.gitignore` contiene:

```gitignore
/vendor/
```

Luego de clonar el proyecto, cada usuario debe generar localmente la carpeta `vendor/` ejecutando Composer.

## Conclusiones técnicas

### Mantenibilidad

El estándar PSR-4 facilita agregar nuevas clases al proyecto manteniendo una estructura ordenada, sin modificar manualmente archivos principales con instrucciones `include` o `require`.

### Eficiencia de memoria

Composer permite cargar las clases solamente cuando son necesarias, aplicando el principio de carga bajo demanda.

### Estandarización

PSR-4 permite organizar el proyecto de forma clara y profesional, facilitando el trabajo colaborativo entre desarrolladores.

## Repositorio

```text
https://github.com/samuelelzaghir/LaboratorioAutoload.git
```

## Autor

Samuel El Zaghir  
Universidad Tecnológica de Panamá  
Desarrollo de Software VII  
Grupo: 1GS131