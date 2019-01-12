<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>ONe Text Editor</title>
  
  
  
      <link rel="stylesheet" href="css/style.css">
	  

  
</head>

<body>

  <div id="page-wrapper" class="clearfix">
    <h1>ONe Text Editor</h1>
    <p>Powered by the Nextidiot.</p>

    <form action="#" method="POST" id="file-form">
      <div class="field">
        <input type="text" name="filename" id="filename" placeholder="Filename (e.g. Filename.txt)">
      </div>
      <div class="field">
        <textarea name="content" id="content" placeholder="Write your code ..."></textarea>
      </div>
      <div class="field">
        <button type="submit">Save File</button>
        <div id="messages"></div>
      </div>
    </form>

    <div id="files">
      <h2>Recent Files</h2>
      <ul id="file-list"></ul>
    </div>

  </div>
  
  

    <script  src="js/engiene.js"></script>




</body>

</html>
