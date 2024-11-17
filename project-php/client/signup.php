<div class="container">
	<h1 class="text-center">Signup</h1>

	<form method="post" 
	 action="./server/requests.php">
  <div class="sm-3 col-6 offset-sm-3">
    <label for="username" class="form-label">User Name</label>
    <input type="text" name="name" class="form-control mb-3" id="username" placeholder="enter user Name">
  </div>

	<div class="sm-3 col-6 offset-sm-3">
    <label for="email" class="form-label">User Mail</label>
    <input type="text" name="email" class="form-control mb-3" id="email" placeholder="enter user mail">
  </div>

	<div class="sm-3 col-6 offset-sm-3">
    <label for="password" class="form-label">User Password</label>
    <input type="password" name="password" class="form-control mb-3" id="password" placeholder="enter your password ">
  </div>

	<div class="sm-3 col-6 offset-sm-3">
    <label for="address"  class="form-label">User Address</label>
    <input type="text" name="address" class="form-control mb-3" id="address" placeholder="enter user address">
  </div>

	<div class="sm-3 col-6 offset-sm-3">
	<button type="submit" name="signup" class="btn btn-primary">SignUp</button>
	</div>
 

</form>

</div>