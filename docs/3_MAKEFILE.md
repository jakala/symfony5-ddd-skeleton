# Comandos en Makefile
Habitualmente vamos a utilizar la terminal para realizar ciertas tareas bastante automáticas. Este archivo irá 
creciendo a medida que instalemos más comandos que necesitemos ejecutar con frecuencia.

En este caso hemos definido un archivo `Makefile` para ayudarnos con estas tareas. Actualmente Los comandos que tenemos
disponibles son:

- `make compose`: nos genera el contenedor de la app, con la extension xdebug instalada y activada.
- `make vendors`: descarga las carpetas de vendors llamando al composer local.