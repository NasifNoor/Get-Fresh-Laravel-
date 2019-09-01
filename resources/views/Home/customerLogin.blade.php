<!DOCTYPE html>
<html>
<head>
  <title>Log-in page</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
  <div>
    {{session('msg')}}
  </div>
  <div class="h4">
    <b style="float: left;">LogIn Page</b>
    <b style="float: right;"> <a class="back" href="/">back</a></b>
    <!-- <a href="Login.html"   style="float: right;">
    <b>Login</b>
    </a>
    <b style="float: right;">&nbsp &nbsp;</b>
    <a href="register.html" style="float: right;">
    <b>Register</b>
    </a>-->
    </div><br><br>
  <div class="form"> 
    <form method="post" style="height: 350px">
      User Type: <br>
        <select class="space" type="text" name="userType">
          <option value="customer">Customer</option>
          <option value="admin">Admin</option>  
          <option value="employee">Employee</option>  
          <option value="supplier">Supplier</option>  
        </select> <br>
      Username :<br><input class="space" type="text" name="username" placeholder="{{ $errors->first('username')}}" ><br>
      Password :<br><input class="space" type="password" name="password" placeholder="{{ $errors->first('password')}}"><br><br>
      <input type="submit" id="submit" name="" value="Submit">
    </form>
  </div>

</body>
</html>