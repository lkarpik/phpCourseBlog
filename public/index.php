<?php include 'includes/header.php' ?>
<?php
  // Create a database instance (obcject)
  $db = new Database();
  // Create a query for posts
  $query = "SELECT * from posts";
  // Run query
  $posts = $db->select($query);
  // Create a query for categories 
  $query = "SELECT * from categories";
  // Run query
  $categories = $db->select($query);
?>
    <main role="main" class="container">
        <div class="row">
          <div class="col-md-8 blog-main">
            <h3 class="pb-3 mb-4 font-italic border-bottom">
              Latest posts
            </h3>
<?php if($posts) : ?>
  <?php while($row = $posts->fetch_assoc()) : ?>
          <div class="blog-post">
            <h2 class="blog-post-title"><?=$row['title']?></h2>
            <p class="blog-post-meta"><?= formatDate($row['date']); ?> by <a href="#"><?=$row['author']?></a></p>
            <?=shortenText($row['body'])?>
            <a href="post.php?id=<?= urlencode($row['id'])?>" class="btn btn-info btn-block">Read more</a>
          </div><!-- /.blog-post -->
  <?php endwhile; ?>
          
<?php else : ?>
  <p> There are no posts yet </p> 

<?php endif; ?>



<!--
          <nav class="blog-pagination">
            <a class="btn btn-outline-primary" href="#">Older</a>
            <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
          </nav>
-->

<?php
include 'includes/footer.php';
?>
