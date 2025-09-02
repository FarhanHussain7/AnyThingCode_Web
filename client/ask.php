<div class="container">
    <h1 class="heading">Ask the Question</h1>

    <form action="./server/signup.php" method="post">
  <div class="col-6 offset-sm-3 margin-bottom-15" >
    <label for="title" class="form-label">Title </label>
    <input type="text" class="form-control" id="username" name="title" placeholder="enter your Question">
</div>

  <div class="col-6 offset-sm-3 margin-bottom-15">
    <label for="title" class="form-label">Description</label>
    <input type="text" class="form-control" id="description" name="description" placeholder="description">
</div>

  <div class="col-6 offset-sm-3 margin-bottom-15">
    <label for="password" class="form-label">Category</label>
    <?php
        include("category.php");
    ?>
    </select>
</div>

<div class="col-6 offset-sm-3 margin-bottom-15">
  <button type="submit" name="ask" class="btn btn-primary">Ask question</button>
</div>
</form>
</div>