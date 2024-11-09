<?php
require 'partials/head.php';
?>
<form class="mx-5" action="/admin" method="post" enctype="multipart/form-data">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Product Name</label>
    <input name="productname" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Price</label>
    <input name= "price" type="text" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="form-floating">
  <label for="floatingTextarea2">Description</label>
  <textarea name="description" class="form-control" placeholder="Description" id="floatingTextarea2" style="height: 100px"></textarea>
</div>
  <div class="input-group mb-3">
  <label class="input-group-text" for="inputGroupFile01">Upload Image</label>
  <input name="imageupload" type="file" class="form-control" id="inputGroupFile01">
</div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<?php
require 'partials/footer.php';
?>