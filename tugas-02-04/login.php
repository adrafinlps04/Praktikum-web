<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adravin Tugas_02_04</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
    <body>

        
        <form method="POST" action="" style="padding-left:35% ; padding-right:35% ; padding-top:175px">
        <center><h3>FORM LOGIN</h3></center>
        <br>
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                <input type="email" name="username" class="form-control" id="inputEmail3" placeholder="Email">
                </div>
            </div>
            <br>
            <div class="form-group row">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                <input type="password" name="password"  class="form-control" id="inputPassword3" placeholder="Password">
                </div>
            </div>
            <br>
            <div class="form-group row">
                <div class="col-sm-10">
                <button type="submit" class="btn btn-primary" name="login">Sign in</button>
                </div>
            </div>
            <hr>

            <?php
            session_start();
            $username= isset($_POST["username"]) ? $_POST["username"] : "";
            $password= isset($_POST["password"]) ? $_POST["password"] : "";

            $user = 'adravin18@mhs.akba.ac.id';
            $pass = '20182205112';

                if (!empty($username) and !empty($password)) {
                    if ($username == $user and $password ==$pass) {
                        $_SESSION['login']=true;
                        $_SESSION['username']=$user;
                        header('Location: dashboard.php');
                    }
                    else {
                        echo " <div class='alert alert-danger' role='alert'>
                                Username Atau Password Anda Salah
                                </div>";
                    }
                }
                
                
            ?>
        </form>
        
    </body>
</html>