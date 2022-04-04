<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body{
            background-color: #fbfdac;
        }
        td{
            font-family: Arial;
        }
        table{
            background-color: #ace6fd;
            border-spacing: 25px;
        }
        .table-1{
            background-color: #ace6fd;
            border-spacing: 10px;
            padding-left: 15px;
            padding-right: 206px;
        }
        input{
            border: none;
        }
        .form-container{
            display: flex;
            justify-content: space-evenly;
        }
        #button-login{
            background-color: #adf59f; 
            border: none;
            height: 25px;
            width: 100px;
        }
        #button-login:hover{
            background-color: #cccccc; 
            border: none;
            height: 25px;
            width: 100px;
        }
        #button-kembali{
            background-color: #fdd7ac; 
            border: none;
            height: 25px;
            width: 100px;
        }
        #button-kembali:hover{
            background-color: #cccccc; 
            border: none;
            height: 25px;
            width: 100px;
        }
    </style>
</head>
<body>
    <p style="font-family:Arial; font-size:25px;" align="center">Login</p>
    <div class="form-container">
        <form action="prosesLogin.php" method="post">
            <table>
                <tr>
                    <td>Username</td>
                    <td><input type="text" name="usernameLogin" required/></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" name="passwordLogin" required/></td>
                </tr>
                <tr>
                    <!-- <td></td> -->
                    <td><input type="submit" name="button-login" value="Login" id="button-login"/></td>
                    <!-- <td><input type="submit" name="button-kembali" value="Kembali" id="button-kembali"/></td> -->
                </tr>            
            </table>    
        </form>
    </div>
    <div class="form-container">
        <table class="table-1">
            <tr>
                <td><a href="welcome.php"><button id="button-kembali">Kembali</button></a></td>
            </tr>         
        </table> 
    </div>    
</body>
</html>
