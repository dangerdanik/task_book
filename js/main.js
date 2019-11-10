$(document).ready(function () {
    $('#dtBasicExample').DataTable({
        "ordering": true, // false to disable sorting (or any other option)
        "paging": true,
        "lengthMenu": [[3, 5, 10, -1], [3, 5, 10, "All"]]
    });
    $('.dataTables_length').addClass('bs-select');
});



$(document).on('change', '[type="checkbox"]', function () {

    let val = $(this).val();
   // alert(val);

    $.ajax({
        url: '/admin',
        type: 'POST',
        data: 'val=' + val,
        success: function (res) {

            location.reload();
        }
    });

});
