</div><!-- /.blog-main -->

<aside class="col-md-4 blog-sidebar">
  <div class="p-3 mb-3 bg-light rounded">
    <h4 class="font-italic">About</h4>
    <p class="mb-0"><?= $site_description ?></p>
  </div>

  <div class="p-3">
    <h4 class="font-italic">Content</h4>
      <?php if ($categories) : ?>
        <ol class="list-unstyled mb-0">
        <?php while ($row = $categories->fetch_assoc()) : ?>
          <li><a href="posts.php?category=<?=$row['id']?>"><?=$row['name']?> </a></li>
        <?php endwhile; ?>
      <?php else :?>
        <p> No categories yet </p>
      <?php endif ?>
    </ol>
  </div>

</aside><!-- /.blog-sidebar -->

</div><!-- /.row -->
</main><!-- /.container -->
</div> <!-- /.container -->

    <footer class="blog-footer">
      <p>PHP Test Blog &copy</p>
      <p>
        <a href="#">Back to top</a>
      </p>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-slim.min.js"><\/script>')</script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrapjs"></script>
    <script src="js/vendor/holder.min.js"></script>
    <script>
      Holder.addTheme('thumb', {
        bg: '#55595c',
        fg: '#eceeef',
        text: 'Thumbnail'
      });
    </script>
  </body>
</html>