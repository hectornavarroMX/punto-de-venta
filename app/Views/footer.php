</div>
<!-- /.content-wrapper -->
<footer class="main-footer">
  <div class="float-right d-none d-sm-block">
    <b>Version</b> 3.2.0
  </div>
  <strong>Copyright &copy; 2023. <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
  <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?= base_url() ?>/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url() ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="<?= base_url() ?>/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url() ?>/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url() ?>/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= base_url() ?>/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?= base_url() ?>/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?= base_url() ?>/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?= base_url() ?>/plugins/jszip/jszip.min.js"></script>
<script src="<?= base_url() ?>/plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?= base_url() ?>/plugins/pdfmake/vfs_fonts.js"></script>
<script src="<?= base_url() ?>/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?= base_url() ?>/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?= base_url() ?>/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url() ?>/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<!-- <script src="<?= base_url() ?>/dist/js/demo.js"></script> -->
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "lengthChange": false,
      "autoWidth": false,
      // "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"],
      "buttons": ["copy", "excel", "pdf", "print", "colvis"],
      language: {
        "aria": {
          "sortAscending": "Activar para ordenar la columna de manera ascendente",
          "sortDescending": "Activar para ordenar la columna de manera descendente"
        },
        "autoFill": {
          "cancel": "Cancelar",
          "fill": "Rellene todas las celdas con <i>%d<\/i>",
          "fillHorizontal": "Rellenar celdas horizontalmente",
          "fillVertical": "Rellenar celdas verticalmente"
        },
        "buttons": {
          "collection": "Colecci??n",
          "colvis": "Ver columnas",
          "colvisRestore": "Restaurar visibilidad",
          "copy": "Copiar",
          "copyKeys": "Presione ctrl o u2318 + C para copiar los datos de la tabla al portapapeles del sistema. <br \/> <br \/> Para cancelar, haga clic en este mensaje o presione escape.",
          "copySuccess": {
            "1": "Copiada 1 fila al portapapeles",
            "_": "Copiadas %d fila al portapapeles"
          },
          "copyTitle": "Copiar al portapapeles",
          "csv": "CSV",
          "excel": "Excel",
          "pageLength": {
            "-1": "Mostrar todas las filas",
            "_": "Mostrar %d filas"
          },
          "pdf": "PDF",
          "print": "Imprimir",
          "createState": "Crear Estado",
          "removeAllStates": "Borrar Todos los Estados",
          "removeState": "Borrar Estado",
          "renameState": "Renombrar Estado",
          "savedStates": "Guardar Estado",
          "stateRestore": "Restaurar Estado",
          "updateState": "Actualizar Estado"
        },
        "infoThousands": ",",
        "loadingRecords": "Cargando...",
        "paginate": {
          "first": "Primero",
          "last": "??ltimo",
          "next": "Siguiente",
          "previous": "Anterior"
        },
        "processing": "Procesando...",
        "search": "Buscar:",
        "searchBuilder": {
          "add": "A??adir condici??n",
          "button": {
            "0": "Constructor de b??squeda",
            "_": "Constructor de b??squeda (%d)"
          },
          "clearAll": "Borrar todo",
          "condition": "Condici??n",
          "deleteTitle": "Eliminar regla de filtrado",
          "leftTitle": "Criterios anulados",
          "logicAnd": "Y",
          "logicOr": "O",
          "rightTitle": "Criterios de sangr??a",
          "title": {
            "0": "Constructor de b??squeda",
            "_": "Constructor de b??squeda (%d)"
          },
          "value": "Valor",
          "conditions": {
            "date": {
              "after": "Despu??s",
              "before": "Antes",
              "between": "Entre",
              "empty": "Vac??o",
              "equals": "Igual a",
              "not": "Diferente de",
              "notBetween": "No entre",
              "notEmpty": "No vac??o"
            },
            "number": {
              "between": "Entre",
              "empty": "Vac??o",
              "equals": "Igual a",
              "gt": "Mayor a",
              "gte": "Mayor o igual a",
              "lt": "Menor que",
              "lte": "Menor o igual a",
              "not": "Diferente de",
              "notBetween": "No entre",
              "notEmpty": "No vac??o"
            },
            "string": {
              "contains": "Contiene",
              "empty": "Vac??o",
              "endsWith": "Termina con",
              "equals": "Igual a",
              "not": "Diferente de",
              "startsWith": "Inicia con",
              "notEmpty": "No vac??o",
              "notContains": "No Contiene",
              "notEndsWith": "No Termina",
              "notStartsWith": "No Comienza"
            },
            "array": {
              "equals": "Igual a",
              "empty": "Vac??o",
              "contains": "Contiene",
              "not": "Diferente",
              "notEmpty": "No vac??o",
              "without": "Sin"
            }
          },
          "data": "Datos"
        },
        "searchPanes": {
          "clearMessage": "Borrar todo",
          "collapse": {
            "0": "Paneles de b??squeda",
            "_": "Paneles de b??squeda (%d)"
          },
          "count": "{total}",
          "emptyPanes": "Sin paneles de b??squeda",
          "loadMessage": "Cargando paneles de b??squeda",
          "title": "Filtros Activos - %d",
          "countFiltered": "{shown} ({total})",
          "collapseMessage": "Colapsar",
          "showMessage": "Mostrar Todo"
        },
        "select": {
          "cells": {
            "1": "1 celda seleccionada",
            "_": "%d celdas seleccionadas"
          },
          "columns": {
            "1": "1 columna seleccionada",
            "_": "%d columnas seleccionadas"
          },
          "rows": {
            "1": "1 fila seleccionada",
            "_": "%d filas seleccionadas"
          }
        },
        "thousands": ",",
        "datetime": {
          "previous": "Anterior",
          "hours": "Horas",
          "minutes": "Minutos",
          "seconds": "Segundos",
          "unknown": "-",
          "amPm": [
            "am",
            "pm"
          ],
          "next": "Siguiente",
          "months": {
            "0": "Enero",
            "1": "Febrero",
            "10": "Noviembre",
            "11": "Diciembre",
            "2": "Marzo",
            "3": "Abril",
            "4": "Mayo",
            "5": "Junio",
            "6": "Julio",
            "7": "Agosto",
            "8": "Septiembre",
            "9": "Octubre"
          },
          "weekdays": [
            "Domingo",
            "Lunes",
            "Martes",
            "Mi??rcoles",
            "Jueves",
            "Viernes",
            "S??bado"
          ]
        },
        "editor": {
          "close": "Cerrar",
          "create": {
            "button": "Nuevo",
            "title": "Crear Nuevo Registro",
            "submit": "Crear"
          },
          "edit": {
            "button": "Editar",
            "title": "Editar Registro",
            "submit": "Actualizar"
          },
          "remove": {
            "button": "Eliminar",
            "title": "Eliminar Registro",
            "submit": "Eliminar",
            "confirm": {
              "_": "??Est?? seguro que desea eliminar %d filas?",
              "1": "??Est?? seguro que desea eliminar 1 fila?"
            }
          },
          "multi": {
            "title": "M??ltiples Valores",
            "restore": "Deshacer Cambios",
            "noMulti": "Este registro puede ser editado individualmente, pero no como parte de un grupo.",
            "info": "Los elementos seleccionados contienen diferentes valores para este registro. Para editar y establecer todos los elementos de este registro con el mismo valor, haga click o toque aqu??, de lo contrario conservar??n sus valores individuales."
          },
          "error": {
            "system": "Ha ocurrido un error en el sistema (<a target=\"\\\" rel=\"\\ nofollow\" href=\"\\\"> M??s informaci??n<\/a>)."
          }
        },
        "decimal": ".",
        "emptyTable": "No hay datos disponibles en la tabla",
        "zeroRecords": "No se encontraron coincidencias",
        "info": "Mostrando _START_ a _END_ de _TOTAL_ entradas",
        "infoFiltered": "(Filtrado de _MAX_ total de entradas)",
        "lengthMenu": "Mostrar _MENU_ entradas",
        "stateRestore": {
          "removeTitle": "Eliminar",
          "creationModal": {
            "search": "Buscar",
            "button": "Crear",
            "columns": {
              "search": "Columna de b??squeda",
              "visible": "Columna de visibilidad"
            },
            "name": "Nombre:",
            "order": "Ordenar",
            "paging": "Paginar",
            "scroller": "Posici??n de desplazamiento",
            "searchBuilder": "Creador de b??squedas",
            "select": "Selector",
            "title": "Crear nuevo",
            "toggleLabel": "Incluye:"
          },
          "duplicateError": "Ya existe un valor con el mismo nombre",
          "emptyError": "No puede ser vac??o",
          "emptyStates": "No se han guardado",
          "removeConfirm": "Esta seguro de eliminar %s?",
          "removeError": "Fallo al eliminar",
          "removeJoiner": "y",
          "removeSubmit": "Eliminar",
          "renameButton": "Renombrar",
          "renameLabel": "Nuevo nombre para %s:",
          "renameTitle": "Renombrar"
        },
        "infoEmpty": "No hay datos para mostrar"
      },
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>

</html>



