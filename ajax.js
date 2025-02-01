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
//
//
//
//
//
//
//
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
//
//
//
//
//
//
//
//deleting data section starts here
function Delete(userId){
    $con = confirm("Are You Sure?");
    if ($con == true) {
        $.ajax({
            url: "delete.php",
            method: "POST",
            data: { userId: userId },
            success: function (data) {
                read();
            }
    
        });
    }
}
//deleting data section ends here
//
//
//
//
//
//
//edit data starts here
function Edit(userId) {
    var name = $("#name").val();
    var email = $("#email").val();
    var pass = $("#pass").val();

    $.ajax({
        url: "update.php",
        method: "GET",
        data: {
            name:name, email:email,pass:pass,userId:userId
        },
        success: function (data) {
            $("body").html(data);
        }
    });
}

//edit data ends here

//
//
//
//
//
//update query starts
function UPDATE_DATA(userId) {
    var name = $("#name").val();
    var email = $("#email").val();
    var pass = $("#pass").val();
    $.ajax({
        url: "updateQuery.php",
        method: "GET",
        data: { name: name, email: email, pass: pass, userId: userId },
        success: function (data) {
            alert(data);
        }
    });
}
//update query ends
//
//
//
//
//
//read data start
$(".read").click(function () {
    var read = "";
    $.ajax({
        url: "read.php",
        method: "POST",
        data: { read: read },
        success: function (data) {
            $("#tbody").html(data);
        }
    });
});
//read data end
//
//
//
//
//
//
//home starts
function home() {
    var read = "";
    $.ajax({
        url: "index.php",
        method: "POST",
        data: { read: read },
        success: function (data) {
            $("body").html(data);
        }
    });
}
//home ends