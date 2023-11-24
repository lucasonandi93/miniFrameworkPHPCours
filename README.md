# miniFrameworkPHPCours
Faire un mini framework MVC en vanilla PHP. Le framework doit respecter l’architecture Model View Controler. Un système de routage permettra d’associer des contrôleurs à des routes (URL + méthode HTTP).

### Especificaciones del Proyecto a Implementar:

1. En la URL GET `/`, el sistema debe mostrar una página de inicio en formato `text/html` con enlaces a otros recursos (una barra de navegación).

2. En la URL GET `/random-number`, el sistema devuelve un número aleatorio entre 0 y 100 en formato `application/json`.

3. En la URL POST `/even-numbers`, al enviar un formulario que pregunta si el número es par o no, el sistema responde en formato `text/html` con un párrafo que contiene "El número `<número enviado>` es par" o "El número `<número enviado>` no es par". Si el número enviado no es par, el párrafo se muestra en rojo; de lo contrario, se muestra en verde. Para esto, agregar una hoja de estilo CSS a la página retornada.

4. En la URL GET `/even-numbers`, el sistema devuelve los primeros 100 números pares en formato `application/json` como un arreglo JSON.

5. Agregar parámetros de URL (query parameters) a la URL GET `/even-numbers` para realizar las siguientes variaciones:
   - `start-at=X` para empezar desde un valor diferente a 0. X debe ser un número positivo y par.
   - `quantity=X` para cambiar la cantidad de números pares a devolver. X debe ser un número positivo.
   - `order=desc|asc` para devolverlos de mayor a menor o viceversa (ascendente por defecto).

6. Para cualquier otra URL, el sistema debe devolver una página en formato `text/html` 404 con un código de estado HTTP 404, indicando que el recurso no existe y proporcionando un medio para regresar a la página de inicio.


### Remarque :
Le point 5 n'est pas correctement réalisé.
Il est possible de passer les valeurs de démarrage et de quantité par l'URL `/even-numbers/"valeur-de-start-at"/"valeur-de-quantity"` par exemple : `/even-numbers/2/10` affichera les 10 premiers nombres pairs en commençant à partir de 2.