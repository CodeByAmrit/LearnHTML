
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LearnHTML</title>
    <link rel="stylesheet" href="/resources/css/styles.css">
    <link rel="icon" type="image/x-icon" href="pic/logo1.ico">
    <meta name="amritsharma54300@gmail.com" content="ca-pub-7755803220336674">
</head>
<body>
    <!-- Load Menu from component -->
    <?php require_once 'resources/component/menu.php'; ?>
    


    <div class="blue">
        <div class="blueleft">
            <div class="BLtop">
                <div class="logo2">
                    <img src="pic/logo1.png" alt="blueLogo">
                </div>
                <div class="BLtopTitle">
                    <p>Learn HTML</p>
                    <div class="title1">    
                        <img src="pic/book.png" alt="book" style="padding: 12px; width:20px">
                        <p style="padding: 0; margin:0;">TUTORIALS</p>
                    </div>
                    <div class="drawline1"></div>
                    <div class="drawline"></div>

                </div>
            </div>
            <div class="BLmiddle">
                <p>HTML (HyperText Markup Language) is a language used for creating webpages which is the fundamental building block of the Web.</p>
                <p>One thing to remember about HTML is that it is a markup language with no programming constructs. Instead, the language provides us with a structure to build web pages.</p>
                <p>Using HTML, we can define web page elements such as paragraphs, headings, links, and images. Our HTML tutorials will teach you everything you need to know about HTML5 (modern HTML) step-by-step.</p>

            </div>
            <a href="/Learning" style="text-decoration: none;"><div class="startBtn">Start Learning</div></a>
        </div>
        <div class="blueright">
            <img src="pic/pic1.png" alt="blueright">
        </div>
    </div>
    <div class="white">
        <div class="left">
            <img src="pic/pic2.png" alt="pic2" style="scale: 0.8;">
        </div>
        <div class="right">
            <P>About HTML</P>
            <UL>
                <LI>HTML is the standard markup language for creating the structure of web pages.</LI>
                <LI>We can display web page content like paragraphs, lists, images, and links in a structured way using HTML.</LI>
                <LI>We can only define the structure of a website using HTML. For appearance (color, layout, design), we use CSS. Similarly, JavaScript is used for adding functionality to a web page.</LI>
                <LI>HTML5 is the latest and major HTML version.</LI>    
            </UL>
            <p>Why Learn HTML?</p>
            <UL>
                <li>HTML is the backbone of all websites; we can use it to create the structure and layout of a webpage. In addition, HTML will allow you to design your own websites and edit existing ones.</li>
                <li>It is a fundamental skill for web development and often a necessary step before learning other languages like CSS and JavaScript. Plus, it's a well-established language with tons of resources available for learning and troubleshooting.</li>
                <li>With HTML, you can better optimize your website's SEO and improve your marketing.</li>
                <li>HTML is easy to learn and use, making it a perfect choice for beginners.</li>
                <li>If you're looking for career opportunities, HTML can open doors in web development, web design, front-end development, and user experience design.</li>
               
            </UL>
        </div>

    </div>
    <div class="last">
        © All rights reserved.
        <div class="lastRight"><a href="https://github.com/CodeByAmrit"><img src="pic/github-light.png" alt="git" height="20px"></a> </div>
    </div>

    <!-- POP UP menu with black and transparent background -->

    <div class="popMenu" id="pop" >
        <div class="popWin" id="pop1" style="position: relative;">
            <div class="popLeftTitle">
                
                <a href="#">
                    <div class="select1">
                        HTML
                    </div>
                </a>
            </div>
            <div class="popRightTitle">
                <p>Popular Topics</p>
                <ul>
                    <li>HTML Basic</li>
                    <li>HTML Table</li>
                    <li>HTML List</li>
                    <li>HTML Line Break</li>
                    <li>HTML div tag</li>
                </ul>
                <a href="/Learning">
                    <div class="allBtn">
                        All HTML Tutorials ->
                    </div>
                </a>
                <img src="pic/close.png" onclick="closeFuntion()" alt="Close" width="20px" height="20px" style="cursor:pointer; position: absolute; top:20px; right:20px;">
            </div>
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

    
</body>
</html>