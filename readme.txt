ENUNCIADO PROYECTO
Para la evaluación final de la asignatura debes desarrollar una aplicación web en PHP que se ejecute contra una base de datos MySql. Dicho desarrollo debe realizarse con código PHP propio apoyándose en funcionalidades implementadas en paquetes de terceros, pero nunca basándose en la infraestructura desplegada por algún framework. Para la utilización de código de terceros se debe usar el gestor de dependencias Composer dentro de un proyecto que implemente el estándar de autoloading definido en PSR-4.

El proyecto debe ser subido a un repositorio en GitHub cuya URL será lo que entregues en esta tarea. Dicho proyecto debe incluir un README con la documentación del mismo (consideraciones para la instalación, ejemplos de uso, etc) y por supuesto no incluir información crítica en ninguno de sus archivos.

Requesitos de la aplicación:

CRUD de entidades: La aplicación debe gestionar un CRUD basado en REST para al menos dos entidades (sin contar la correspondiente a los usuarios). Es decir, la aplicación debe ofrecer la posibilidad de mostrar una lista de entidades, información específica de una entidad, permitir editarla y borrarla. Dichas entidades deben tener al menos 5 campos excluyendo la clave principal y los datos de fechas (created_at y updated_at).
Front Controller: La aplicación debe implementar el patrón Front Controller de manera que toda su lógica se cargue desde un archivo index.php situado en la raíz del servidor web (desde donde se empieza a cargar la aplicación). En dicho Front Controller se gestionará todas las rutas a las que responda la aplicación (leer puntos siguientes).
Rutas: La aplicación tiene que implementar un router (puedes usar Phroute tal como hemos visto en clase) para gestionar todas las rutas servidas por la misma.
REST: Las rutas de la aplicación deben responder a los verbos GET, POST, PUT (o PATCH) y DELETE de acuerdo a la especificación de REST. Utilizar un verbo en una acción definida para otro se considerará un error grave.
Controladores: La aplicación debe implementar una capa de controladores desde donde se construya toda la lógica de las rutas de la misma.
Modelo: La aplicación tiene que implementar una capa para el modelo (clases modelo) las cuales deben hacer uso del ORMEloquent (Illuminate/Database). TODAS LAS ACCIONES CON LA BASE DE DATOS DEBEN HACERSE A TRAVÉS DEL MODELO.
Vistas: La aplicación tiene que implementar una capa de vistas que usen un motor de plantillas (puedes usar Twig). No está permitido duplicar código en las vistas. Es decir, la parte del HTML que compartan las vistas debe estar estructurada en base a archivos de layout y sus correspondientes bloques para evitar dicha duplicación.
Usuarios: La aplicación tiene que dar soporte de login y registro de usuarios. Asimismo cada usuario debe tener la posibilidad de editar la información de su perfil. No es necesario que la entidad usuarios ofrezca soporte para lista de usuarios. La aplicación debe implementar funcionalidad para los roles de usuarios (Diferenciar entre rol admin y rol usuario).
Validador: En el alta o edición de entidades los formularios deben controlar la correcta introducción de datos a través de un control de validación de lado del servidor. Puedes usar el paquete que hemos visto en clase. No es imprescindible que el proyecto presente validación del lado del cliente.
Sesiones: Algunas de las rutas de la aplicación debe ir protegidas por el control de sesión. Es decir, habrá rutas que solo sean accesibles si los usuarios están registrados. Esta información debe ir indicada en el README del repositorio.
Variables de Entorno: La aplicación no debe tener hardcodeados datos críticos en su código. Para ello, tal como hemos visto en clase hay que implementar un sistema de variables de entorno, cuyo archivo de variables y sus valores no incluir en el respositorio, pero sí uno de ejemplo. La información de estos valores debe ir indicada en el README del repositorio.

ERRORES GRAVES

Aunque esta lista es solo una referencia, los siguientes puntos definen aquellos errores que se considerarán como graves. Cometer uno solo de ellos implicará no superar el proyecto.

Todas las acciones con la base de datos hay que realizarlas a través del modelo. En este proyecto no se debe implementar un objeto PDO manualmente, ni LA APLICACIÓN NO PUEDE TENER CONSULTAS SQL HARDCODEADAS.
Semántica REST: Procesar una petición PUT o DELETE a través de una petición GET o POST será considerado como un error grave.
Dentro de las vistas no puede aparecer ningún archivo PHP, ni código que contenga este lenguaje.
Los campos de fechas created_at y updated_at son obligatorios para todas las entidades gestionadas por la aplicación.
No puede aparecer datos críticos en los archivos que se compartan.
El código debe estar correctamente documentado. Las clases deben tener su documentación de acuerdo a PHPDoc.
No puede aparecer código duplicado en la aplicación.
Los proyectos no entregados a través de un repositorio en GitHub no serán evaluados.
Los proyectos entregados que carezcan de archivo README con toda la información necesaria para la instalación y despliegue de los mismos NO SERÁN EVALUADOS. Ojo porque esto es parte importante de la asignatura. Si para desplegar la aplicación hace falta hacer algún paso no indicado en el README se valorará como un error grave.