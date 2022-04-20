<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login!</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>

    form {
    border: 3px solid #f1f1f1;
    }

    input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
    }

    button {
    background-color: #ADD8E6;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    }
    button:hover {
    opacity: 0.8;
    }

    .cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
    }
    
    .title_container{
        padding-left: 100px;
        padding-right: 100px;
    }

    .main_container {
    padding: 100px;
    padding-top: 150px;
    }

    .secondary_container {
    padding-left: 100px;
    padding-right: 100px;
    padding-bottom: 50px;
    }

    span.psw {
    float: right;
    padding-top: 16px;
    }

    @media screen and (max-width: 300px) {
    span.psw {
        display: block;
        float: none;
    }
    .cancelbtn {
        width: 100%;
    }
    }
</style>
</head>
<body>

<form method="post" action = "{{url('/login')}}">
    <div class="title_container">
        <h1 style="text-align:center">Welcome!</h1>
    </div>    
    <div class="main_container">
        <label for="username"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="username" required>

        <label for="password"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="password" required>

        <button type="submit" name = "login" value = "Login">Login</button>
    </div>

  <div class="secondary_container" style="background-color:#FFFFFF">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Need To <a href="#">Register?</a></span>
  </div>
</form>
