<?php

    require_once './vendor/autoload.php';

    use ExemploPDOMySQL\MySQLConnection;
    $bd = new MySQLConnection();
    
    $genero = null;

    if($_SERVER['REQUEST_METHOD'] == 'GET') {
        $comando =$bd->prepare('SELECT * FROM generos WHERE id = :id');
        $comando->execute([':id' => $_GET['id']]);
        $genero = $comando->fetch(PDO::FETCH_ASSOC);
    } else {
        $comando = $bd->prepare('DELETE FROM generos WHERE id = :id');
        $comando->execute([':id' => $_POST['id']]);

        header('Location:/index.php');
    }

$_title = 'Deletar Gênero';

?>
<?php include('./includes/header.php') ?>

        <h1>Deletar</h1>
        <p>Tem certeza que quer excluir o gênero <?= $genero['nome'] ?> ?</p>
        
        <form action="delete.php" method= "post">
            <input type="hidden" name="id" value="<?= $genero['id'] ?>"/>
            <a class="btn btn-secondary" href="index.php">Voltar</a>
            <button class="btn btn-danger"type="submit">Excluir</button>
        </form>
<?php include('./includes/footer.php') ?>