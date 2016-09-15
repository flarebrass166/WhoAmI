<?php
$name = $_POST['Name'];
$name = strtolower($name);
$name = ucwords($name);
$age = $_POST['Age'];
$address = $_POST['Address'];
$state = $_POST['State'];
$sex = $_POST['Sex'];
$personPic = "<img src = '";
$personSheet = "<header><h2>$name from $state</h2></header>";


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
        function clean($string){
            $NewString = str_replace('’', '\'',$string);
            return $NewString;

        }

        $postPage = explode("\n", file_get_contents('PostPage.txt'));
        $year = 2016;
        print ($personPic);
        print ($personSheet);
        printf("Your name is %s<br> You are from %s<br>", $name, $state);
        printf("You are %u years old<br> You are a %s<br>", $age, $sex);
        printf(" Your address is %s<br><br>", $address);
        foreach ($postPage as $value){
           $newValue = clean($value);
        echo "$newValue <br>";
        }
        echo "<br>";
        printf("These are the years from this year, until the year you were born:<br>");
        for($i = 0; $i+$year >= $year-$age; $i--){
            echo $i + $year."<br>";
        }
        ?>
    </div>
</div>



</body>
</html>

