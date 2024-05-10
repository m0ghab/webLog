

<!DOCTYPE html>
<!-- Coding By CodingNepal - codingnepalweb.com -->
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login Form</title>
    <link rel="stylesheet" href="../Css/login.css" />
    <link rel="icon" type="image/png" href="../Icons/blog(3).png ">
  </head>
  <body>
    <section class="wrapper">
      <div class="form signup">
        <header>Sign In</header>
        <form action="../index.php">
          
          <input type="text" placeholder="Email address" required />
          <input type="password" placeholder="Password" required />
          <a class="text-fp" href="#">Forgot password?</a>
          <br>
          <input  type="submit" value="Sign In" />
        </form>
      </div>
      
      <div class="form login">
        <header>Sign Up</header>
        <form class="form-signUp" action="../index.php">
            <input type="text" placeholder="Full name" required />
            <input type="text" placeholder="Email address" required />
            <input type="password" placeholder="Password" required />
            <input type="password" placeholder="Confirm Password" required />
            <input type="text" placeholder="Phone number" required />
            <!-- <div class="style-checkbox">
              <pre>Do you want to be an admin user?      </pre>
              <input type="checkbox" name="" id="checkbox">
            </div> -->
            <input type="submit" value="Sign Up" />
        </form>
      </div>
      <script>
        const wrapper = document.querySelector(".wrapper"),
          signupHeader = document.querySelector(".signup header"),
          loginHeader = document.querySelector(".login header");

        loginHeader.addEventListener("click", () => {
          wrapper.classList.add("active");
        });
        signupHeader.addEventListener("click", () => {
          wrapper.classList.remove("active");
        });
      </script>
    </section>
    <section class="footer">
      
        <div class="footer_logo">
            <a class="logo" href="#" class="icon">
                <img class="logo_footer" src="../Icons/blog(1).png" alt="">
                <h1>WEBLOG</h1>
            </a> 
            
            <p class="footer_copyR">All Rights Reserved.</p>
        </div>
        <div class="footer_developer">
            <h3 class="footer--h3">Developer:</h3>
            <p><b>Name:</b> Hossein Rahimi</p>
            <P><b>Email:</b> hosseinrahimi@gmail.com</P>
            <P><b>Phone number:</b> 09170656278</P>
        </div>
        <div class="about-us">
            <h3 class="footer--h3">About Us</h3>
            <p>This site is an academic project for a web-based programming course that focuses on the php language.</p>
            <p>And this site is about writing articles and uploading them on the site.</p>
        </div>
    </section>
  </body>
</html>