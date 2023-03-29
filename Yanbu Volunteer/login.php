<!-- <!DOCTYPE html>
<html lang="en">
  <head>
    <title>Login | Register </title>
    <link rel="stylesheet" href="css/log.css"/>
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
      <div class="wrapper">
         <div class="title-text">
            <div class="title login">
               Login Form
            </div>
            <div class="title signup">
               Signup Form
            </div>
         </div>
         <div class="form-container">
            <div class="slide-controls">
               <input type="radio" name="slide" id="login" checked>
               <input type="radio" name="slide" id="signup">
               <label for="login" class="slide login">Login</label>
               <label for="signup" class="slide signup">Signup</label>
               <div class="slider-tab"></div>
            </div>
            <div class="form-inner">

        <form class="login" action="validation.php" method="post">
        
        <div class="field">
        <input type="text" name="user" placeholder="UserName" class="box">
        </div>

        <div class="field">
        <input type="password" name="password" placeholder="Password" class="box">
        </div>

        <div class="field btn">
        <div class="btn-layer"></div>

        <input type="submit" name="signup-submit" value="login">
        </div>

        <div class="signup-link">
                     Not a member? <a href="">Signup now</a>
                  </div>

        </form>
       



    <form class="signup" action="Registration.php" method="post">

    <div class="field">
    <input type="text" name="user" placeholder="UserName">
    </div>

    <div class="field">
    <input type="password" name="password" placeholder="Password" class="box">
    </div>

    <div class="field btn">
    <div class="btn-layer"></div>
 
    <input type="submit" name="signup-submit" value="Signup">
    </div>
    
    </form>

    </div>
         </div>
      </div>
    <script src="myScriptlog.js"></script>
    <script src="myScript.js"></script>


  </body>
</html> -->

<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Login and Registration Form in HTML | CodingNepal</title>
    <link rel="stylesheet" href="css/log.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<header class="header">
    <a href="./index.html" class="logo"> Yanbu volunteer  </a>
</header>

   <body>
      <div class="wrapper">
         <div class="title-text">
            <div class="title login">
               Login Form
            </div>
            <div class="title signup">
               Signup Form
            </div>
         </div>
         <div class="form-container">
            <div class="slide-controls">
               <input type="radio" name="slide" id="login" checked>
               <input type="radio" name="slide" id="signup">
               <label for="login" class="slide login">Login</label>
               <label for="signup" class="slide signup">Signup</label>
               <div class="slider-tab"></div>
            </div>
            <div class="form-inner">
               <form action="validation.php" method="post" class="login">
                  <div class="field">
                     <input name="user" type="text" placeholder="username" required>
                  </div>
                  <div class="field">
                     <input name="password" type="password" placeholder="Password" required>
                  </div>
                  <div class="pass-link">
                     <a href="#">Forgot password?</a>
                  </div>
                  <div class="field btn">
                     <div class="btn-layer"></div>
                     <input name="signup-submit" type="submit" value="Login">
                  </div>
                  <div class="signup-link">
                     Not a member? <a href="">Signup now</a>
                  </div>
               </form>

               <form action="connect.php" method="post">
                  <div class="field">
                     <input type="text" name="user" placeholder="username" id="signemail" onblur="ValidateEmail(signemail);" required>
					  <p id="emailmess"></p>
                  </div>
                  <div class="field">
                     <input name="password" type="password" placeholder="Password" id="pass" required>
                  </div>
                  <div class="field">

					  <p id="passcmess">You have entered an invalid Confirm password!</p>
                  </div>
                  <div class="field btn">
                     <div class="btn-layer"></div>
                     <input type="submit" value="Signup" name="signup-submit">
                  </div>
               </form>
            </div>
         </div>
      </div>
   
	    <script src="js/myScriptlog.js"></script>
   </body>
</html>
