<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <style>
        body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 20px;
    background-color: #fff;
}

h2 {
    color: #333;
}

form {
    background: #f1f2f5;
    padding: 20px;
    border-radius: 5px;
   
}

label {
    display: block;
    margin-bottom: 5px;
}

input {
    width: 70%;
    padding: 10px;
    margin-bottom: 10px;
}

button {
    background: #5cb85c;
    color: #fff;
    border: none;
    padding: 10px;
    cursor: pointer;
}

button:hover {
    background: #4cae4c;
}

    </style>

</head>
<body>
    <center>
        <div class="reg_form">
            <h1>REGISTRATION FORM</h1>
            <h3>Fill Registration form</h3>
            <form action="registration_codes.php" method="post">
                <p>User Name</p>
                <input type="text" name="username" id="" placeholder="Enter User Name" required>
                <p>Password</p>
                <input type="password" name="password" id="" placeholder="Enter Password" required> <BR> </BR>
                <input type="submit" name="regist" id="" value="Register">
                <p>If You Have Account Login <a href="index.php"> @click Here</a></p>

            </form>
        </div>
    </center>
</body>
</html>