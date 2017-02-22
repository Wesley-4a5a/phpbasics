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
        Name: <br /><input type="text" name="fileName" value='Mickey'><br />

        File Content:<br />
        <textarea rows="4" cols="50" name="fileContent"><?php if(ISSET($_POST['Content'])){echo $_POST['Content'];}else {} ?></textarea><br />
        Multiple Files: <br />
        <input type="text" name="multipleFiles" value=''><br />
        <button type='submit' name='todo' value='nothing'>Nothing</button>
        <button type='submit' name='todo' value='create'>Create</button>
        <button type='submit' name='todo' value='read'>Read</button>
        <button type='submit' name='todo' value='update'>Update</button>
        <button type='submit' name='todo' value='delete'>Delete</button>
        <button type='submit' name='todo' value='cmf'>Create Multiple</button>

        <?php

         ?>
      </form>
  </body>
</html>
