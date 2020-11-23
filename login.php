<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> User Login and Registration</title>
    <link rel="stylesheet" type="text/css" href="tyle.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  </head>
  <body>
    <div class="container">
      <div class="login-box">
      <div class="row">
        <div class="col-md-6">
          <h2> Login Here</h2>
          <form  action="validation.php" method="post">
            <div class="form-group">
              <label> Usename</label>
              <input type="text" name="user" class="form-control" required>
            </div>
            <div class="form-group">
              <label> Password</label>
              <input type="password" name="password" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary"> Login </button><div class="col-md-6">
          </form>
          </div>

          <div class="col-md-6">
            <h2> Register Here</h2>
            <form  action="register.php" method="post">
              <div class="form-group">
                <label> Usename</label>
                <input type="text" name="user" class="form-control" required>
              </div>
              <div class="form-group">
                <label> Password</label>
                <input type="password" name="password" class="form-control" required>
              </div>
              <button type="submit" class="btn btn-primary"> Register </button>
            </form>
            </div>

           </div>

      </div>

    </div>
  </body>
</html>