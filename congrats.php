<!DOCTYPE html>
<html>
  <head>
    <title>IRCTC</title>
    <link rel="icon" href="icon.png">
    <link rel="stylesheet" href="register.css">
    <meta charset="utf-8">
    <meta name="keywords" content="HTML, CSS, JavaScript">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
      .container{
        margin-top: -400px;
        margin-left: 280px;
        padding: 100px 100px;
      }
      #con{
        text-align: center;
        font-size: 42px;
        font-weight: 900;
        background: linear-gradient(-45deg,black,gold,black);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
      }
      #book{
        font-size: 30px;
        font-weight: 600;
        font-style: italic;
        text-align: center;
        color: white;
      }
    </style>
  </head>
  <body>
    <header class="header">
      <div class="icon"><img src="icon.png">
      <div class="text">IRCTC</div></div>
      <nav class="navigation">
        <div class="links"><a href="index.php">Home</a></div>
        <div class="links"><a href="abt.php">About</a></div>
        <div class="links"><a href="cont.php">Contact</a></div>
      </nav>
    </header>
    <div class="background">
      <img src="th.jpg">
      <main class="container">
          <span id="con">Congratulations!</span>
          <span id="book">Your train ticket is booked successfully</span>
      </main>
    </div>

  </body>
</html>