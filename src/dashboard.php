<?php
error_reporting(E_ALL);
ini_set('display_errors', true);

spl_autoload_register(function($class) {
    if (file_exists("$class.php")) {
        require_once "$class.php";
        return true;
    }
});
?>
<!DOCTYPE html>
<html lang='pt-br'>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>    
        <title>Projeto PHP</title>
    </head>
    <body>

        <?php
        if ($_GET) {
            $controller = isset($_GET['controller']) ? ((class_exists($_GET['controller'])) ? new $_GET['controller'] : NULL ) : null;
            $method     = isset($_GET['method']) ? $_GET['method'] : null;
            if ($controller && $method) {
                if (method_exists($controller, $method)) {
                    $parameters = $_GET;
                    unset($parameters['controller']);
                    unset($parameters['method']);
                    call_user_func(array($controller, $method), $parameters);
                } else {
                    echo "Método não encontrado!";
                }
            } else {
                echo "Controller não encontrado!";
            }
        } else {
            print '<main role="main">';
            print   '<div class="jumbotron">';
            print     '<a href="index.php" class="btn btn-secondary">Sair</a>';
            print     '<div class="container">';
            print       '<h1 class="display-3">Bem vindo</h1>';
            print       '<p>Dashboard Simples</p>';
            print     '</div>';
            print   '</div>';
            print   '<div class="container">';
            print      '<div class="row">';
            print        '<div class="col-md-4">';
            print          '<h2>Categorias</h2>';
            print          '<p><a class="btn btn-secondary" href="?controller=CategoryController&method=listar" role="button">Detalhes</a></p>';
            print        '</div>';
            print        '<div class="col-md-4">';
            print          '<h2>Login</h2>';
            print          '<p><a class="btn btn-secondary" href="?controller=LoginController&method=listar" role="button">Detalhes</a></p>';
            print        '</div>';
            print        '<div class="col-md-4">';
            print          '<h2>Metodo de Pagamento</h2>';
            print          '<p><a class="btn btn-secondary" href="?controller=PaymentMethodController&method=listar" role="button">Detalhes</a></p>';
            print        '</div>';
            print      '</div>';
            print   '</div>';
            print '</main>';
        }
        ?>
    </body>
</html>