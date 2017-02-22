 <!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>File Handler</title>
  <link rel="shortcut icon" href="favicon.ico" type="image/vnd.microsoft.icon">
  <link rel='stylesheet' href='//fonts.googleapis.com/css?family=font1|font2|etc' type='text/css'>
  <style type="text/css">

  </style>
  </head>
  <body>
      <form name="formOne" method="get" action="page3.php">
        Name: <br /><input type="text" name="fileName" value='<?php if(ISSET($_POST['selectedFile'])){echo $_POST['selectedFile'];}else {} ?>'><br />

        File Content:<br />
        <textarea rows="7" cols="50" name="fileContent"><?php if(ISSET($_POST['Content'])){echo $_POST['Content'];}else {} ?></textarea><br />
        Multiple Files: <br />
        <input type="text" name="multipleFiles" value=''><br />
        <button type='submit' name='todo' value='nothing'>Nothing</button>
        <button type='submit' name='todo' value='create'>Create</button>

        <button type='submit' name='todo' value='update'>Update</button>
        <button type='submit' name='todo' value='delete'>Delete</button>
        <button type='submit' name='todo' value='cmf'>Create Multiple</button>

        <?php
          echo "<br /><br />";
          $aapdir = getcwd();
          // $files = glob($aapdir.'\*.txt');
          // $hund = scandir($aapdir);
          $files = preg_grep('~\.(txt)$~', scandir($aapdir));
          echo '<select name="selectedFile">';
          foreach ($files as $key) {
            echo '<option >'. $key.'</option><br />';
          }
          echo '</select>';

         ?>
        <button type='submit' name='todo' value='read'>Read</button>
      </form>
  </body>
</html>
