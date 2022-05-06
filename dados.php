<?php 
    session_start();
    include 'database.php' 
?>

<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>    
        <title>Categorias</title>
    </head>
    <body style="background-color: #e9ecef">
        <div class="page-header" align="center" >
            <h1>Lista de Categorias</h1>
        </div>
        <div align="center" >
            <a href="dashboard.php" class="btn btn-secondary"> Voltar </a>
            <a href="adicionar.php" class="btn btn-primary"> Adicionar </a>
        </div>
        <div class="container">
            <table class="table" style="margin: 30px;">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Descrição</th>
                        <th scope="col">Ações</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    if (isset($conn)) {

                        $read = $conn->query("SELECT id, name, about FROM category");
                        
                        $read->execute();
                        
                        foreach ($read as $row) {
                            print '<tr>';
                            print ' <th scope="row">' . $row['id'] . '</th>';
                            print ' <td>' . $row['name'] . '</td>';
                            print ' <td>' . $row['about'] . '</td>';                                      
                            print ' <td>';
                            print '  <div class="row">';
                            print '   <div class="col-md-2">';
                            print '    <form action="#" method="POST">';
                            print '     <button type="submit" name="editar" value="' . $row['id'] . '" class="btn btn-secondary">Editar</button>';
                            print '    </form>';                                 
                            print '   </div>';
                            print '   <div class="col-md-1">';
                            print '    <form action="#" method="POST">';
                            print '     <button type="submit" name="excluir" value="' . $row['id'] . '" class="btn btn-danger">Excluir</button>';
                            print '    </form>';
                            print '   </div>';
                            print '  </div>';       
                            print ' </td>';  
                            print '</tr>';
                        }           
                        $read->closeCursor();         
                    } 

                    if (isset($_POST['excluir'])) {

                        $id = $_POST['excluir'];
        
                        $update = $conn->prepare('delete from category where id = ?;');

                        $update->bindParam(1, $id, PDO::PARAM_INT);
                        
                        $update->execute();
                        
                        $update->closeCursor();                   

                        header('Location: dados.php');
                    }

                    if (isset($_POST['editar'])) {

                        $_SESSION['session'] = $_POST['editar'];

                        header('Location: editar.php');
                    }  
                ?>
                </tbody>
            </table>     
        </div>         
    </body>
</html>    
