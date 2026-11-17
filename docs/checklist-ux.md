# Hallazgos de AutoMarket

**Archivo:** `docs/checklist-ux.md`

## Tareas evaluadas

1. Consultar el catálogo de automóviles.
2. Abrir la ficha de un automóvil y regresar al catálogo.
3. Agregar un automóvil nuevo mediante el formulario.
4. Consultar la página de contacto.

Las tareas se evaluaron en escritorio y en una pantalla móvil de 375 px de ancho.

## Evaluación heurística

| # | Heurística | Dónde ocurre | Severidad | Mejora propuesta (acción) |
|---|---|---|---:|---|
| 1 | H5. Prevención de errores | Formulario de agregar auto: el campo Precio permite registrar un automóvil con valor de $0. | 2 | Establece un precio mínimo mayor que cero para evitar registrar vehículos sin un precio válido. |
| 2 | H3. Control y libertad del usuario | Ficha de detalle del automóvil: no cuenta con un botón específico para regresar al catálogo. | 2 | Agrega un botón «Volver al catálogo» o migas de pan para facilitar la navegación. |
| 3 | H10. Ayuda y documentación | Página de Contacto: únicamente muestra el mensaje «¿Tienes alguna pregunta? ¡Contáctanos!», sin proporcionar un medio de comunicación. | 3 | Agrega un correo electrónico o un formulario de contacto para facilitar la comunicación con los usuarios. |
| 4 | H1. Visibilidad del estado del sistema | Formulario de agregar auto: después de enviar los datos, los campos se limpian, pero no aparece un mensaje de confirmación. | 3 | Muestra un mensaje que informe al usuario si el automóvil se registró correctamente o si ocurrió un error. |
| 5 | H1. Visibilidad del estado del sistema | Catálogo: después de agregar un automóvil, el nuevo registro no aparece en la lista de vehículos. | 4 | Verifica que los datos se guarden correctamente y que el catálogo recupere y muestre los automóviles registrados. |
| 6 | H7. Flexibilidad y eficiencia de uso | Catálogo de automóviles: no cuenta con un buscador ni filtros para localizar vehículos rápidamente. | 2 | Incorpora un buscador por nombre y filtros por marca o características para facilitar la búsqueda. |

## Aspectos que funcionan correctamente

Durante la evaluación también se comprobaron los siguientes aspectos:

- El formulario se adapta a una pantalla de 375 px de ancho.
- Los campos obligatorios impiden enviar el formulario vacío.
- El formulario rechaza precios y existencias negativos.
- El sistema permite registrar existencias en cero.
- El menú identifica visualmente la página actual.
- Las fichas de los automóviles muestran correctamente su información.

## Observaciones

Los hallazgos relacionados con el envío del formulario y la visualización del automóvil deben revisarse en el código para identificar si existe un problema de almacenamiento o recuperación de datos.

La evaluación identifica seis oportunidades de mejora que abarcan cinco heurísticas diferentes de Nielsen: H1, H3, H5, H7 y H10.