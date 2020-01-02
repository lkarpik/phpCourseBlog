<?php include 'includes/header.php'; ?>  

<form method="POST" action="add_category.php">
  <fieldset>    
    <div class="form-group">
      <label>Category name</label>
      <input name="category" type="text" class="form-control" placeholder="Enter post title">
    </div>
    
  <fieldset>
  <div class="form-group">  
    <input name="submit" type="submit" class="btn btn-primary" value="Add category">
    <a href="index.php" class="btn btn-dark">Cancel</a>
    
  </div>
  </fieldset>
</form>

<?php include 'includes/footer.php'; ?>  