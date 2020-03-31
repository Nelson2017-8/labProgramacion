$(document).ready(function() {
    $("form#consultar").submit(function(e) {
        e.preventDefault();

    });

    $("#search").keyup(function(){
        _this = this;
             // Show only matching TR, hide rest of them
           $.each($("#datos tbody tr"), function() {
            if($(this).text().toLowerCase().indexOf($(_this).val().toLowerCase()) === -1)
                $(this).hide();
            else
                $(this).show();
        });
    });
});