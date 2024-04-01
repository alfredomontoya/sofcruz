console.log($('#ci').val());

if ($('#ci').val()) $('#ci').addClass('active');
/*
$(document).ready(function(){
    $('a').click(function(e){
        e.preventDefault();
        var href = $(this)[0].href + "&ci=" + $('#ci').val();
        window.open(href, '_self');
        //console.log(href);
        //alert('enviando...');
        return false;
    });
});
*/
/**DATATABLE */
$('.datatable-index').DataTable( {
    footerCallback: function (row, data, start, end, display) {
        var api = this.api();

        // Remove the formatting to get integer data for summation
        var intVal = function (i) {
            return typeof i === 'string' ? i.replace(/[\$,]/g, '') * 1 : typeof i === 'number' ? i : 0;
        };

        // Total over all pages
        total = api
            .column(3)
            .data()
            .reduce(function (a, b) {
                return intVal(a) + intVal(b);
            }, 0);

        // Total over this page
        pageTotal = api
            .column(3, { page: 'current' })
            .data()
            .reduce(function (a, b) {
                return intVal(a) + intVal(b);
            }, 0);

        // Update footer
        $(api.column(3).footer()).html('$' + pageTotal + ' ( $' + total + ' total)');
    },
    "pageLength": 10,
    "lengthChange": false,
    "language": {
        "search": "Buscar",
        "lengthMenu": "Mostrar _MENU_ registros por página",
        "info": "Mostrando página _PAGE_ de _PAGES_",
        "paginate" : {
            "previous" : "Anterior",
            "next": "Siguiente",
            "first": "Primero",
            "last" : "Ültimo"
        },
        select: true
    }
});
