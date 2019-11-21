<?php include_once "header.php";?>

<body style ="color:white">
    <h1 class="text-md-center mt-4" style ="color:blue;">SIGN UP</h1>
        <div class="form-group">    
    <div class="row">
        <div class="col-1"></div>
        <div class="col-5" style = "background-color:gainsboro">
    <form action="" method="$_POST">
        <div class="form-group">
        <div>
            <label for="FirstName">FirstName</label>
            <input type="text" class="form-control" id="Fname" placeholder="Enter Your FirstName">
        </div><br>
        <div>
            <label for="Username">Username</label>
            <input type="text" class="form-control" id="uname" placeholder="Enter Username">
        </div><br>
            <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        </div>
    </div>
        <div class="col-5" style = "background-color:gainsboro">
        <div class="form-group">
            <label for="LastName">LastName</label>
                <input type="text" class="form-control" id="lname"  placeholder="Enter Your LastName">
                <small id="lname" class="form-text text-muted"></small>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted"></small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">confirm Password</label>
                <input type="retypepassword" class="form-control" id="exampleInputPassword1" placeholder="confirm Password">
            </div>
            <div id="btn">
            </div>
    </div>
    <div class="col-1"></div>
            </form>
            <div class="col-6 col-md-4"></div>
     <button type="submit" class="btn btn-primary" style="width: 83%;margin-left:113px">log in</button> 
    </form>
      <!-- <button type="submit" class="btn btn-primary" style="width: 80%;margin-left:130px">Submit</button>       -->
</div>

    
</body>
</html>