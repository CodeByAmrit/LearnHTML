<h1>HTML Basics</h1>      
            <p>HTML (HyperText Markup Language) is a markup language used to structure and organize the content on a web page. It uses various tags to define the different elements on a page, such as headings, paragraphs, and links.

            </p>              
            <hr>
            
            <h2>HTML Hierarchy</h2>      
            <p>HTML elements are hierarchical, which means that they can be nested inside each other to create a tree-like structure of the content on the web page.</p>                
            <div class="showCode">
<code>
  &lt;!DOCTYPE html&gt;
&lt;html&gt;
    &lt;head&gt;
        &lt;title&gt;My web page&lt;/title&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;h1&gt;Hello, world!&lt;/h1&gt;
        &lt;p&gt;This is my first web page.&lt;/p&gt;
        &lt;p&gt;It contains a 
             &lt;strong&gt;main heading&lt;/strong&gt; and &lt;em&gt; paragraph &lt;/em&gt;.
        &lt;/p&gt;
    &lt;/body&gt;
&lt;/html&gt;
</code>
            </div>
            <h2><strong>Browser Output</strong></h2>
            <div class="showCode">
              <img src="images/html-basics-hierarchy.png" alt="pic1" id="img">
            </div>
            <p>In this example, the html element is the root element of the hierarchy and contains two child elements: head and body. The head element, in turn, contains a child element called the title, and the body element contains child elements: h1 and p.</p>
            <p>Let's see the meaning of the various elements used in the above example.</p>
            <li>&lt;html&gt;: the root element of the DOM, and it contains all of the other elements in the code</li>
            <li>&lt;head&gt;: contains metadata about the web page, such as the title and any linked CSS or JavaScript files</li>
            <li>&lt;title&gt;: contains the title of the web page, which will be displayed in the web browser's title bar or tab</li>
            <li>&lt;body&gt;: contains the main content of the web page, which will be displayed in the web browser's window</li>
            <li>&lt;p&gt;: contains the paragraphs of text on the web page</li>
            <li>&lt;strong&gt;, &lt;em&gt;: child elements of the &lt;p&gt; elements, they are used to mark text as important and emphasized respectively</li>
            <hr>
            <h2>What are HTML elements?</h2>
            <p>HTML elements consist of several parts, including the opening and closing tags, the content, and the attributes. Here is an explanation of each of these parts:</p>
            <div class="showCode">
              <img src="images/basics-elements-in-html.png" alt="basic" id="img">
            </div>
            <p>Here,</p>
            <li>The opening tag: This consists of the element name, wrapped in angle brackets. It indicates the start of the element and the point at which the element's effects begin.
            </li>
            <li>The closing tag: This is the same as the opening tag, but with a forward slash before the element name. It indicates the end of the element and the point at which the element's effects stop.</li>
            <li>The content: This is the content of the element, which can be text, other elements, or a combination of both.</li>
            <li>The element: The opening tag, the closing tag, and the content together make up the element.</li>
            <hr>
            <h2>What are HTML Attributes?</h2>
            <p>HTML elements can have attributes, which provide additional information about the element. They are specified in the opening tag of the element and take the form of name-value pairs. Let's see an example:</p>
            <div class="showCode">
<code>
  &lt;a href="http://example.com"&gt; Example &lt;/a&gt;
</code>
            </div>
            <p>The href is an attribute. It provides the link information about the &lt;a&gt; tag. In the above example,</p>
            <li>href - the name of attribute</li>
            <li>https://www.codebyamrit.github.io/LearnHTML - the value of attribute</li>
            <hr>
            <h2>HTML Syntax</h2>
            <p>We need to follow a strict syntax guidelines to write valid HTML code. This includes the use of tags, elements, and attributes, as well as the correct use of indentation and white space. Here are some key points about HTML syntax:</p>
            <p>1. HTML tags consist of the element name, wrapped in angle brackets. For example, &lt;h1&gt;, &lt;p&gt;, &lt;img&gt; are some HTML tags.</p>
            <p>2. HTML elements are created by enclosing the content of the element inside the opening and closing tags of the element. For example,</p>
            <div class="showCode">
<code>
  &lt;span&gt;Some text.&lt;/span&gt;
</code>
            </div>
            <p>is an HTML element.</p>
            <p>3. HTML attributes are used to provide additional information about HTML elements and are specified in the opening tag of the element. For example,</p>
            <div class="showCode">
<code>
  &lt;a target="www.google.com"&gt;Click Here&lt;/a&gt;
</code>
            </div>

            <p>Here, target is an attribute.</p>
            <p>4. HTML code should be well-formed and properly indented, with each element on its own line and each level of hierarchy indented by one level. This makes the code easier to read and understand, and can help to avoid errors. For example,</p>
            <div class="showCode">
<code>
  &lt;html&gt;
  &lt;head&gt;
      &lt;title&gt;My First HTML Page&lt;/title&gt;
  &lt;/head&gt;
  &lt;body&gt;
      &lt;h1&gt;My First HTML Page&lt;/h1&gt;
      &lt;p&gt; Hello World!&lt;/p&gt;
  &lt;/body&gt;
  &lt;/html&gt;
</code>
            </div>
            <br><br>
            <hr>
            <div class="nextBtn" onclick="load('resources/views/Web-Design.php'), null">
                <p>Next Tutorials : </p>
                <p> Web Design -></p>

            </div>
            <hr>
            <div class="last">
                © All rights reserved.
            </div>