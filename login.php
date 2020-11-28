<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> التسجيل </title>
    <link rel="stylesheet" type="text/css" href="Style.css">

  </head>
  <body>
<div class="container">
    <div class="navbar">
      <div class="logo">
      </div>
      <nav>
        <ul>
          <li><a href="login.php">التسجيل</a></li>
          <li><a href="comun.html">التواصل</a></li>
          <li><a href="menue.html"> القائمة</a></li>
          <li><a href="who.html">من نحن</a></li>
          <li><a href="home.php">الرئيسة</a></li>
        </ul>
      </nav>
    </div>
</div>
<div id="content">
    12 - 4 - 1442  <br>
  يوم بداية الحلم وميلاد الحكاية، فيه طموحنا يكبر وبكم يفخر
  هو يوم وضعنا فيه مزاجكم غايتنا وخدمته هدفنا..<br>
  وبهذه المناسبة سجل دخولك لتدخل بالسحب على ايفون 12
</div>

   
      <div class="login-box">
      <div class="row1">
        <div class="col-md-6-left">
          <h2> Login Here</h2>
		  <br>
          <form  action="validation.php" method="post">
            <div class="form-group">
              <label> Usename</label>
              <input type="text" name="user" class="form-control" required>
            </div>
			<br>
            <div class="form-group">
              <label> Password</label>
              <input type="password" name="password" class="form-control" required>
            </div>
			<br>
            <button type="submit" class="btn"> Login </button>
          </form>
          </div>
		  
          <div class="col-md-6-right">
            <h2> Register Here</h2>
			<br>
            <form  action="register.php" method="post">
              <div class="form-group">
                <label> Usename</label>
                <input type="text" name="user" class="form-control" required>
              </div>
			  <br>
              <div class="form-group">
                <label> Password</label>
                <input type="password" name="password" class="form-control" required>
              </div>
			  <br>
              <button type="submit" class="btn"> Register </button>
            </form>
            </div>
           </div>
      </div>
   
  <script src="script.js">
    </script>
</body>
</html>
