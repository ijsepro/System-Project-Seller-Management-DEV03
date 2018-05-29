$("#id, #name, #nic,#Tel,#address").focus(function(){
    $(this).select();
});

document.getElementById("id").focus();

function numinput1(e){
    var keyCode = (e.keyCode ? e.keyCode : e.which);
    if (keyCode > 47 && keyCode < 58 ){
        e.preventDefault();
    }
}
$(document).ready(function(){
    $('#name').keypress(function(e) {
        numinput1(e);
    });
})


function numinput2(e){
    var keyCode = (e.keyCode ? e.keyCode : e.which);
    if (keyCode < 47 || keyCode > 58 ){
        e.preventDefault();
    }
}
$(document).ready(function(){
    $('#nic').keypress(function(e) {
        numinput2(e);
    });
})



function numinput2(e){
    var keyCode = (e.keyCode ? e.keyCode : e.which);
    if (keyCode < 47 || keyCode > 58 ){
        e.preventDefault();
    }
}
$(document).ready(function(){
    $('#Tel').keypress(function(e) {
        numinput2(e);
    });
})
$(document).ready(function(){
    $("#id").val("S-")
    $("#id").focus();

});



$("#btnRegister").click(function(){


    var id = $("#id").val();
    var name = $("#name").val();
    var nic = $("#nic").val();
    var telephone = $("#tel").val();
    var address = $("#address").val();



    if (name.trim().length === 0){
        $("#id").focus();
        $("#id").addClass("error");
        return;
    }

    if (address.trim().length === 0){
        $("#address").focus();
        $("#address").addClass("error");
        return;
    }

    if (address.trim().length === 0){
        $("#name").focus();
        $("#name").addClass("error");
        return;
    }

    if (address.trim().length === 0){
        $("#tel").focus();
        $("#tel").addClass("error");
        return;
    }

    var regExp = /^\d{9}$/;
    if (!regExp.test(nic)){
        $("#nic").focus();
        $("#nic").addClass("error");
        return;
    }

    var id = generateId();


    $(".recycle").click(function(){
        var row = $(this).parents("tr");
        row.fadeOut(500);
        setTimeout(function(){
            $(row).remove();
            displayTableFooter();
        },600);

    });

    $("#id").val("");
    $("#name").val("");
    $("#nic").val("");
    $("#tel").val("");
    $("#address").val("");

    $("#id").focus();

});

$("#id, #name, #nic,#Tel,#address").keyup(function(){
    if ($(this).val().trim().length > 0){
        $(this).removeClass("error");
    }

    $("#btnadd").click(function(){

        var id = $("#id").val();
        var name = $("#name").val();
        var nic = $("#nic").val();
        var tele = $("#tel").val();
        var address = $("#address").val();





        if (id.trim().length === 0){
            $("#id").focus();
            $("#id").addClass("error");
            return;
        }

        if (name.trim().length === 0){
            $("#name").focus();
            $("#name").addClass("error");
            return;
        }

        var regExp = /^\d{9}[Vv]/;
        if (!regExp.test(nic)){
            $("#nic").focus();
            $("#nic").addClass("error");
            return;
        }

        var regtel=/\d{3}-\d{7}$/;
        if (!regtel.test(tele)){
            $("#Tel").focus();
            $("#Tel").addClass("error");
            return;
        }

        if (address.trim().length === 0){
            $("#address").focus();
            $("#address").addClass("error");
            return;
        }

    });



});

