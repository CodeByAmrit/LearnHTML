


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>LearnHTML</title>

    <link rel="icon" type="image/x-icon" href="/pic/logo1.ico" />
    <link rel="stylesheet" href="/resources/css/styleHTML.css" />

    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7755803220336674"
     crossorigin="anonymous"></script>
  </head>
  <body>
    <div class="menuDiv" id="menu">
      <div class="menuleft">
        <a href="/"><div class="logo"><img src="pic/Logo.png" alt="pic" /></div></a>
        <div class="serachDiv">
          <div class="searchIcon">
            <img src="pic/search.png" alt="serach" width="16px" height="16px">
          </div>
          <div class="serachInput">
            <input type="text" placeholder="Search tutorials & examples">
          </div>
        </div>
      </div>
      <div class="menuright" style="text-decoration: none;">
        <a href="login"><div class="loginBtn">Login</div></a>
            <a href="signup"><div class="signupBtn">Join For Free</div></a>
      </div>
    </div>
    <div class="content">
        <div class="left1" id="parentDiv">
            <div class="heading">Page Index</div>
            <div class="group active" id="symbol" onclick="load('resources/views/what-is-html.php', this)"><img src="pic/blueCheck.png" alt="tick" height="18px" style="margin-right: 10px;">What is HTML?</div>
            <div class="group "onclick="load('resources/views/HTML-Basic.php', this)"><img src="pic/darkCheck.png" alt="tick" height="18px" style="margin-right: 10px;">HTML Basic</div>
            <div class="group"onclick="load('resources/views/Web-Design.php', this)"><img src="pic/darkCheck.png" alt="tick" height="18px" style="margin-right: 10px;">Web Design</div>
            <div class="group"onclick="load('resources/views/HTML-Paragraphs.php', this)"><img src="pic/darkCheck.png" alt="tick" height="18px" style="margin-right: 10px;">HTML Paragraphs</div>
            <div class="group"onclick="load('resources/views/HTML-Headings.php', this)"><img src="pic/darkCheck.png" alt="tick" height="18px" style="margin-right: 10px;">HTML Headings</div>
            <div class="group"onclick="load('resources/views/HTML-Comments.php', this)"><img src="pic/darkCheck.png" alt="tick" height="18px" style="margin-right: 10px;">HTML Comments</div>
            <div class="group"onclick="load('resources/views/HTML-Table.php', this)"><img src="pic/darkCheck.png" alt="tick" height="18px" style="margin-right: 10px;">HTML Table</div>
            <div class="group"onclick="load('resources/views/HTML-List.php', this)"><img src="pic/darkCheck.png" alt="tick" height="18px" style="margin-right: 10px;">HTML List</div>
            <div class="group"onclick="load('resources/views/HTML-Unordered.php', this)"><img src="pic/darkCheck.png" alt="tick" height="18px" style="margin-right: 10px;">HTML Unordered</div>
            <div class="group"onclick="load('resources/views/HTML-Description.php', this)"><img src="pic/darkCheck.png" alt="tick" height="18px" style="margin-right: 10px;">HTML Description</div>
            <div class="group"onclick="load('resources/views/HTML-Line.php', this)"><img src="pic/darkCheck.png" alt="tick" height="18px" style="margin-right: 10px;">HTML Line</div>
            <div class="group"onclick="load('resources/views/HTML-Pre.php', this)"><img src="pic/darkCheck.png" alt="tick" height="18px" style="margin-right: 10px;">HTML Pre</div>
            <div class="group"onclick="load('resources/views/HTML-Horizonal.php', this)"><img src="pic/darkCheck.png" alt="tick" height="18px" style="margin-right: 10px;">HTML Horizonal</div>
        </div>
        <div class="right1" id="content-container">
            <?php require 'resources/views/what-is-html.php' ?>
        </div>
    </div>
    <script>
    // Check if the user has visited the page before using localStorage
    //if (localStorage.getItem("visited") === null) {
        // If the user hasn't visited before, set a flag in localStorage
        //localStorage.setItem("visited", "true");
        //document.getElementById("symbol").classList.add("active");
        
    //} else {
        // If the user has visited before, change the logo color
       // const logo = document.getElementById("menu");
        //logo.style.backgroundColor = "red"; // Change the color (in this case, a hue rotation)
    //}

    function load(path, self) {
      let title = path;
      
      // title = title.replace("/", " ");
      // title = title.replace(".", " ");
      // title =  title.split(" ");
      // title = title[1].toUpperCase();

      document.title = title;
      var contentContainer = document.getElementById('content-container');
      var parentDiv = document.getElementById('parentDiv');
      var elementsWithHighlight = parentDiv.getElementsByClassName('active');
      
      for (var i = 0; i < elementsWithHighlight.length; i++) {
        elementsWithHighlight[i].classList.remove('active');
      }

      // Add the 'highlight' class to the specified div
      var specifiedDiv = self;
      specifiedDiv.classList.add('active');
      // Fetch content from the PHP file
      fetch(path) // Replace with the actual path to your PHP file
        .then(function (response) {
          return response.text();
        })
        .then(function (data) {
          // Insert the content into the specified div
          contentContainer.innerHTML = "";
          contentContainer.innerHTML = data;
        })
        .catch(function (error) {
          console.error('Error loading PHP content:', error);
        });
    }
</script>

  </body>
</html>
