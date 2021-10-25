# CHANGELOG

## 2021-10-25
### Definida la Estructura de respuesta
Se añade un servicio nuevo que recoje el response de nuestros controllers, y lo modifica dejando una estructura como 
la siguiente:
```
{
  "status": true,
  "data": {}|[]
}
```
siendo:
  * status un valor que nos indica que la respuesta ha sido correcta,
  * data es un array o un objeto que contiene la respuesta.

De esta manera nuestras apis siempre tienen un formato igual para los casos correctos.
## 2021-09-13
### Actualización de Logs
Añadida línea de logs con un token único generado a traves de la sesion. De esta manera, se puede identificar toda la
linea de logs. Un ejemplo:
```
[2021-09-13T20:59:58.135132+00:00] [613fbbce20fe2] [1] [2.8610229492188E-6] request.ERROR:
```  
  * El primer corchete contiene la fecha de la ejecucion de la linea de log.
  * El segundo corchete presenta un token unico por la sesión
  * El tercer corchete muestra el numero correlativo de instruccion log que se ha ejecutado.
  * El cuarto paso indica el tiempo (en microsegundos) de ejecución DESDE el inicio de la sesión.

### Nuevos comandos Make
Agregados tres comandos Make nuevos para revision de test y de formato psr12 de los archivos php. En el caso de test ademas,
generamos un informe de cobertura en html, dentro de la carpeta `var/coverage`

### Hooks pre-commit y pre-push
Ahora, al hacer un commit se corrige el formato de los archivos php del commit, para que cumplan psr12.
En el caso de hacer un push, se ejecutan los tests y se verifica que el formato psr12 se cumpla.



