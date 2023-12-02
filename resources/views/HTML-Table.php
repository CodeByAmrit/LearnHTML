<h1>HTML Table</h1>
            <p>The HTML table tag (&lt;table&gt;) is used to represent data in a structured way by creating a table. For example,</p>
            <div class="showCode">
<code>
  &lt;table border="1" &gt;
    &lt;tr&gt;
      &lt;th&gt;Name&lt;/th&gt;
      &lt;th&gt;Age&lt;/th&gt;  
      &lt;th&gt;Country&lt;/th&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
      &lt;td&gt;Harry Depp&lt;/td&gt;
      &lt;td&gt;28&lt;/td&gt;
      &lt;td&gt;Britain&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
      &lt;td&gt;John Smith&lt;/td&gt;
      &lt;td&gt;35&lt;/td&gt;
      &lt;td&gt;USA&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
      &lt;td&gt;Ram Krishna&lt;/td&gt;
      &lt;td&gt;19&lt;/td&gt;
      &lt;td&gt;Nepal&lt;/td&gt;
    &lt;/tr&gt;
  &lt;/table&gt;
</code>
            </div>
            <p>Browser Output</p>
            <div class="showCode">
                <img src="images/html-table.png" alt="table html" id="img">
            </div>
            <p>In the above example, you can see we have used multiple tags to create a table in HTML.</p>
            <li>&lt;table&gt;</li>
            <li>&lt;tr&gt;</li>
            <li>&lt;td&gt;</li>
            <li>&lt;th&gt;</li>

            <hr>

            <h2>Table tag &lt;table&gt; in HTML</h2>
            <p>The &lt;table&gt; tag is used to define a table. For example,</p>
            <div class="showCode">
<code>
  &lt;table&gt;
    ….
  &lt;table&gt;
</code>
            </div>
            <br>
            <hr>
            <h2>Table Row <tr> in HTML</h2>
            <p>The &lt;tr&gt; tag is used to define a row in a table. For example,</p>
            <div class="showCode">
<code>
  &lt;table&gt;
  &lt;tr&gt;
    ...
  &lt;/tr&gt;
  &lt;/table&gt;

</code>
            </div>
            <p>The table row can include either table heading, &lt;th&gt; or table data, &lt;td&gt;.</p>
            <div class="showCode">
<code>
  &lt;tr&gt;
    &lt;th&gt;Name&lt;/th&gt;
    &lt;th&gt;Country&lt;/th&gt;
  &lt;/tr&gt;
  &lt;tr&gt;
    &lt;td&gt;Prasanna&lt;/td&gt;
    &lt;td&gt;Nepal&lt;/td&gt;
  &lt;/tr&gt;
  &lt;tr&gt;
    &lt;td&gt;Simon&lt;/td&gt;
    &lt;td&gt;USA&lt;/td&gt;
  &lt;/tr&gt;

</code>
            </div>
            <p>In a table, there can be any number of rows.</p>
            <hr>
            <h2>Table Heading, &lt;th&gt; in HTML</h2>
            <p>The &lt;th&gt; tag is used to define a table header. It is generally the top row of the table. For example,</p>
            <div class="showCode">
<code>
  &lt;table&gt;
    &lt;tr&gt;
      &lt;th&gt;Item&lt;/th&gt;
      &lt;th&gt;Count&lt;/th&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
      &lt;td&gt;Mango&lt;/td&gt;
      &lt;td&gt;125&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
      &lt;td&gt;Orange&lt;/td&gt;
      &lt;td&gt;75&lt;/td&gt;
    &lt;/tr&gt;
  &lt;/table&gt;

</code>
            </div>
            <p>Browser Output</p>
            <div class="showCode">
              <img src="images/html-table-heading.png" alt="heading" id="img">
            </div>
            <p>In the above example, Item and Count are table headers and they are used to represent the category of data in a particular row.</p>
            <p>Here, the styling of the table headers is bold and center-aligned. This is because the &lt;th&gt; tag has some default styling.</p>
            <hr>
            <h2>Table Cell &lt;td&gt; in HTML</h2>
            <p>The &lt;td&gt; tag is used to define table cells (data). The table cells store data to be displayed in the table. For example,</p>
            <div class="showCode">
<code>
  &lt;tr&gt;
  &lt;td&gt;Apple&lt;/td&gt;
  &lt;td&gt;Mango&lt;/td&gt;
  &lt;td&gt;Orange&lt;/td&gt;
  &lt;/tr&gt;

</code>
            </div>
            <p>In the above example, &lt;td&gt;Apple&lt;/td&gt;, &lt;td&gt;Mango&lt;/td&gt; and &lt;td&gt;Orange&lt;/td&gt; are table cells.</p>
            <p>Table cells are generally inside the table row or table headers.</p>
            <hr>
            <h2>Table Border</h2>
            <p>Remember we have used the border attribute in our first example.</p>
            <div class="showCode">
