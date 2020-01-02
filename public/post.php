<?php include 'includes/header.php' ?>
<?php
    // Create a database instance (obcject)
    $db = new Database();
    // Get post ID  
    $id = mysqli_real_escape_string($db->link, $_GET['id']);
    // Create a query for posts
    $query = "SELECT * from posts where id='$id'";
    // Run query
    $posts = $db->select($query)->fetch_assoc();
    // Create a query for categories 
    $query = "SELECT * from categories";
    // Run query
    $categories = $db->select($query);
    
?>
<main role="main" class="container">
    <div class="row">
        <div class="col-md-8 blog-main">
            <div class="blog-post">
                <h2 class="blog-post-title"><?=$posts['title']?></h2>
                <p class="blog-post-meta"><?= formatDate($posts['date']); ?> by <a href="#"><?=$posts['author']?></a></p>
                <?=($posts['body'])?>
            </div><!-- /.blog-post -->
<?php include 'includes/footer.php' ?>
