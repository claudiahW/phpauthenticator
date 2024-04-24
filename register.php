<?php require "includes/header.php"; ?>


<main class="form-signin w-50 m-auto">
<form>
    <h1 class="h3 mt-5 fw-normal text-center">Please Register</h1>
    <div class="form-floating">
        <input type="email" class="form-control" id="floatingInput" placeholder="name@abc.com">
        <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating">
        <input type="password" class="form-control" id="floatingPassword" placeholder="..............">
        <label for="floatingInput">Password</label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit" >Sign in</button>
    <h6 class="mt-3">Already have an account? <a href="login.php">Login</h6>
    
</form>
</main>

<?php require "includes/footer.php"; ?>