<code>
  &lt;table&gt; border="1"&gt;
  ...
  &lt;/table&gt;

</code>
            </div>
            <p>In HTML, the border attribute is used to add a border to a table and all the cells.</p>
            <div class="showCode">
              <img src="images/html-table-border.png" alt="table border" id="img">
            </div>

            <p>To prevent double borders like the one in the example above, we can set the border-collapse property of the table. For example,</p>
            <div class="showCode">
<code>
  &lt;table border="1" style="border-collapse: collapse"&gt;
  ...
  &lt;/table&gt;

</code>
            </div>
            <p>Browser Output</p>
            <div class="showCode">
              <img src="images/html-table-collapse-border.png" alt="collapse" id="img">
            </div>
            <hr>
            <h2>Table Head, Body, and Footer</h2>
            <p>The HTML table can be divided into three parts: a header, a body, and a footer.</p>
            <p>1. Table Header</p>
            <p>We use the &lt;thead&gt; tag to add a table head. The &lt;thead&gt; tag must come before any other tags inside a table. For example,</p>
            <div class="showCode">
<code>
  &lt;table&gt;
    &lt;thead&gt;
      &lt;tr&gt;
          &lt;th&gt;Head1&lt;/th&gt;
          &lt;th&gt;Head2&lt;/th&gt;
      &lt;/tr&gt;
    &lt;/thead&gt;
  
    ...
    ...
  &lt;/table&gt;
</code>
            </div>
            <p>The content of &lt;thead&gt; is placed on the top part of the table and we usually place the rows with table headers inside the &lt;thead&gt; tag.</p>
            <p>2. Table Body</p>
            <p>We use the &lt;tbody&gt; tag to add a table body. The &lt;tbody&gt; tag must come after &lt;thead&gt; and before any other tags inside a table. For example,</p>
            <div class="showCode">
<code>
  &lt;table&gt;
  &lt;thead&gt;
    &lt;tr&gt;
      &lt;th&gt;Head1&lt;/th&gt;
      &lt;th&gt;Head2&lt;/th&gt;
    &lt;/tr&gt;
  &lt;/thead&gt;

  ... ...
  &lt;/table&gt;
</code>

            </div>
            <p>The content of &lt;thead&gt; is placed on the top part of the table and we usually place the rows with table headers inside the &lt;thead&gt; tag.</p>
            <p>2. Table Body</p>
            <p>We use the &lt;tbody&gt; tag to add a table body. The &lt;tbody&gt; tag must come after &lt;thead&gt; and before any other tags inside a table. For example,</p>
            <div class="showCode">
<code>
  &lt;table&gt;
    &lt;thead&gt;
      ...
    &lt;/thead&gt;
    &lt;tbody&gt;
      &lt;tr&gt;
        &lt;td&gt;Cell 1&lt;/td&gt;
        &lt;td&gt;Cell 2&lt;/td&gt;
      &lt;/tr&gt;
    &lt;/tbody&gt;
  
    ...
    ...
  &lt;/table&gt;
</code>
            </div>
            <p>The content of &lt;tbody&gt; is placed on the center part of the table and we usually place the rows with the content we want to represent in the &lt;tbody&gt;.</p>
            <p>3. Table Footer</p>
            <p>We use the &lt;tfoot&gt; tag to add a table footer. The &lt;tfoot&gt; tag must come after &lt;tbody&gt; and before any other tags inside a table. For example,</p>
            <div class="showCode">
<code>
  &lt;table&gt;
  &lt;thead&gt;
    ...
  &lt;/thead&gt;
  &lt;tbody&gt;
    ,,,,
  &lt;/tbody&gt;
  &lt;tfoot&gt;
    &lt;tr&gt;
      &lt;td&gt;foot 1&lt;/td&gt;
      &lt;td&gt;foot 2&lt;/td&gt;
    &lt;/tr&gt;
  &lt;/tfoot&gt;
  &lt;/table&gt;
</code>
            </div>
            <p>The content of &lt;tbody&gt; is placed on the bottom part of the table and we usually place the rows with the footer in the &lt;tfoot&gt;.</p>
            <p>All these tags must be placed inside a &lt;table&gt; tag and must contain at least one &lt;tr&gt;. For example,</p>
            <hr>
            <h2>Example: HTML Table Head, Body, and Footer</h2>
            <div class="showCode">
