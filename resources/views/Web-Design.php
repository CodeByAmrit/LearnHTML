
<h1>Web Design Basics: How HTML, CSS and JavaScript Work?</h1>
            <p>Web design refers to the process of creating and styling the appearance of a website. There are 3 fundamental technologies to build the modern website and web applications. They are:</p>
            <li>HTML</li>
            <li>CSS</li>
            <li>JS</li>
            <p>These technologies work together to provide the structure, style, and interactivity of a web page.</p>
            <hr>
            <h2>HTML</h2>
            <p>HTML (HyperText Markup Language) is a markup language used to structure and organize the content on a web page. It uses various tags to define the different elements on a page, such as headings, paragraphs, and links. Let's see an example:</p>
            <div class="showCode">
<code>
  &lt;!DOCTYPE html&gt;
&lt;html&gt;
    &lt;head&gt;
        &lt;title&gt;Page Title&lt;/title&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;h1&gt;LearnHTML&lt;/h1&gt;
        &lt;p&gt;We create easy to understand programming tutorials.&lt;/p&gt;
    &lt;/body&gt;
&lt;/html&gt;
</code>
            </div>
            <p>Browser output</p>
            <div class="showCode">
              <img src="images/web-design-basics-html-example.png" alt="webDesign" id="img">
            </div>
       
            <p>Here, we have an HTML document where:</p>
            
            <li>&lt;h1&gt; - heading of the document</li>
            <li>&lt;p&gt; - paragraph of the document</li>
            <p>The heading and paragraph tag in the above code help create a webpage structure.</p>
            <hr>

            <h2>CSS</h2>
            <p>CSS (Cascading Style Sheets) is a stylesheet language. It is used to style HTML documents.</p>
            <p>It specifies how the elements of HTML look including their layout, colors, and fonts. We use &lt;style&gt; tag to add CSS to HTML documents. Let's add some CSS to our previous HTML code.</p>
            <div class="showCode">
<code>
  &lt;!DOCTYPE html&gt;
  &lt;html&gt;
      &lt;head&gt;
          &lt;title&gt;Page Title&lt;/title&gt;
          &lt;style&gt;
              h1 {
          color: blue;
              }
              p {
          color: red;
              }
          &lt;/style&gt;
      &lt;/head&gt;
      &lt;body&gt;
          &lt;h1&gt;LearnHTML&lt;/h1&gt;
          &lt;p&gt;We create easy to understand programming tutorial.&lt;/p&gt;
      &lt;/body&gt;
  &lt;/html&gt;
</code>
            </div>
            <p>Browser output</p>
            <div class="showCode">
              <img src="images/web-design-2.png" alt="output" id="img">
            </div>
            <p>In the above code, we've applied CSS to &lt;h1&gt; and &lt;p&gt;tags to change their text color. Notice the code,</p>
            <div class="showCode">
<code>
  h1 {
    color: blue;
  }
</code>
            </div>
            <p>This CSS code turns the text color of every &lt;p&gt; element into red.</p>
            <hr>
            <h2>JavaScript</h2>
            <p>JavaScript (JS) is a programming language that makes websites interactive and dynamic. It is primarily used in web browsers to create dropdown menus, form validation, interactive maps, and other elements on a website.</p>
            <p>We use JavaScript with HTML and CSS to create websites that are more dynamic and user-friendly. We use &lt;script&gt; tag to add JS to HTML. For example,</p>
            <div class="showCode">
<code>
  &lt;!DOCTYPE html&gt;
  &lt;html&gt;
      &lt;head&gt;
          &lt;title&gt;Page Title&lt;/title&gt;
      &lt;/head&gt;
      &lt;body&gt;
          &lt;button&gt; onclick="displayAlert()"&gt;Click me!&lt;/button&gt;

          &lt;script&gt;&gt;
            function displayAlert() {
              alert("Learn coding from Programiz Pro");
            }
          &lt;/script&gt;
      &lt;/body&gt;
  &lt;/html&gt;
</code>
            </div>
            <p>Browser output (before button click)</p>
            <div class="showCode">
              <img src="images/web-design-basic-js-example.png" alt="js Eg" id="img">
            </div>
            <p>Browser output (after button click)</p>
            <div class="showCode">
              <img src="images/web-design-basic-js-example-alert.png" alt="js Eg" id="img">
            </div>
            <p>In the above example we have created a button that calls displayAlert() when clicked.</p>
            <p>Notice the code,</p>
            <div class="showCode">
<code>
  &lt;script&gt;
    function displayAlert() {<
      alert("Learn coding from Programiz Pro");
    }
  &lt;/script&gt;
</code>
            </div>
            <p>This function simply displays an alert box with the message Learn coding from Programiz Pro.</p>
            <hr>
            <h2>How do HTML, CSS, and JavaScript work?</h2>
            <p>Let us see an example of how HTML, CSS, and JS work together for a user-friendly web experience. Let's see an example,</p>
            <div class="showCode">
<code>
  &lt;html&gt;
    &lt;head&gt;
        &lt;title&gt;My Webpage&lt;/title&gt;
        &lt;style&gt;&gt;
          body {
            text-align: center;
          }
          h1 {
            color: #333;
          }
        &lt;/style&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;h1&gt;Hello, World!&lt;/h1&gt;
        &lt;p&gt;This is a simple HTML, CSS, and JavaScript webpage.&lt;/p&gt;
        &lt;button&gt; onclick="displayAlert()"&gt;Click me!&lt;/button&gt;
        &lt;script&gt;&gt;
          function displayAlert() {
    	alert('Hello World!');
          }
        &lt;/script&gt;
    &lt;/body&gt;
&lt;/html&gt;
</code>
            </div>
            <p>Browser output(before button clicked)</p>
            <div class="showCode">
              <img src="images/working-of-html-css-js-together.png" alt="js together" id="img">
            </div>
            <p>Browser output(after button clicked)</p>
            <div class="showCode">
              <img src="images/create-alert-using-html-css-js.png" alt="js together" id="img">
            </div>
            <p>In the above example, we created a simple webpage. We can now learn more HTML, CSS, and JS to create even better websites.</p>





            <hr>
            <a href="HTML-Paragraphs "><div class="nextBtn">
                <p>Next Tutorials:</p>
                <p>HTML-Paragraphs -></p>
            </div></a>


            <hr>
            <div class="last">
              © All rights reserved.
            </div>