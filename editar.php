<?php 
    include 'database.php';
    session_start();

    $session_id = $_SESSION['session'];
?>

<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>    
        <title>Editar</title>
    </head>
    <body style="background-color: gainsboro">
    <div class="page-header" align="center" >
        <h1>Editar</h1>
    </div>
    <div class="row">
        <div class="col-md-4">
        </div>
        <div class="col-md-4">
        <div class="panel panel-primary">
            <br>
            <div class="panel-body">
                <form action="#" method="POST">    
                    <?php  
                        if (isset($conn)) {

                            $read = $conn->prepare("SELECT id, name, about FROM category WHERE id = $session_id");
                            
                            $read->execute();
                            
                            foreach ($read as $row) {
                                print '<label>Id</label><input type="text" name="id" value="' . $row['id'] .'" readonly class="form-control"/>';
                                print '<label>Nome</label><input type="text" name="name" value="' . $row['name'] .'"required class="form-control"/>';
                                print '<label>Descrição:</label><input type="text" name="about" value="' . $row['about'] . '" required class="form-control"/>';
                            }
                        }
                    ?>                                                    
                    <br>
                    <input type="submit" name="editar" value="Salvar" class="btn btn-primary"/>
                    <a class="btn btn-secondary" href="dados.php" role="button">Voltar</a>
                </form>
            </div>
    </body>
</html>

<?php 
    if (isset($_POST['editar']) && isset($conn)) {

        $id = $_POST['id'];
        $name = $_POST['name'];
        $about = $_POST['about'];

        $update = $conn->prepare('UPDATE category set name = ?, about = ? where id = ?;');
        
        $update->bindParam(1, $name, PDO::PARAM_STR);
        $update->bindParam(2, $about, PDO::PARAM_STR);
        $update->bindParam(3, $id, PDO::PARAM_INT);
        
        $update->execute();
        
        $update->closeCursor();
        
        $conn = null;

        header('Location: dados.php');
    }
?>
