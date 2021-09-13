# CHANGELOG
## 2021-09-13
Añadida linea de logs con un token unico generado a traves de la sesion. De esta manera, se puede identificar toda la
linea de logs. Un ejemplo:

```
[2021-09-13T20:59:58.135132+00:00] [613fbbce20fe2-1] [2.8610229492188E-6] request.ERROR:
```
- El primer corchete contiene la fecha de la ejecucion de la linea de log. 
- el segundo corchete presenta un token unico por la sesión, seguido de un guion y el numero de log que se ha ejecutado.
- el tercer paso indica el tiempo (en microsegundos) de ejecución DESDE el inicio de la sesión.
