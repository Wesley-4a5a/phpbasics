<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacts</title>
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <meta charset="utf-8" />
</head>
<body>

<div class="header">
    <h1>Ik krijg hier helemaal de tyfus van</h1>
</div>

<div class="row">

    <div class="col-3 col-m-3 menu">
        <ul>
            <li>The tyfus</li>
            <li>Pinksteren</li>
            <li>Bijna vakantie</li>
        </ul>
    </div>

    <div class="col-6 col-m-9">

        <h1>De teeeering</h1>

        <form method="post" action="">
            <p><?php echo $table; ?></p>
<!--			<input type="submit" name="op" value="delete"> -->
        </form>
<?php echo $selectBox; ?>

<!--        <form method="post" action="">
<!--            <input type="text" name="contact_name" placeholder="name"/> <br/>-->
<!--            <input type="text" name="contact_email" placeholder="email"/> <br/>-->
<!--            <input type="text" name="contact_address" placeholder="address"/> <br/>-->
<!--            <input type="text" name="contact_telephone" placeholder="telephone"/> <br/>-->
<!--            <button type="submit" name="op" value="new">Register</button>-->
<!--        </form>-->

    </div>

    <div class="col-3 col-m-12">
        <div class="aside">
            <h2>What?</h2>
            <p>Weet iemand uberhaupt wat pinksteren is?</p>
            <h2>Where?</h2>
            <p>Ergens dichtbij de heer</p>
            <h2>How?</h2>
            <p>Mass suicide.</p>
        </div>
    </div>

</div>

<div class="footer">
    <p>Resize the browser window to see how the content respond to the resizing.</p>
</div>



</body>
</html>

