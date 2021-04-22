# DDD
## estructura de carpetas:
```
src
├── Application
│   ├── Command
│   ├── Handler
│   ├── Response
│   └── Service
├── Domain
│   ├── Entity
│   ├── Event
│   ├── Exception
│   ├── Interface
│   └── ValueObject
├── Infrastructure
│   ├── Controller
│   ├── Exception
│   ├── Repository
│   └── Service
└── Shared
```
## Domain
Tenemos dentro de esta carpeta todo lo referente a la parte de Dominio de nuestro negocio

- `Entity` Entidades de nuestro dominio.
- `Event` Eventos de dominio, para mensajes hacia subscriptores (de momento ninguno, preparado para un futuro CQRS)
- `Exception` (de dominio). Ciertos ValueObjects lanzan excepciones al comprobar el tipo de dato.
- `Interface` Para que las implementaciones en infraestructura cumplan estas interfaces.
- `ValueObject` son nuestros tipos de dato para validar que las entidades se componen correctamente.

## Application
Dentro de esta carpeta tenemos la parte lógica de los servicios que se requieren para cumplir los casos de uso:
- `Command` Aquí están los elementos que utilizaremos para un futuro CQRS, incluyendo los QUERY y los COMMAND.
- `Handler` Para una futura CQRS. Los controladores de Arquitectura suelen llamar al handler.
- `Response` Los tipos de respuesta que se esperan en la salida de los servicios utilizados.
- `Service` Ciertas lógicas que componen los datos. Por ejemplo, para proporcionar las salidas de tipo Response.

## Infrastructure
- `Controller`: Nuestros puntos de entrada a la aplicación. Normalmente utilizarán un handler de Application
- `Exception`: Ciertas lógicas van a lanzar excepciones en el ámbito de infrastructure. Normalmente para convertir
  otras excepciones (de dominio) a excepciones de respuesta a nivel infraestructura.
- `Repository`: las implementaciones de los repositories que acceden y guardan datos. Deben implementar las
  interfaces de dominio
  `Service`: inicialmente en blanco, esta carpeta está reservada para los servicios a este nivel.
  
## Shared
Aquí situaremos ciertas partes de configuración del propio framework, para desacoplarnos de este último. 