<?php 
    require_once '../../utils/helpers.php';
    require_once '../../utils/pdo.php';

    if(isset($_GET['id']) && $_GET['id'] !== '') {
        global $pdo;

        $query = 'DELETE FROM blog.categories WHERE id = ?;';
        $statement = $pdo->prepare($query);
        $statement->execute([$_GET['id']]);

    }
    
    redirect('admin/category/index.php');
?>