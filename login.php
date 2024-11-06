<?php include('config.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<form action = '' method = 'post' style="margin : 400px; margin-top : 100px">
  <div class="form-gr oup" >
    <label for="exampleInputEmail1">Email address</label>
    <input name='email' class="form-control" placeholder="Enter email">
    
  </div>
  <span style = 'color :red '><?php echo $emptyemail ?></span>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password"  name='password'  class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <span style = 'color :red '><?php echo $emptypass ?></span>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" name = 'Submit' class="btn btn-primary">Submit</button>
</form>
</body>
</html>