$(document).ready(function () {
    // the "href" attribute of the modal trigger must specify the modal ID that wants to be triggered
    $('#edit_class').modal();
    $('#registry_excuse').modal();
    $('#lista_por_clase').modal();
    $('#change_pass').modal();
    $('#registry_class').modal();
    $('#excusa').modal();

    $('#modal3').modal({
        dismissible: true
    });
    
    $("#listado").on('click', () => {
        $('#modal3').modal('open');
    });
    $('.clickeable').click(function () {
        $('#modal3').modal('close');
    });
    $(".button-collapse").sideNav();
});
