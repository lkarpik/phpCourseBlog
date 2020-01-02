<?php include 'includes/header.php'; ?>  

<form method="POST" action="add_post.php">
  <fieldset>    
    <div class="form-group">
      <label>Post title</label>
      <input name="title" type="text" class="form-control" placeholder="Enter post title">
    </div>
    
    <div class="form-group">
      <label for="exampleTextarea">Body</label>
      <textarea class="form-control" name="body" placeholder="Post text" rows="3"></textarea>
    </div>

    <div class="form-group">
      <label for="exampleSelect1">Category</label>
      <select class="form-control" name="category" id="exampleSelect1">
        <option>Cat 1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
      </select>
    </div>
    <div class="form-group">
      <label>Author</label>
      <input name="name" type="text" class="form-control" placeholder="Enter author name">
    </div>
  </fieldset>
  <fieldset>
  <div class="form-group">  
    <input name="submit" type="submit" class="btn btn-primary" value="Submit">
    <a href="index.php" class="btn btn-dark">Cancel</a>
  </div>
  </fieldset>
</form>

<?php include 'includes/footer.php'; ?>  