<code>
  &lt;table&gt;
  &lt;thead&gt;
    &lt;tr&gt;
      &lt;th&gt;S.N&lt;/th&gt;
      &lt;th&gt;Item&lt;/th&gt;
      &lt;th&gt;Quantity&lt;/th&gt;
    &lt;/tr&gt;
  &lt;/thead&gt;
  &lt;tbody&gt;
    &lt;tr&gt;
      &lt;td&gt;1&lt;/td&gt;
      &lt;td&gt;Apple&lt;/td&gt;
      &lt;td&gt;2&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
      &lt;td&gt;2&lt;/td&gt;
      &lt;td&gt;Mango&lt;/td&gt;
      &lt;td&gt;2&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
      &lt;td&gt;3&lt;/td&gt;
      &lt;td&gt;Orange&lt;/td&gt;
      &lt;td&gt;1&lt;/td&gt;
    &lt;/tr&gt;
  &lt;/tbody&gt;
  &lt;tfoot&gt;
    &lt;tr&gt;
      &lt;td&gt;&lt;/td&gt;
      &lt;td&gt;Total&lt;/td&gt;
      &lt;td&gt;5&lt;/td&gt;
    &lt;/tr&gt;
  &lt;/tfoot&gt;
  &lt;/table&gt;

</code>
            </div>
            <p>Browser Output</p>
            <div class="showCode">
              <img src="images/html-table-head-body-footer.png" alt="footer" id="img">
            </div>
            <hr>
            <h1>Colspan and Rowspan</h1>
            <h2>Colspan</h2>
            <p>The colspan attribute merges cells across multiple columns. For example,</p>
            <div class="showCode">
<code>
  &lt;table&gt;
  &lt;tr&gt;
    &lt;th&gt;S.N&lt;/th&gt;
    &lt;th&gt;Item&lt;/th&gt;
    &lt;th&gt;Quantity&lt;/th&gt;
  &lt;/tr&gt;
  &lt;tr&gt;
    &lt;td&gt;1&lt;/td&gt;
    &lt;td&gt;Apple&lt;/td&gt;
    &lt;td&gt;2&lt;/td&gt;
  &lt;/tr&gt;
  &lt;tr&gt;
    &lt;td&gt;2&lt;/td&gt;
    &lt;td&gt;Mango&lt;/td&gt;
    &lt;td&gt;2&lt;/td&gt;
  &lt;/tr&gt;
  &lt;tr&gt;
    &lt;td&gt;3&lt;/td&gt;
    &lt;td&gt;Orange&lt;/td&gt;
    &lt;td&gt;1&lt;/td&gt;
  &lt;/tr&gt;
  &lt;tr&gt;
    &lt;td&gt; colspan="2"&gt;Total&lt;/td&gt;
    &lt;td&gt;5&lt;/td&gt;
  &lt;/tr&gt;
  &lt;/table&gt;

</code>
            </div>
            <p>Browser Output</p>
            <div class="showCode">
              <img src="images/html-table-colspan.png" alt="colspan" id="img">
            </div>
            <p>In the above example, you can see that the last row only has 2 cells with one cell occupying 2 columns.</p>
            <p>The value of the colspan attribute determines how many columns the cell occupies.</p>
            <h2>Rowspan</h2>
            <p>The rowspan attribute merges cells across multiple rows. For example,</p>
            <div class="showCode">
<code>
  &lt;table&gt;
  &lt;tr&gt;
    &lt;th&gt;Name&lt;/th&gt;
    &lt;th&gt;Subject&lt;/th&gt;
    &lt;th&gt;Marks&lt;/th&gt;
  &lt;/tr&gt;
  &lt;tr&gt;
    &lt;td rowspan="3"&gt;Mark Smith&lt;/td&gt;
    &lt;td&gt;English&lt;/td&gt;
    &lt;td&gt;67&lt;/td&gt;
  &lt;/tr&gt;
  &lt;tr&gt;
    &lt;td&gt;Maths&lt;/td&gt;
    &lt;td&gt;82&lt;/td&gt;
  &lt;/tr&gt;
  &lt;tr&gt;
    &lt;td&gt;Science&lt;/td&gt;
    &lt;td&gt;91&lt;/td&gt;
  &lt;/tr&gt;
  &lt;/table&gt;

</code>
            </div>
            <p>Browser Output</p>
            <div class="showCode">
              <img src="images/html-table-rowspan.png" alt="rowspan" id="img">
            </div>
            <p>In the above example, you can see that the first column only has 2 cells with one cell occupying 2 rows.</p>
            <p>The value of the rowspan attribute determines how many rows the cell occupies.</p>
            





            <hr>    
            <a href="HTML-List.html"><div class="nextBtn">
                <p>Next Tutorials:</p>
                <p>HTML List -></p>
            </div></a>


            <hr>
            <div class="last">
              © All rights reserved.
            </div>