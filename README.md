# API REST de Juegos y Categorias
Creada por Fernando Gutarra y Carolina Larralde, cuyo objetivo es poder permitir a los clientes el acceso y consumo mediante metodos de protocolos HTTP de una base de datos de videojuegos en el cual hay diferentes juegos con su respectiva valorizacion, descripcion y demas datos de interes para un blog de videojuegos, asi como tambien diferentes categorias junto con sus descripciones, sin la creacion de la parte front del codigo (Que es posible encontrarlo en la primera entrega del TPE)

# Importantes para empezar:
## 1)Importar la base de datos
- importar desde PHPMyAdmin


## 2)Pruebas con postman
El endpoint de la API es: http://localhost/tucarpetalocal/Tp_web/api/juegos para la tabla de Juegos y http://localhost/tucarpetalocal/Tp_web/api/categorias para la tabla de Categorias.

# Bodys:
## Juegos:
```json
 {
        "logo": "x",
        "nombre": "x",
        "fecha_lanzamiento": " x",
        "descripcion": "x",
        "valorizacion": "x",
        "peso": " x",
        "precio": "x",
        "fk_id_categoria": "x"
  }
```
## Categorias:
  ```json
 {
    "nombre": "x",
    "descripcionCat": "xx"
  }
  ```
# Endpoints:
## ENDPOINT METODO GET:

* http://localhost/tucarpetalocal/Tp_web/api/juegos  
  Este endpoint te lleva a la función getGames en la cual te trae todos los juegos de la tabla juegos.
  http://localhost/tucarpetalocal/Tp_web/api/categorias
  Este endpoint te lleva a la función getCategories en la cual te trae todas las categorias de la tabla categorias.

* http://localhost/tucarpetalocal/Tp_web/api/juegos/orden 
    y
  http://localhost/tucarpetalocal/Tp_web/api/categorias/orden
  Estos endpoints te llevan a la función getOrderGames  o getOrderCategories dependiendo de a que tabla se refiera, en ambos casos como esta seteado "/orden" te trae los items con un orden ya establecido en el código. 

* http://localhost/tucarpetalocal/Tp_web/api/juegos/orden/:FIELD
    y
  http://localhost/tucarpetalocal/Tp_web/api/categorias/orden/:FIELD
  Estos endpoint te llevan a la función getOrderGames en el caso de juegos o a la función getOrderCategories en el caso de Categorias, como esta seteado "/orden" te trae los items ordenados. 
    * En el parametro ":FIELD" se coloca el campo por el cual deseas ordenar los registros de la tabla (En caso de poner un campo que no exista en la tabla se te va a indicar el respectivo error). 
         ### ejemplo: 
            http://localhost/tucarpetalocal/Tp_web/api/juegos/orden/nombre
            y
            http://localhost/tucarpetalocal/Tp_web/api/categorias/orden/descripcion

* http://localhost/tucarpetalocal/Tp_web/api/juegos/orden/:FIELD/:ORDER
    y
  http://localhost/tucarpetalocal/Tp_web/api/categorias/orden/:FIELD/:ORDER
  Estos endpoint te llevan a la función getOrderGames en el caso de juegos o a la función getOrderCategories en el caso de Categorias, como esta seteado "/orden" te trae los items ordenados. 
    * En el parametro ":FIELD" se coloca el campo por el cual deseas ordenar los registros de la tabla (En caso de poner un campo que no exista en la tabla se te va a indicar el respectivo error)
    * El parametro ":ORDER" funciona como booleano que al estar seteado ordena los items Descendientemente (Ya que por defecto siempre va a ser Ascendente) (Por lo que en este parametro se puede colocar lo que se desee ya que solo importa si esta o no seteado). 
        ### ejemplo: 
            http://localhost/tucarpetalocal/Tp_web/api/juegos/orden/nombre/si
             y
            http://localhost/tucarpetalocal/Tp_web/api/categorias/orden/nombre/si

* http://localhost/tucarpetalocal/Tp_web/api/juegos/page/:PAGENUMBER
  y
  http://localhost/tucarpetalocal/Tp_web/api/categorias/page/:PAGENUMBER
  Este endpoint te lleva a la función getPaginatedGames que te trae todos los juegos de la tabla paginados en grupos de a 3 en el caso de juegos o te lleva a la función getPaginatedCat que te trae todas las categorias de la tabla paginadas en grupos de a 2 en el caso de categorias. 
    * En el parametro ":PAGENUMBER" seleccionaras el numero de pagina para ir desplazandote (Debe ser mayor a 0). Si llegaras a poner un número de pagina que no exista (Porque ya no haya más items para paginar) se te va a indicar el respectivo error.
        ### ejemplo: 
            http://localhost/tucarpetalocal/Tp_web/api/juegos/page/1
            y
            http://localhost/tucarpetalocal/Tp_web/api/categorias/page/1


