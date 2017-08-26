$(document).ready(function() {
    $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [ 'excel']
    });
    $("a.buttons-excel span").text("Export Excel");
    $("a.buttons-excel span").addClass('btn btn-primary');
    $("a.buttons-excel").removeClass('dt-button');
    $('div#example_filter label input').addClass('form-control');
    $('div#example_filter label input').css('width', '76%'); 
});