# Prueba Tecnica slot

Esta segunda version del ejercicio propuesto tiene las siguientes particularidades:

1) Se usa una base de datos de mysql, en el file slotBD.sql se encuentra el script de creacion de tabla y los datos de prueba
2) Use los patrones de diseño: MVC(model, view, controller), DAO (Data access object) y DTO(Data Transfer Object). 
El porque del uso de estos patrones es para separar bien las responsabilidades de cada capa, facilitar el escalamiento (por ejemplo si queremos cambiar la bd a mongoDB) y tener un código más legible
3) Utilizo POO, mejorando el codigo y su legebilidad
4) Use conexiones persistentes con mysqli para evitar crear una conexión para cada script. 
Si bien el mysql tenia en la misma maquina, trate de hacerlo más eficiente. 
Lo ideal creo que seria tener un pool de conexiones para evitar unos dramas que tiene las conexiones pertinentes.  
5) Para el frontend use bootstrap de forma muy básica
6) las validaciones de los input aún son muy basicas, solamente controlo lo requerido. No valido el contenido (proxima version)
7) Aun no implemente nada de cuestiones de seguridad: Cross-Site Scripting (XSS), Cross-Site Request Forgery (CSRF), SQL Injection, HTML Injection, Etc.
8) El server que use fue un apache http
9) Para correr el ejercicio es http://localhost/slot
