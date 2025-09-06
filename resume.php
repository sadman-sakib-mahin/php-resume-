<?php

$resume = [
    
    [
    "name" => "Sadman Mahin <br>",
    "phone" => "01816606760 <br>",
    "email" => "mahinsadman514@gmail.com <br> <br>"
],
//Education
    [
    "school" => "Dinajpur Zilla School<br>",
    "college" => "Notre Dame college<br>",
    "University" => "Aiub<br><br>"
    ],
//skills
        [
    "skill1" => "HTML<br>",
    "skill2" => "CSS<br>",
    "skill3" => "Javascript<br>"
] 
    ];

    echo "Personal Info: <br> <br>";
    echo $resume [0]["name"] ;
    echo $resume [0]["phone"];
    echo $resume [0]["email"];
    echo "Educational Background: <br> <br>";
    echo $resume [1]["school"];
    echo $resume [1]["college"];
    echo $resume [1]["University"];
    echo "Skills:<br> <br>";
    echo $resume [2]["skill1"];
    echo $resume [2]["skill2"];
    echo $resume [2]["skill3"];
    ?>

    