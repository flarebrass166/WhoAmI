<?php
// Author Matthew Langford

// instantiating all my variables from the post
$name = $_POST['Name'];
$name = strtolower($name);
$name = ucwords($name);
$age = $_POST['Age'];
$address = $_POST['Address'];
$state = $_POST['State'];
$sex = $_POST['Sex'];
$personPic = "<img src = '";
$personSheet = "<header><h2>$name from $state</h2></header>";
//if male or female, change background color and picture
if ($sex == "Male"){
    $personPic = $personPic . "Ma.jpg'>";
    echo '<body style="background-color: blue">';
}else if($sex == "Female"){
    $personPic = $personPic . "Fa.jpg'>";
    echo '<body style="background-color: pink">';
}
?>
<html>
<head>
    <meta charset="utf-8">
    <title>Who You Are</title>
    <link href="css.css" rel="stylesheet" type="text/css">
    <style>
        img{
            height: 250px;
            padding: 3pt;
            float:  right;
        }
    </style>
</head>
<body>
<div id="form_container">
    <h3 class="Content">Who You Are </h3>
    <div class="CharacterSheet">
        <?php
        // getting the contents of PosePage and putting them in an array.
        $postPage = explode("\n", file_get_contents('PostPage.txt'));

        // using date function to initialize year.
        $year = date("Y");

        // printing the person picture and person sheet.
        print ($personPic);
        print ($personSheet);
        printf("Your name is %s<br> You are from %s<br>", $name, $state);
        printf("You are %u years old<br> You are a %s<br>", $age, $sex);
        printf(" Your address is %s<br><br>", $address);

        // for each element in postpage, echo the element with a new line after each.
        foreach ($postPage as $value){
        echo "$value <br>";
        }
        echo "<br>";
        printf("These are the years from this year, until the year you were born:<br>");

        // echoing all the years from this year, till the year you were born.
        for($i = 0; $i+$year >= $year-$age; $i--){
            echo $i + $year."<br>";
        }
        ?>
    </div>
</div>
</body>
</html>