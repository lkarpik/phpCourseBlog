<?php include 'includes/header.php'; ?>  

<form method="POST" action="edit_category.php">
  <fieldset>    
    <div class="form-group">
      <label>Category name</label>
      <input name="category" type="text" class="form-control" placeholder="Enter post title">
    </div>
    
  <fieldset>
  <div class="form-group">  
    <input name="submit" type="submit" class="btn btn-primary" value="Submit changes">
    <a href="index.php" class="btn btn-dark">Cancel</a>
    <input name="delete" type="submit" class="btn btn-danger float-right" value="Delete category">
  </div>
  </fieldset>
</form>

<?php include 'includes/footer.php'; ?>  