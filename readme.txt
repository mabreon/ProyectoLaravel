ENUNCIADO PROYECTO
Para la evaluaci�n final de la asignatura debes desarrollar una aplicaci�n web en PHP que se ejecute contra una base de datos MySql. Dicho desarrollo debe realizarse con c�digo PHP propio apoy�ndose en funcionalidades implementadas en paquetes de terceros, pero nunca bas�ndose en la infraestructura desplegada por alg�n framework. Para la utilizaci�n de c�digo de terceros se debe usar el gestor de dependencias Composer dentro de un proyecto que implemente el est�ndar de autoloading definido en PSR-4.

El proyecto debe ser subido a un repositorio en GitHub cuya URL ser� lo que entregues en esta tarea. Dicho proyecto debe incluir un README con la documentaci�n del mismo (consideraciones para la instalaci�n, ejemplos de uso, etc) y por supuesto no incluir informaci�n cr�tica en ninguno de sus archivos.

Requesitos de la aplicaci�n:

CRUD de entidades: La aplicaci�n debe gestionar un CRUD basado en REST para al menos dos entidades (sin contar la correspondiente a los usuarios). Es decir, la aplicaci�n debe ofrecer la posibilidad de mostrar una lista de entidades, informaci�n espec�fica de una entidad, permitir editarla y borrarla. Dichas entidades deben tener al menos 5 campos excluyendo la clave principal y los datos de fechas (created_at y updated_at).
Front Controller: La aplicaci�n debe implementar el patr�n Front Controller de manera que toda su l�gica se cargue desde un archivo index.php situado en la ra�z del servidor web (desde donde se empieza a cargar la aplicaci�n). En dicho Front Controller se gestionar� todas las rutas a las que responda la aplicaci�n (leer puntos siguientes).
Rutas: La aplicaci�n tiene que implementar un router (puedes usar Phroute tal como hemos visto en clase) para gestionar todas las rutas servidas por la misma.
REST: Las rutas de la aplicaci�n deben responder a los verbos GET, POST, PUT (o PATCH) y DELETE de acuerdo a la especificaci�n de REST. Utilizar un verbo en una acci�n definida para otro se considerar� un error grave.
Controladores: La aplicaci�n debe implementar una capa de controladores desde donde se construya toda la l�gica de las rutas de la misma.
Modelo: La aplicaci�n tiene que implementar una capa para el modelo (clases modelo) las cuales deben hacer uso del ORMEloquent (Illuminate/Database). TODAS LAS ACCIONES CON LA BASE DE DATOS DEBEN HACERSE A TRAV�S DEL MODELO.
Vistas: La aplicaci�n tiene que implementar una capa de vistas que usen un motor de plantillas (puedes usar Twig). No est� permitido duplicar c�digo en las vistas. Es decir, la parte del HTML que compartan las vistas debe estar estructurada en base a archivos de layout y sus correspondientes bloques para evitar dicha duplicaci�n.
Usuarios: La aplicaci�n tiene que dar soporte de login y registro de usuarios. Asimismo cada usuario debe tener la posibilidad de editar la informaci�n de su perfil. No es necesario que la entidad usuarios ofrezca soporte para lista de usuarios. La aplicaci�n debe implementar funcionalidad para los roles de usuarios (Diferenciar entre rol admin y rol usuario).
Validador: En el alta o edici�n de entidades los formularios deben controlar la correcta introducci�n de datos a trav�s de un control de validaci�n de lado del servidor. Puedes usar el paquete que hemos visto en clase. No es imprescindible que el proyecto presente validaci�n del lado del cliente.
Sesiones: Algunas de las rutas de la aplicaci�n debe ir protegidas por el control de sesi�n. Es decir, habr� rutas que solo sean accesibles si los usuarios est�n registrados. Esta informaci�n debe ir indicada en el README del repositorio.
Variables de Entorno: La aplicaci�n no debe tener hardcodeados datos cr�ticos en su c�digo. Para ello, tal como hemos visto en clase hay que implementar un sistema de variables de entorno, cuyo archivo de variables y sus valores no incluir en el respositorio, pero s� uno de ejemplo. La informaci�n de estos valores debe ir indicada en el README del repositorio.

ERRORES GRAVES

Aunque esta lista es solo una referencia, los siguientes puntos definen aquellos errores que se considerar�n como graves. Cometer uno solo de ellos implicar� no superar el proyecto.

Todas las acciones con la base de datos hay que realizarlas a trav�s del modelo. En este proyecto no se debe implementar un objeto PDO manualmente, ni LA APLICACI�N NO PUEDE TENER CONSULTAS SQL HARDCODEADAS.
Sem�ntica REST: Procesar una petici�n PUT o DELETE a trav�s de una petici�n GET o POST ser� considerado como un error grave.
Dentro de las vistas no puede aparecer ning�n archivo PHP, ni c�digo que contenga este lenguaje.
Los campos de fechas created_at y updated_at son obligatorios para todas las entidades gestionadas por la aplicaci�n.
No puede aparecer datos cr�ticos en los archivos que se compartan.
El c�digo debe estar correctamente documentado. Las clases deben tener su documentaci�n de acuerdo a PHPDoc.
No puede aparecer c�digo duplicado en la aplicaci�n.
Los proyectos no entregados a trav�s de un repositorio en GitHub no ser�n evaluados.
Los proyectos entregados que carezcan de archivo README con toda la informaci�n necesaria para la instalaci�n y despliegue de los mismos NO SER�N EVALUADOS. Ojo porque esto es parte importante de la asignatura. Si para desplegar la aplicaci�n hace falta hacer alg�n paso no indicado en el README se valorar� como un error grave.