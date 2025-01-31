//insert section starts here

$(".btn").click(function () {

    var name = $("#name").val();
    var email = $("#email").val();
    var pass = $("#pass").val();
    $.ajax({
        method: "POST",
        url: "insert.php",
        data:{name:name,email:email,pass:pass},
        success: function (data) {
            read(data);
            // $("#reload").html(data)
        }
        
    }); 
});

//insert section ends here





//reading data section starts here

function read() {
    var read = "";
    $.ajax({
        url: "read.php",
        method: "POST",
        data: { read: read },
        success: function (data) {
            $("#tbody").html(data);
        }
    });
}

//reading data section ends here