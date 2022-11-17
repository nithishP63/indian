<!DOCTYPE html>
<html>
  <head>
    <title>IRCTC</title>
    <link rel="icon" href="icon.png">
    <link rel="stylesheet" href="front.css">
    <meta charset="utf-8">
    <meta name="keywords" content="HTML, CSS, JavaScript">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

  </head>
  <body>
    <header class="header">
      <div class="icon"><img src="icon.png">
      <div class="txt">IRCTC</div></div>
      <nav class="navigation">
        <div class="links"><a href="index.php">Home</a></div>
        <div class="links"><a href="abt.php">About</a></div>
        <div class="links"><a href="cont.php">Contact</a></div>
      </nav>
    </header>
    <div class="background">
      <img src="th1.jpg">
      <div class="text">
        <h1>WELCOME TO IRCTC</h1>
        <p>&emsp;Book your train tickets here.</p>
      </div>
      <main class="container">
        <div class="first-row">
          <div>
            <label>PickUp Location:&ast;</label>
              <select class="drop-down" id="pick">
                <option value="select">--Select--</option>
                <option value="arcot">Katpadi</option>
                <option value="gudiyatam">Chennai</option>
                <option value="katpadi">Coimbatore</option>
                <option value="sathuvachari">Trichy</option>
                <option value="vellore">Madurai</option>
              </select>
          </div>
          <div>
            <label>Drop Location:&ast;</label><br>
            <select class="drop-down" id="drop">
              <option value="select">--Select--</option>
              <option value="arcot">Katpadi</option>
              <option value="gudiyatam">Chennai</option>
              <option value="katpadi">Coimbatore</option>
              <option value="sathuvachari">Trichy</option>
              <option value="vellore">Madurai</option>
            </select>
          </div>
        </div>
        <div class="second-row">
          <div>
            <label>PickUp Date:&ast;</label>
            <input type="date" id="pdate">
          </div>
          
          <div>
            <label>PickUp time:&ast;</label>
            <input type="time" id="ptime">
          </div>
         
        </div>
        
        <div id="driver"><span id="ck">If you want return ticket mention date and time.</span></div>
        <div class="fourth-row">
          <div>
            <label>Return Date:</label>
            <input type="date" id="ddate">
          </div>
          <div>
            <label>Number of Tickets :</label>
            <input type="number" id="num">
          </div>
        </div>
          
        <div class="third-row">
          <div><button class = "button" onclick="check()">Find Train</button></div>

        </div>
       </main>
    </div>

    <script>
      
      function check(){

        let p = document.getElementById("pick").value;
        let d = document.getElementById("drop").value;
        let pd = document.getElementById("pdate").value;
        let dd = document.getElementById("ddate").value;
        let pt = document.getElementById("ptime").value;
        let no = document.getElementById("num").value;
        var inpDate = new Date(pd);
        var dropDate = new Date(dd);
        var curDate = new Date();
        if(p == "select"){
          alert("Pickup location must be choosed");
        }
        else if(d == "select"){
          alert("Drop location must be choosed");
        }
        else if(pd == ""){
          alert("Pickup date must be choosed");
        }
        else if(inpDate.setHours(0, 0, 0, 0) < curDate.setHours(0, 0, 0, 0)){
          alert("Pickup date must not be choose from previous days");
        }
        else if(pt == ""){
          alert("Pickup time must be choosed");
        }
        
        else if(dropDate.setHours(0, 0, 0, 0) < inpDate.setHours(0, 0, 0, 0)){
          alert("Return date must not be choosen before pickup date");
        }
        else{
          localStorage.setItem("num",no);
          window.location.href = "train.php";
        }
      }
    </script>
  </body>
</html>