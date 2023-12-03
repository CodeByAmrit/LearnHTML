<?php
  session_start();
  $check = 0;
  if (isset($_SESSION["userId"])) {
      $check = 1;
  }
?>

<div class="menuDiv">
    <div class="menuleft">
        <a href="">
            <div class="logo"><img src="/pic/Logo.svg" alt="pic" /></div>
        </a>
        <div class="menuItems" onclick="popFunction()">
            <p id="item1">Tutorials</p>
            <img src="/pic/arrow.png" alt="arrow">
        </div>
    </div>
    <div class="menuright">
        <?php if ($check == 1) {
            $id = $_SESSION["userId"];
           
            echo "<div id='emailDisplay' >". $id ."</div>";
            echo "<div class='UserName' onclick='showUpload()'> <img height=45px src='/pic/blueCheck.png'alt='pic'> </div>";
        }else {
            echo "<a href='login'><div class='loginBtn'>Login</div></a>";
            echo "<a href='signup'><div class='signupBtn'>Join For Free</div></a>";
        } ?>
        
        
    </div>
</div>
<script>
    function closeFuntion(){
            document.getElementById("pop").style.display = "none";
            document.getElementById("pop1").style.top = "-500px";
        }
        function popFunction(){
            if (document.getElementById("pop").style.display === "flex"){

                document.getElementById("pop").style.display = "none";
                document.getElementById("pop1").style.top = "-500px";
                document.getElementById("item1").style.color = "black";
                
            }
            else{
                document.getElementById("pop").style.display = "flex";
                document.getElementById("pop1").style.top = "0px";
                document.getElementById("item1").style.color = "#0057FF";
            }
        }
</script>