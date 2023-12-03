<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login - LearnHTML</title>
    <link rel="icon" type="image/x-icon" href="/pic/logo1.ico" />

    <style>
      * {
        font-family: "Gill Sans", "Gill Sans MT", Calibri, "Trebuchet MS",
          sans-serif;
        box-sizing: border-box;
      }
      body {
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: space-between;
      }

      #left-div {
        flex: 1;
        background: rgb(30, 30, 86);
        background-image: url('pic/loginLeft.png');
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
        height: 100vh;
        flex-direction: column;
        background-repeat: no-repeat;
        background-attachment: fixed;
      }
      .wrapLeft {
        width: 450px;
      }
      .wrapLeft h1{
        font-family: "euclid_circular_a","Arial","Source Sans Pro","Helvetica Neue","Helvetica","Arial",sans-serif;
      }
      #right-div {
        flex: 1;
        background: #fff;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
      }

      #login-form {
        width: 400px;
        text-align: center;
        padding: 20px;

        border-radius: 5px;
        background: #ffffff;
      }

      h2,
      h1 {
        margin: 0;
        padding: 0;
      }
      h1 {
        margin-bottom: 20px;
      }
      h2 {
        font-weight: 400;
        padding-left: 20px;
      }
      h3 {
        padding-left: 20px;
        margin: 0;
        font-family: "Gill Sans", "Gill Sans MT", Calibri, "Trebuchet MS",
          sans-serif;
        font-weight: lighter;
      }
      .wrap {
        display: flex;
        justify-content: center;
        align-items: center;
        justify-content: left;
      }
      .wrap-right {
        display: flex;
        flex-direction: column;
        margin-top: 20px;
      }
      .logo {
        width: 56px;
        height: 56px;
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: #c1d0ff;
        padding: 4px;
        border-radius: 50%;
      }

      #login-form input {
        padding-left: 50px;
        width: 304px;
        height: 52px;
        border: none;
        background-color: #f0edff;
        margin-top: 16px;
        border-radius: 16px;
      }

      #login-buttons {
        margin-top: 16px;
      }

      #login-buttons a {
        text-decoration: none;
        padding: 20px;
        margin: 5px;
      }

      #loginBtn {
        color: white;
        cursor: pointer;
        width: 142px;
        height: 52px;
        border-radius: 10px;
        border: none;
        background: linear-gradient(99.78deg, #9181f4 -5.85%, #5038ed 109.55%);
        margin-top: 16px;
        font-size: 14px;
      }
      @media (max-width: 800px)  {
        #left-div{
          display: none;
        }
        #right-div{
          padding-top: 60px;
        }
      }
    </style>
  </head>
  <body>
    <div id="left-div">
      <!-- <img src="pic/loginLeft.png" alt="" /> -->
      <div class="wrapLeft">
        <h1>Sign up to get the most out of Programiz PRO</h1>

        <div class="wrap">
          <div class="logo"><img src="pic/book.png" alt="first" width="31px"></div>
          <div class="wrap-right">
            <h2>Self-paced Courses</h2>
            <h3>Learn at your own time; no deadlines or restrictions.</h3>
          </div>
        </div>
        
        <div class="wrap">
          <div class="logo"><img src="pic/bolt.png" alt="first" width="36px"></div>
          <div class="wrap-right">
            <h2>Personal AI Mentor</h2>
            <h3>Get expert coding help with sensAI - available 24/7.</h3>
          </div>
        </div>

        <div class="wrap">
          <div class="logo"><img src="pic/medal.png" alt="first" width="36px"></div>
          <div class="wrap-right">
            <h2>Earn Certification</h2>
            <h3>Complete Learning paths and earn Certifications.</h3>
          </div>
        </div>
      </div>
    </div>
    <div id="right-div">
      <div id="login-form">
        <img src="pic/Logo.svg" alt="HTML" id="logo" width="300px" /><br /><br />
        <h2 style="padding:0;"><strong>LOGIN</strong></h2>
        <form action="#" method="post">
          <input type="text" placeholder="Username" required />

          <input type="password" placeholder="Password" required />
          <button type="submit" id="loginBtn"><strong>Login</strong></button>
          <br />
          <br />
          <hr />
          or
          <div id="login-buttons">
            <a href="#"><img src="pic/google.svg" alt="google" /></a>
            <a href="#"><img src="pic/github-logo.png" alt="google" /></a>
          </div>
        </form>
      </div>
    </div>
  </body>
</html>
