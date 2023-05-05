<!DOCTYPE html>
<html>
   <head>
      <title>Slide Navbar</title>
      <link rel="stylesheet" type="text/css" href="style.css">
      <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
      <style>
         .mot{
         margin-left: 30%;
         }
         .form{
         margin-top:57%;
         padding-top: 31%;
         }
         .login {
         height: 460px;
         background: #eee;
         border-radius: 60% / 10%;
         transform: non;
         transition: .0s ease-in-out; 
         margin-top:20%;
         }
         label {
         color: #fff;
         font-size: 2.3em;
         justify-content: center;
         display: flex;
         margin: 0px;
         font-weight: bold;
         cursor: pointer;
         transition: .5s ease-in-out;
         }
      </style>
   </head>
   <body >
      <div class="main">
         <div class="login">
            <form method="post" action="mdp.php">
               <div class="form">
                  <label for="chk" aria-hidden="true">Mot de Pass oublié</label>
                  <input type="email" name="emaill" placeholder="Email"  required="">
                  <input type="password" name="nmdp" placeholder="New Password" required="">
                  <input type="password" name="cmdp" placeholder="Confirme Password" required="">
                  <button>Confirme</button>
               </div>
            </form>
         </div>
      </div>
   </body>
</html>