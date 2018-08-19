$(document).ready(function() {
    // Data Table
    $('#detailedTable').DataTable();

    // Carousel Change Image Speed
    $(function(){
        $('.carousel').carousel({
            interval: 1800
        });
    });

    // Tooltip
    $('[data-toggle="tooltip"]').tooltip({
        placement:'top'
    });

    // Change Sort Text
    $('#sortName').click(function() {
        document.getElementById("sortDdown").innerHTML = "Name";
        $('#sortName').addClass('active');
        $('#sortHP').removeClass('active');
    });
    $('#sortHP').click(function() {
        document.getElementById("sortDdown").innerHTML = "Horse Power";
        $('#sortHP').addClass('active');
        $('#sortName').removeClass('active');
    });

    // Change Views
    $('#detView').click(function(e) {
        e.preventDefault();
        $('#cardView').removeClass('active');
        $('#detView').addClass('active');
        $('#detLayout').css('display', 'block');
        $('#cardLayout').css('display', 'none');
        $('#searchBar').css('display', 'none');
        $('#sortSelect').css('display', 'none');
        $('body').css('background', '#94B5B8');
    });
    $('#cardView').click(function(g) {
        g.preventDefault();
        $('#detView').removeClass('active');
        $('#cardView').addClass('active');
        $('#cardLayout').css('display', 'block');
        $('#searchBar').css('display', 'block');
        $('#detLayout').css('display', 'none');
        $('#sortSelect').css('display', 'block');
        $('body').css('background', 'linear-gradient(to bottom, #0f2027, #203a43, #2c5364)');
    });
    $('#del').click(function(s) {
        s.preventDefault();
        swal({
            title: "Are you sure?",
            text: "You will not be able to recover Energy Sun.",
            type: "error",
            showCancelButton: true,
            confirmButtonClass: "btn-danger",
            confirmButtonText: "Yes, delete it!",
            closeOnConfirm: false
        },
        function(){
            swal("Deleted!", "Energy Sun has been deleted.", "success");
        });
    });
    $('#delCard').click(function(q) {
        q.preventDefault();
        swal({
            title: "Are you sure?",
            text: "You will not be able to recover Energy Sun.",
            type: "error",
            showCancelButton: true,
            confirmButtonClass: "btn-danger",
            confirmButtonText: "Yes, delete it!",
            closeOnConfirm: false
        },
        function(){
            swal("Deleted!", "Energy Sun has been deleted.", "success");
        });
    });
});