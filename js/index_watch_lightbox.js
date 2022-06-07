$('#link').click(function () {
    var src = 'https://www.youtube.com/watch?v=AqxLT5ko8gQ&t=1s';
    $('#stream1').modal('show');
    $('#stream1 iframe').attr('src', src);
});

$('#stream1 button').click(function () {
    $('#stream1 iframe').removeAttr('src');
});