* http://localhost/tucarpetalocal/Tp_web/api/juegos/:ID
  y 
  http://localhost/tucarpetalocal/Tp_web/api/categorias/:ID
  Este endpoint te lleva a la función getGame que te trae el juego que tenga misma ID que la ID indicada en la uri en el caso de la tabla de juegos o te lleva a la función getCategory que te trae la categoria que tenga la misma ID que la ID indicada en la uri en el caso de la tabla de categorias. En caso de poner en la uri un ID cuyo juego o categoria no exista se te va a indicar como respuesta a la consulta el respectivo error.
    ### ejemplo: 
        http://localhost/tucarpetalocal/Tp_web/api/juegos/2
        y
        http://localhost/tucarpetalocal/Tp_web/api/categorias/2

* http://localhost/tucarpetalocal/Tp_web/api/juegos/filter/:FIELD/:VALUE
  y 
  http://localhost/tucarpetalocal/Tp_web/api/categorias/filter/:FIELD/:VALUE
  Este endpoint te lleva a la función getFilterGames en el caso de la tabla de juegos o a la función getFilterCategories en el caso de la tabla de categorias. En ambos casos las funciones te traen el/los items que coincidan con el campo y el valor establecidos en la URI.
    * En el parametro ":FIELD" colocaras el campo que desees que se use de filtro y en el parametro ":VALUE" el valor por el cual desees filtrar los registros según el campo elegido previamente.
        ### ejemplo: 
            http://localhost/tucarpetalocal/Tp_web/api/juegos/filter/fk_id_categoria/2
            y
            http://localhost/tucarpetalocal/Tp_web/api/categorias/filter/id/1


## ENDPOINT DE AUTORIZACION (NECESARIA PARA UTILIZAR LOS METODOS DE POST Y PUT):

* http://localhost/tucarpetalocal/Tp_web/api/auth/token 
    Con metodo GET, ir primero en postman a "Authorization" y con type en "Basic Auth" colocar en el username "Admin" y en el password "web" y realizar el send. Copiar el token brindado y luego en los metodos POST o PUT a realizar en cualquiera de las dos tablas de este proyecto, antes de realizar las respectivas consultas pegar en la parte de "Authorization" y con type "Oauth2.0" el token en el input de "Access Token". De esta forma te habrás autenticado con éxito y podrás continuar con la realización de los request que necesiten la autenticación.



## ENDPOINT METODO POST:

* http://localhost/tucarpetalocal/Tp_web/api/juegos
  y
  http://localhost/tucarpetalocal/Tp_web/api/categorias 
    Este endpoint te lleva a la funcion newGame en el caso de la tabla de juegos o a la función insertCat en el caso de la tabla de categorias, para crear un nuevo juego o categoria es necesario colocar en el body de la request todos los campos de la tabla(Menos el id), de lo contrario se te va a indicar como respuesta a la consulta el respectivo error.
  

## ENDPOINT METODO PUT: 

- http://localhost/tucarpetalocal/Tp_web/api/juegos/:ID
  y
  http://localhost/tucarpetalocal/Tp_web/api/categorias/:ID
    Este endpoint te lleva a la funcion editGame en el caso de juegos o a la función editCat en el caso de categorias para editar el item que tenga la ID indicada en la URI, para esto es necesario colocar en el body de la request todos los campos de la tabla (Menos el id).
        *Ejemplo del endpoint: 
            http://localhost/tucarpetalocal/Tp_web/api/juegos/2
            http://localhost/tucarpetalocal/Tp_web/api/categorias/2

    ### ejemplo POST Y PUT:
    #### Juegos:
    ```json
    {
        "logo": "https://upload.wikimedia.org/wikipedia/en/5/57/Dead_Space_Box_Art.jpg",
        "nombre": "Dead Space",
        "fecha_lanzamiento": " 14 OCT 2008",
        "descripcion": "Isaac Clarke es un ingeniero que recibio de su esposa desaparecida un misterioso video pidiendole auxilio, por lo tanto, se embarca dentro de la estacion USG Ishimura sin saber los terrores que alberga dentro",
        "valorizacion": "100",
        "peso": " 4 GB",
        "precio": "ARS$ 800",
        "fk_id_categoria": 16
    }
    ```
    #### Categorias:  
    ```json
    {
        "nombre": "Visual Novel",
        "descripcionCat": "Videojuegos que se basan en la lectura de una historia en donde (a veces) se pueden decidir diferentes opciones y esas opciones repercuten a futuro"
    }
    ```

