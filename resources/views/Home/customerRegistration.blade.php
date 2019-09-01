<!DOCTYPE html>
<html>
    <head>
        <title>Registration</title>
        <link rel="stylesheet" href="css/styles.css">
    </head>
    <body>
          <div>
            {{session('msg')}}
          </div>
        <div class="h4">
			<b style="float: left;">Registration Page</b>
			<b style="float: right;"> <a class="back" href="/">back</a></b>
        </div><br><br>
        <div class="form">
            <form method="post">
                Name :<br> <input class="space" type="text" name="name" placeholder="{{ $errors->first('name')}}" ><br>
                Username :<br> <input class="space" type="text" name="username" placeholder="{{ $errors->first('username')}}"> <br>
                Password : <br><input class="space" type="password" name="password" placeholder="{{ $errors->first('password')}}"><br>
				Mobile no : <br><input class="space" type="text" name="contactnumber" placeholder="{{ $errors->first('contactnumber')}}"><br>
                Email : <br><input class="space" type="email" name="email" placeholder="{{ $errors->first('email')}}"><br>
                Address :<br> <input class="space" type="text" name="address" placeholder="{{ $errors->first('address')}}"><br>
                Confirm Password : <br><input class="space" type="password" name="confirmPassword" placeholder="{{ $errors->first('confirmPassword')}}"><br>
				<input id="submit" type="submit" name="update" value="Register" >
            </form>
        </div>  
    </body>
</html>