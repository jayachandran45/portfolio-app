<?php
$email = $_POST["inputemail"];
$pass = $_POST["inputpassword"];
$result;
if($email == "jai@45" && $pass == "jaisharma"){
  $result = 1 ;
}
else{
  $result = 0 ;
}
if($result){
  echo("<h1>Login success</h1>");
}
else{
?>



<main class="form-signin w-100 m-auto text-center" >
  <form method="post" action="index.php">
    <img class="mb-4" src="assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

    <div class="form-floating">
      <input type="email" class="form-control" id="floatingInput" name="inputemail" placeholder="name@example.com">
      <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="floatingPassword" name="inputpassword"  placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>

    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
    <p class="mt-5 mb-3 text-muted">© 2017–2022</p>
  </form>
</main>
<?}?>



