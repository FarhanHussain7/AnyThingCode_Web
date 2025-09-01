<div class="container">
    <h1 class="heading">Sign Up</h1>

    <form action="./server/signup.php" method="post">
  <div class="col-6 offset-sm-3 margin-bottom-15" >
    <label for="username" class="form-label">Title </label>
    <input type="text" class="form-control" id="username" name="title" placeholder="enter your name">
</div>

  <div class="col-6 offset-sm-3 margin-bottom-15">
    <label for="email" class="form-label">User Email</label>
    <input type="text" class="form-control" id="email" name="email" placeholder="enter your email">
</div>

  <div class="col-6 offset-sm-3 margin-bottom-15">
    <label for="password" class="form-label">User Password</label>
    <input type="password" class="form-control" id="password" name="password" placeholder="enter your password">
</div>

  <div class="col-6 offset-sm-3 margin-bottom-15">
    <label for="address" class="form-label">User Address</label>
    <input type="text" class="form-control" id="address" name="address" placeholder="enter your address">
</div>
<div class="col-6 offset-sm-3 margin-bottom-15">
  <button type="submit" name="ask" class="btn btn-primary">Okay</button>
</div>
</form>
</div>