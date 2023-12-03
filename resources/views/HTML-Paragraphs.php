
<h1>HTML Paragraphs</h1>
<p>The HTML &lt;p&gt;tag is used to create paragraphs. For example,</p>
<div class="showCode">
<code>
&lt;p&gt;HTML is fun to learn.&lt;/p&gt;<
</code>
</div>
<p>Browser Output</p> 
<div class="showCode">
  <img src="images/html-paragraph.png" alt="paragraph" id="img">
</div>
<p>As we can see, a paragraph starts with the &lt;p&gt; and ends with the &lt;/p&gt; tag.</p>            
<hr>

<p>HTML paragraphs always start on a new line. To demonstrate this, let's create a webpage with two paragraphs.</p>
<div class="showCode">
<code>
&lt;p&gt;Paragraph 1: Short Paragraph&lt;/p&gt;

&lt;p&gt;Paragraph 2: Long Paragraph, this is a long paragraph with more text to fill an entire line in the website.&lt;/p&gt;
</code>
</div>
<p>Browser Output</p>
<div class="showCode">
  <img src="images/two-html-paragraphs.png" alt="two paragraph" id="img">
</div>
<p>The above HTML code contains two paragraphs. And each paragraph starts on a new line even though there is sufficient space after the first paragraph.</p>
<hr>

<h2>HTML Paragraphs and Spaces</h2>
<p>Paragraphs automatically remove extra spaces and lines from our text. For example,</p>
<div class="showCode">
<code>
&lt;p&gt;
The paragraph tag removes all extra spaces. The paragraph tag also removes all
extra lines.
&lt;/p&gt;

</code>
</div>
<p>Browser Output</p>
<div class="showCode">
  <img src="images/html-paragraph-no-spaces.png" alt="no space" id="img">
</div>
<p>Here, the output</p>
<li>remove all the extra spaces between words</li>
<li>remove all the extra spaces between words</li>
<hr>

<h2>Adding Line Breaks in Paragraphs</h2>
<p>We can use the HTML line break tag, <br>, to add line breaks within our paragraphs. For example,</p>
<div class="showCode">
<code>
&lt;p&gt;We can use the &lt;br&gt; HTML br tag &lt;br&gt; to add a line break.&lt;/p&gt;
</code>
</div>
<p>Browser Output</p>
<div class="showCode">
  <img src="images/html-br-in-paragraph.png" alt="br" id="img">
</div>
<hr>

<h2>Pre-formatted Text in HTML</h2>
<p>As we have discussed, paragraphs cannot preserve extra lines and space. If we need to create content that uses multiple spaces and lines, we can use the HTML &lt;pre&gt; tag.</p>
<p>The &lt;pre&gt; tag creates preformatted text. Preformatted texts are displayed as written in the HTML file. For example,</p>
<div class="showCode">
<code>
&lt;pre&gt;<
This text  
will be 
displayed

in the same manner 
as it is written
&lt;/pre&gt;

</code>
</div>
<p>Browser Output</p>
<div class="showCode">
  <img src="images/html-paragraph-pre.png" alt="pre" id="img">
</div>

<hr>

<h2>Other Elements Inside Paragraphs</h2>
<p>It's possible to include one HTML element inside another. This is also true for &lt;p&gt; tags. For example,</p>
<div class="showCode">
<code>
&lt;p&gt;
We can use other tags like &lt;strong&gt;the strong tag to emphasize text&lt;/strong&gt;
&lt;/p&gt;

</code>
</div>
<p>Browser Output</p>
<div class="showCode">
  <img src="images/html-strong-inside-paragraph.png" alt="strong " id="img">
</div>
<p>In the above example, we have used the &lt;strong&gt; tag inside the &lt;p&gt; tag.</p>

<hr>

<h2>Paragraph in Block-Level</h2>
<p>The <p> tag is a block-level element. It starts on a new line and takes up the full width (of its parent element).</p>
<div class="showCode">
  <img src="images/html-paragraph-block-level.png" alt="block" id="img">
</div>
<hr>
<h2>Add Extra Space Inside Paragraphs</h2>
<p>As discussed earlier, we cannot normally add extra empty spaces inside paragraphs. However, we can use a certain HTML entity called non-breaking space to add extra spaces. For example,</p>
<div class="showCode">
<code>
&lt;p&gt;Extra space &amp;nbsp;: inside a paragraph&lt;/p&gt;
</code>
</div>
<p>Browser Output</p>
<div class="showCode">
  <img src="images/html-paragraph-nbsp.png" alt="nbsp" id="img">
</div>
<p>Here, &amp;nbsp;: is an HTML entity, which is interpreted as a space by browsers. This allows us to create multiple spaces inside paragraphs and other HTML tags.</p>




<hr>
<a href="HTML-Headings "><div class="nextBtn">
    <p>Next Tutorials:</p>
    <p>HTML-Headings -></p>
</div></a>


<hr>
<div class="last">
  © All rights reserved.
</div>