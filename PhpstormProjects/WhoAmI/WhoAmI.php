<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Who Am I</title>
    <link href="css.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="form_container">
    <form method = "post" action = "WhoYouAre.php">
        <h3>Who Am I</h3>
        <ul class="appnitro">
            <li class="first">Name:</li>
            <li class="text"><input type="text" name="Name"></li>
            <li class="first">Age:</li>
            <li class="text"><input type="text" name="Age"></li>
            <li class="first">Address:</li>
            <li class="text"><input type="text" name="Address"></li>
            <li class="first">State:</li>
            <li class="text"><input type="text" name="State"></li>
            <li class="first">Sex:</li>
            <li class="radio"><input type="radio" value="Male" name="Sex">Male<input type="radio" value="Female" name="Sex">Female</li>
            <li><input type="submit" name="Create" value="Create Me"></li></ul>
    </form>
</div>
</body>
</html>