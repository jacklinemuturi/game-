    <?php include_once "header.php" ?> 
<body>
    <h1 class="text-lg-center mt-5" style ="color:blue;">LOGIN</h1>
    <div class="row">
        <div class="col-6 col-md-3"></div>
        <div class="col-6 col-md-6" style="background-color:gainsboro">
        <form action="" method="$_POST">
            <div class="form-group">
            <div>
                <label for="Username">Username</label>
                <input type="text" class="form-control" id="uname" placeholder="Enter Username">
            </div><br>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted"></small>
            </div>
                <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
           
        </div>
         </form>
     <div class="col-6 col-md-3"></div>
     <button type="submit" class="btn btn-primary" style="width: 100%;margin-right:150px">log in</button>
     <h6 style="margin-left:150px">Dont have an account?<a href = "signup.php">signup</a></h6>
     <p  style="margin-left:280px">OR</p>
     <a href = "forgot.php" style="margin-left:220px">forgot password?</a>
    </div>


</body>
</html>