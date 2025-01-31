<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AJAX-CRUD</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <div class="container">
        <h1>AJAX CRUD OPERATION</h1>
        <input id="name" type="text" placeholder="Enter Name"><br>
        <input id="email" type="email" placeholder="Enter Email"><br>
        <input id="pass" type="text" placeholder="Enter Password"><br>
        <button class="btn">Insert Data</button>

        <h3>Reading Data from Database</h3>
        <table>
            <thead>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Action</th>
                <tbody id="tbody"> 
                    
                </tbody>
            </thead>

        </table>
    </div>
    <div id="reload"></div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="ajax.js"></script>
</body>
</html>