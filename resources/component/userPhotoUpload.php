<div class="upload" id="up" style="display: none">
        <div class="white" ondrop="drop(event)" ondragover="allowDrop(event)">
          <img src="/pic/close.png" alt="cross" id="close" width="20px" onclick="closeUpload('up')" />
          
          <form action="updatePhoto" method="post" enctype="multipart/form-data" class="uploadLeft" id="form1" >
            <img src="/pic/upload.png" alt="uploadsymbol" width="50px" />
    
            <p>Drag & Drop Image</p>
            <!-- <input type="file" class="uploadBtn" id="files" accept="image/png, image/jpeg">
                    <label for="files">Select file</label> -->
            <input type="file" name="uploadfile" id="img" style="display: none" onchange="readURL(this);" />
            <label for="img" class="uploadBtn" name="image">Browse</label>
            <!-- <input type="submit" value="Upload"> -->
            <input type="submit" value='Upload'>
          </form>
          <div class="uploadRight" style="display: flex">
            <img src="/pic/userblue.png" alt="selected" width="100" id="selectedImg" />
            <!-- <input type="submit" value="Upload" > -->
            <button type="button" onclick="submitForm()" class="uploadBtn position" id="FinalUpload" style="height: 30px"
              disabled>
              Upload
            </button>
          </div>
        </div>
      </div>

    <script src="/resources/js/learning.js"></script>