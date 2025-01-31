$(".btn").click(function () {

    var name = $("#name").val();
    var email = $("#email").val();
    var pass = $("#pass").val();
    $.ajax({
        method: "POST",
        url: "insert.php",
        data:{name:name,email:email,pass:pass},
        success: function (data) {
            alert(data);
            // $("#reload").html(data)
        }
        
    }); 
});