<?php include 'Conexao.php' ?>

<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>    
        <title>Login</title>
    </head>
    <body style="background-color: gainsboro">
    <div class="page-header" align="center" >
        <h1>Tela de Login</h1>
    </div>
    <div class="row">
        <div class="col-md-4">
        </div>
        <div class="col-md-4">
        <div class="panel panel-primary">
            <br>
            <div class="panel-body">
                <form action="#" method="POST">      
                    <label>Login:</label><input type="text" name="username" required class="form-control"/>          
                    <label>Senha:</label><input type="password" name="password" required class="form-control"/>      
                    <br>
                    <input type="submit" name="enter" value="Entrar" class="btn btn-primary"/>
                </form>
            </div>
    </body>
</html>

<?php 
    if (isset($_POST['enter']) && isset($conn)) {

        $username = $_POST['username'];
        $password = $_POST['password'];

        if($username != null && $password != null) {

            $read = $conn->prepare('SELECT * FROM login WHERE username = ? and password = ?');
            $read->bindParam(1, $username, PDO::PARAM_STR);
            $read->bindParam(2, $password, PDO::PARAM_STR);

            $read->execute();

            if($read->rowCount() > 0) {

                $conn = null;
                header('Location: src/dashboard.php');
            } else {
                print "<script>alert('Login ou senha invalida!')</script>";
            }
        }
    }
?>