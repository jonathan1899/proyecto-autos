
# AutoMarket

Catálogo de automóviles con consulta de fichas, buscador y formulario para registrar vehículos. Proyecto de la asignatura Aplicaciones Web (E-APW-2), grupo 401.

## Vista previa

Repositorio de GitHub:

https://github.com/jonathan1899/proyecto-autos

## Dominio y entidades

| Entidad del curso | Equivalente en mi proyecto |
|---|---|
| Categoría | Categoría de automóvil |
| Producto | Automóvil |
| Cliente / Usuario | Visitante del catálogo |
| Pedido + DetallePedido | Solicitud de contacto |

## Estructura del proyecto

```text
proyecto-autos/
├── datos/
│   └── datos.json
├── docs/
│   ├── assets/
│   │   ├── css/
│   │   ├── img/
│   │   └── js/
│   ├── alta-autos.html
│   ├── autos-detalle.html
│   ├── autos.html
│   ├── checklist-ux.md
│   ├── contacto.html
│   └── index.html
├── public/
│   ├── assets/
│   │   ├── css/
│   │   └── img/
│   ├── alta-autos.php
│   ├── autos-detalle.php
│   ├── autos.php
│   ├── contacto.php
│   └── index.php
├── .gitignore
└── README.md
```

## Funcionalidades

- Página principal de AutoMarket.
- Catálogo de automóviles.
- Buscador por nombre y categoría.
- Fichas individuales con información de cada automóvil.
- Formulario para registrar nuevos vehículos.
- Validación de los campos y datos ingresados.
- Almacenamiento de información en formato JSON.
- Diseño adaptable a dispositivos móviles.
- Mensajes de confirmación y error en el formulario.

## Evaluación heurística UX

Se realizó una evaluación de la interfaz utilizando las 10 heurísticas de usabilidad de Jakob Nielsen.

Se evaluaron cuatro tareas:

1. Consultar el catálogo de automóviles.
2. Abrir la ficha de un automóvil y regresar al catálogo.
3. Agregar un automóvil nuevo mediante el formulario.
4. Consultar la página de contacto.

Se identificaron seis hallazgos relacionados con cinco heurísticas diferentes: H1, H3, H5, H7 y H10.

Los resultados se encuentran documentados en:

`docs/checklist-ux.md`

## Bitácora U2S06

1. Se realizó una evaluación heurística de AutoMarket utilizando las 10 heurísticas de Nielsen, identificando seis hallazgos relacionados con cinco heurísticas diferentes.

2. Se revisaron los problemas de usabilidad detectados en el catálogo, el formulario de registro, las fichas de los automóviles y la página de contacto.

3. Se implementaron mejoras en el formulario de registro, los mensajes de confirmación, el catálogo dinámico, el buscador de automóviles y las fichas de detalle. Los cambios se respaldaron en GitHub mediante commits en la rama `main`.

## Tecnologías utilizadas

- HTML5
- CSS3
- JavaScript
- PHP
- JSON
- Git
- GitHub

## Estado del proyecto

Unidad II: mejoras de interfaz y experiencia de usuario realizadas y respaldadas en GitHub.

El proyecto cuenta con una versión estática en `docs/` y una versión dinámica en PHP dentro de `public/`.

## Autor

Estudiante de la carrera de Tecnologías de la Información e Innovación Digital.

Grupo 401.
