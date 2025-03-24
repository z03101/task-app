<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible"
  content="IE=edge">
  <meta name="viewport"
  content="width=device-width, initial-scale=1.0">
  <title>TaskMaster</title>
  <link rel="stylesheet" href="login.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>

<body>
  <header>
    <nav class="navbar">
      <a href="home.html">Home</a>
      <a href="#">About</a>
      <a href="#">Services</a>
      <a href="#">Contact</a>
    </nav>

    <form action="#" class="search-bar">
      <input type="text" placeholder="Search...
      ">
      <button type="submit"><i class='bx bx-search'></i></button>
    </form>
  </header>

  <div class="background"></div>
  <div class="container">
    <div class="content">
      <h2 class="logo"><i class='bx bxs-calendar' ></i>TaskMaster</h2>

      <div class="text-sci">
        <h2>Welcome!<br><span>To Your New Productive Life.</span></bar></h2>

        <p>Master Your Day, One Task at a Time!" </p>

        <div class="social-icons">
          <a href="#"><i class='bx bxl-tiktok'></i></a>
          <a href="#"><i class='bx bxl-instagram'></i></a>
          <a href="#"><i class='bx bxl-facebook'></i></a>
          <a href="#"><i class='bx bxl-pinterest'></i></a>

      </div>
    </div>
  </div>
    
  <div class="logreg-box">
      <div class="form-box login">
        
          <form action="login.php" method="post">
            <h2>Sign In</h2>

            <div class="input-box">
                <span class="icon"><i class='bx bx-envelope'></i></span>
                <input type="email" id="email" name="email" required>
                <label>Email</label>
            </div>

            <div class="input-box">
              <span class="icon"><i class='bx bxs-lock'></i></span>
              <input type="password" id="password" name="password" 
              required>
              <label>Password</label>
            </div>

            <div class="remember-forgot">
                <label><input 
                type="checkbox"> Remeber me</label>
                <a href="#">Forgot password?</a>
            </div>

            <button type="submit"
            class="btn">Sign In</button>

            <div class="login-register">
              <p>Don't have an account? <a
              href="#" 
              class="register-link">Sign
               Up</a></p>
            </div>
          </form>
      </div>


      <div class="form-box register">
        <form action="signup.php" method="post">
          <h2>Sign up</h2>

          <div class="input-box">
            <span class="icon"><i class='bx bxs-user-circle'></i></span>
            <input type="text" id="name" name="name" required> 
            <label>Name</label>
          </div>

          <div class="input-box">
              <span class="icon"><i class='bx bx-envelope'></i></span>
              <input type="email" id="email" name="email" required>
              <label>Email</label>
          </div>

          <div class="input-box">
            <span class="icon"><i class='bx bxs-lock'></i></span>
            <input type="password" id="password" name="password" 
            required>
            <label>Password</label>
          </div>

          <div class="remember-forgot">
              <label><input 
              type="checkbox"> I agree to the terms and conditions</label>
              
          </div>

          <button type="submit" class="btn">Sign Up</button>

          <div class="login-register">
            <p>Already have an account? <a
            href="#" 
            class="login-link">Sign
             in</a></p>
          </div>
        </form>
    </div>
  </div>
  
  <script src="script.js"></script>
</body>



