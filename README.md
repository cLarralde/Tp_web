# API REST de Juegos y Categorias
Una API REST creada sobre la misma base de datos que la primera entrega del TPE, Creada por Fernando Gutarra y Carolina Larralde

# Importantes para empezar:
## 1)Importar la base de datos
- importar desde PHPMyAdmin


## 2)Pruebas con postman
El endpoint de la API es: http://localhost/tucarpetalocal/Tp_web/api/juegos para la tabla de Juegos y http://localhost/tucarpetalocal/Tp_web/api/categorias para la tabla de Categorias.

# Endpoints:
- ENDPOINT METODO GET:
- http://localhost/tucarpetalocal/Tp_web/api/juegos Este endpoint te lleva a la función getGames en la cual te trae todos los juegos de la tabla, como no esta seteado "/orden" te los trae sin orden alguno.

- http://localhost/tucarpetalocal/Tp_web/api/juegos/orden Este endpoint te lleva a la función getGames en la cual te trae todos los juegos de la tabla, como esta seteado "/orden" te los trae con un orden ya establecido en el código.

- http://localhost/tucarpetalocal/Tp_web/api/juegos/orden/:FIELD Este endpoint te lleva a la función getGames en la cual te trae todos los juegos de la tabla, como esta seteado "/orden" te los trae con un orden y como esta seteado ":FIELD" ordena los items con el campo seleccionado en la URI (En caso de poner un campo que no exista en la tabla te va a tirar el respectivo error) y en orden Ascendente (Ya establecido en el código). 
*Ejemplo del endpoint: http://localhost/tucarpetalocal/Tp_web/api/juegos/orden/nombre 

- http://localhost/tucarpetalocal/Tp_web/api/juegos/orden/:FIELD/:ORDER Este endpoint te lleva a la función getGames en la cual te trae todos los juegos de la tabla, como esta seteado "/orden" te los trae con un orden y como esta seteado "/:FIELD" ordena los items con el campo seleccionado en la URI (En caso de poner un campo que no exista en la tabla te va a tirar el respectivo error) y como esta seteado "/:ORDER" te ordena los items Descendientemente (Ya que por defecto siempre va a ser Ascendente). 
*Ejemplo del endpoint: http://localhost/tucarpetalocal/Tp_web/api/juegos/orden/nombre/si

-http://localhost/tucarpetalocal/Tp_web/api/juegos/page/:PAGENUMBER Este endpoint te lleva a la función getPaginatedGames que te trae todos los juegos de la tabla paginados en grupos de a 4, en el parametro ":PAGENUMBER" seleccionaras el numero de pagina para ir desplazandote (Debe ser mayor a 0). Si llegaras a poner un número de pagina que no exista (Porque ya no haya más items para paginar) te va a tirar el respectivo error.
*Ejemplo del endpoint: http://localhost/tucarpetalocal/Tp_web/api/juegos/page/1

-http://localhost/tucarpetalocal/Tp_web/api/juegos/:ID Este endpoint te lleva a la función getGame que te trae el juego que tenga misma ID que la ID indicada en la uri. En caso de poner en la uri un ID cuyo juego no exista, te va a tirar el respectivo error.
*Ejemplo del endpoint: http://localhost/tucarpetalocal/Tp_web/api/juegos/2

- ENDPOINT DE AUTORIZACION (NECESARIA PARA UTILIZAR LOS METODOS DE POST Y PUT):
-http://localhost/tucarpetalocal/Tp_web/api/auth/token con metodo get, ir primero en postman a "Authorization" y con type en "Basic Auth" colocar en el username "Admin" y en el password "web" y realizar el send. Copiar el token brindado y luego en los metodos POST o PUT a realizar en cualquiera de las dos tablas de este proyecto, antes de realizar las respectivas consultas pegar en la parte de "Authorization" y con type "Oauth2.0" el token en el input de "Access Token".


- ENDPOINT METODO POST:
-http://localhost/tucarpetalocal/Tp_web/api/juegos Este endpoint te lleva a la funcion newGame, para crear un nuevo juego es necesario colocar en el body de la request todos los campos de la tabla(Menos el id), de lo contrario te va a tirar el respectivo error.

- ENDPOINT METODO PUT: 
-http://localhost/tucarpetalocal/Tp_web/api/juegos/:ID Este endpoint te lleva a la funcion editGame, para editar un nuevo juego con la ID indicada en la uri es necesario colocar en el body de la request todos los campos de la tabla (Menos el id), de lo contrario te va a tirar el respectivo error.
*Ejemplo del endpoint: http://localhost/tucarpetalocal/Tp_web/api/juegos/2


