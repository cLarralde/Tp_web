# API REST de Juegos y Categorias
Una API REST creada sobre la misma base de datos que la primera entrega del TPE, Creada por Fernando Gutarra y Carolina Larralde

# Importantes para empezar:
## 1)Importar la base de datos
- importar desde PHPMyAdmin


## 2)Pruebas con postman
El endpoint de la API es: http://localhost/tucarpetalocal/Tp_web/api/juegos para la tabla de Juegos y http://localhost/tucarpetalocal/Tp_web/api/categorias para la tabla de Categorias.

# Endpoints:
- ENDPOINT METODO GET:

- http://localhost/tucarpetalocal/Tp_web/api/juegos  
    Este endpoint te lleva a la función getGames en la cual te trae todos los juegos de la tabla juegos.
  http://localhost/tucarpetalocal/Tp_web/api/categorias
    Este endpoint te lleva a la función getCategories en la cual te trae todas las categorias de la tabla categorias.

- http://localhost/tucarpetalocal/Tp_web/api/juegos/orden 
    y
  http://localhost/tucarpetalocal/Tp_web/api/categorias/orden
    Estos endpoints te llevan a la función getOrderGames  o getOrderCategories dependiendo de a que tabla se refiera, en ambos casos como esta seteado "/orden" te trae los items con un orden ya establecido en el código. 

- http://localhost/tucarpetalocal/Tp_web/api/juegos/orden/:FIELD
    y
  http://localhost/tucarpetalocal/Tp_web/api/categorias/orden/:FIELD
    Estos endpoint te llevan a la función getOrderGames en el caso de juegos o a la función getOrderCategories en el caso de Categorias, como esta seteado "/orden" te trae los items ordenados y como esta seteado ":FIELD" ordena los items con el campo seleccionado en la URI (En caso de poner un campo que no exista en la tabla te va a tirar el respectivo error) y en orden Ascendente (Ya establecido en el código). 
        *Ejemplo del endpoint: 
            http://localhost/tucarpetalocal/Tp_web/api/juegos/orden/nombre
            y
            http://localhost/tucarpetalocal/Tp_web/api/categorias/orden/descripcion

- http://localhost/tucarpetalocal/Tp_web/api/juegos/orden/:FIELD/:ORDER
    y
  http://localhost/tucarpetalocal/Tp_web/api/categorias/orden/:FIELD/:ORDER
    Estos endpoint te llevan a la función getOrderGames en el caso de juegos o a la función getOrderCategories en el caso de Categorias, como esta seteado "/orden" te trae los items ordenados y como esta seteado ":FIELD" ordena los items con el campo seleccionado en la URI (En caso de poner un campo que no exista en la tabla te va a tirar el respectivo error) y como esta seteado ":ORDER" te ordena los items Descendientemente (Ya que por defecto siempre va a ser Ascendente). 
        *Ejemplo del endpoint: 
            http://localhost/tucarpetalocal/Tp_web/api/juegos/orden/nombre/si
             y
            http://localhost/tucarpetalocal/Tp_web/api/categorias/orden/nombre/si

- http://localhost/tucarpetalocal/Tp_web/api/juegos/page/:PAGENUMBER
  y
  http://localhost/tucarpetalocal/Tp_web/api/categorias/page/:PAGENUMBER
    Este endpoint te lleva a la función getPaginatedGames que te trae todos los juegos de la tabla paginados en grupos de a 4 en el caso de juegos o te lleva a la función getPaginatedCat que te trae todas las categorias de la tabla paginadas en grupos de a 2 en el caso de categorias. En ambos casos, en el parametro ":PAGENUMBER" seleccionaras el numero de pagina para ir desplazandote (Debe ser mayor a 0). Si llegaras a poner un número de pagina que no exista (Porque ya no haya más items para paginar) te va a tirar el respectivo error.
        *Ejemplo del endpoint: 
            http://localhost/tucarpetalocal/Tp_web/api/juegos/page/1
            y
            http://localhost/tucarpetalocal/Tp_web/api/categorias/page/1


- http://localhost/tucarpetalocal/Tp_web/api/juegos/:ID
  y 
  http://localhost/tucarpetalocal/Tp_web/api/categorias/:ID
    Este endpoint te lleva a la función getGame que te trae el juego que tenga misma ID que la ID indicada en la uri en el caso de la tabla de juegos o te lleva a la función getCategory que te trae la categoria que tenga la misma ID que la ID indicada en la uri en el caso de la tabla de categorias. En caso de poner en la uri un ID cuyo juego o categoria no exista, te va a tirar el respectivo error.
        *Ejemplo del endpoint: 
            http://localhost/tucarpetalocal/Tp_web/api/juegos/2
            y
            http://localhost/tucarpetalocal/Tp_web/api/categorias/2

- http://localhost/tucarpetalocal/Tp_web/api/juegos/filter/:FIELD/:VALUE
  y 
  http://localhost/tucarpetalocal/Tp_web/api/categorias/filter/:FIELD/:VALUE
    Este endpoint te lleva a la función getFilterGames en el caso de la tabla de juegos o a la función getFilterCategories en el caso de la tabla de categorias. En ambos casos las funciones te traen el/los items que coincidan con el campo y el valor establecidos en la URI.
        *Ejemplo del endpoint: 
            http://localhost/tucarpetalocal/Tp_web/api/juegos/filter/fk_id_categoria/2
            y
            http://localhost/tucarpetalocal/Tp_web/api/categorias/filter/id/1


- ENDPOINT DE AUTORIZACION (NECESARIA PARA UTILIZAR LOS METODOS DE POST Y PUT):

- http://localhost/tucarpetalocal/Tp_web/api/auth/token 
    Con metodo GET, ir primero en postman a "Authorization" y con type en "Basic Auth" colocar en el username "Admin" y en el password "web" y realizar el send. Copiar el token brindado y luego en los metodos POST o PUT a realizar en cualquiera de las dos tablas de este proyecto, antes de realizar las respectivas consultas pegar en la parte de "Authorization" y con type "Oauth2.0" el token en el input de "Access Token". De esta forma te habrás autenticado con éxito.


- ENDPOINT METODO POST:

- http://localhost/tucarpetalocal/Tp_web/api/juegos
  y
  http://localhost/tucarpetalocal/Tp_web/api/categorias 
    Este endpoint te lleva a la funcion newGame en el caso de la tabla de juegos o a la función insertCat en el caso de la tabla de categorias, para crear un nuevo juego o categoria es necesario colocar en el body de la request todos los campos de la tabla(Menos el id), de lo contrario te va a tirar el respectivo error.

- ENDPOINT METODO PUT: 

- http://localhost/tucarpetalocal/Tp_web/api/juegos/:ID
  y
  http://localhost/tucarpetalocal/Tp_web/api/categorias/:ID
    Este endpoint te lleva a la funcion editGame en el caso de juegos o a la función editCat en el caso de categorias para editar el item que tenga la ID indicada en la URI, para esto es necesario colocar en el body de la request todos los campos de la tabla (Menos el id), de lo contrario te va a tirar el respectivo error.
        *Ejemplo del endpoint: 
            http://localhost/tucarpetalocal/Tp_web/api/juegos/2
            http://localhost/tucarpetalocal/Tp_web/api/categorias/2

