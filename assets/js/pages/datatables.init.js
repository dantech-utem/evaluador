/*
Template Name: Qovex - Admin & Dashboard Template
Author: Themesbrand
Website: https://themesbrand.com/
Contact: themesbrand@gmail.com
File: Datatables
*/

$(document).ready(function() {
    $('#datatable').DataTable({
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.16/i18n/Spanish.json"
        }});

    //Buttons examples
    var table = $('#datatable-buttons').DataTable({
        lengthChange: false,
        buttons: ['copy', 'excel', 'pdf', 'colvis']
    });

    table.buttons().container()
        .appendTo('#datatable-buttons_wrapper .col-md-6:eq(0)');
    $("#datatable_length select").addClass('form-select form-select-sm');
    } );