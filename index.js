$(document).ready(function(){
    
    $("#Forms").hide();
    $("#MyForm").hide();

    $('#Mybtn').click(function(){
        $("#Forms").hide();
        $("#MyForm").toggle();
    });

    $('#btn1').click(function(){
         $("#MyForm").hide();
        $("#Forms").toggle();
    });


});


