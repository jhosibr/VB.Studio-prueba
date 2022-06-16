# test_php
Se crea un sitio web con dos páginas

La siguiente página web está realizada con 
•	PHP
•	Laravel
•	Boostrap
•	Mysql
•	Composer
•	Usa un reCaptcha

La página  Resgistration Form y la pagina Recorded Data
•	Resgistration Form => Encontramos el formulario para el  ingreso de datos
http://localhost:8000/form

•	Recorded Data => visualizamos los datos que se van guardando en la base de datos
http://localhost:8000/dataview

Los archivos que se crearon para poder realizar el sitio web son:
App > Http > Controllers > TestController.php
TestController.php => En este archivo se crea una clase llamada  TestController con dos funciones públicas, la  función store, indexForm e index 
•	Store => Esta función guarda en la base de datos de Mysql los datos registrados por el usuario.
•	indexForm => Hace un render al formulario que está en la pagina Resgistration Form
•	index => hace un render de los datos que están en la base de datos  en la pagina Recorded Data

database > migrations > 2022_06_15_204747_create_tests_table.php
2022_06_15_204747_create_tests_table.php=> En este archivo hacemos una migración hacia la base de datos llamada tests con las tablas id, firtName, lastname, email

Resoucer > views >  app.blade.php
app.blade.php => En este archivo encontramos el navegado y un @yield('content') para no tener que repetir código.
•	Se encuentra el script del reCaptcha 
•	Se encuentra los script que necesita boostrap

Resoucer > views > test > form.blade.php
form.blade.php => En este archivo encontramos el formulario de la pagina Resgistration Form

Resoucer > views > test > viewData.blade
viewData.blade => En este archivo encontramos la tabla con los datos regisrtados en la base de datos
routes > web.php
web.php => En este archivo encontramos 3 rutas 2 rutas de la pagina Resgistration Form y 1 ruta de la pagina Recorded Data
•	Resgistration Form => http://localhost:8000/form
•	Recorded Data => http://localhost:8000/dataview
<<<<<<< HEAD
bdMysql => Se encuentran el esquema de la base de datos
=======
bdMysql => Se encuentran el esquema de la base de datos








