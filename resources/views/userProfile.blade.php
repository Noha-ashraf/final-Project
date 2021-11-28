 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>User Profile</title>
     <link rel="stylesheet" href="{{ asset('css/userprofile.css') }}">
 </head>

 <body>


     {{-- start user-login --}}
     <div class="info col-12 ">
         <h1>Account</h1>
         <h3> <a href="shopiee">Home</a> / Account </h3>
     </div>
     <div class="login-page">
         <div class="form">
             <form class="register-form">
                 <input type="text" placeholder="name" />
                 <input type="password" placeholder="password" />
                 <input type="text" placeholder="email address" />
                 <button>create</button>
                 <p class="message">Already registered? <a href="#">Sign In</a></p>
             </form>
             <form class="login-form">
                 <input type="text" placeholder="username" />
                 <input type="password" placeholder="password" />
                 <button>login</button>
                 <p class="message">Not registered? <a href="#">Create an account</a></p>
             </form>
         </div>
     </div>
     {{-- end user-login --}}
 </body>

 </html>


 <script>
     $('.message a').click(function() {
         $('form').animate({
             height: "toggle",
             opacity: "toggle"
         }, "slow");
     });
 </script>
