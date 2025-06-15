<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Lecture 2 of CIP1102</h1>
    <h2>Defining Functions</h2>
    <?php


    function displayCompany($Company1, $Company2, $Company3) {
        echo "<p>$Company1</p>";
        echo "<p>$Company2</p>";
        echo "<p>$Company3</p>";
    }
        displayCompany("nokia", "samsung" , "iphone");
    ?>
    <h2> RETURNING VALUES</h2>
    <?php
    function averageNumbers($a, $b, $c) {
        $SumofNumbers = $a + $b + $c;
        $Results = $SumofNumbers / 3;
        return $Results;
    }
    $a = 1;
    $b = 2;
    $c = 3;
    echo "Average Number: ";
    echo $a, "+", $b, "+", $c, "=", averageNumbers(1, 2, 3);

    ?>

    <h2>If Statements</h2>
    <?php
    $ExampleVar = 5;
    if ($ExampleVar = 5) {
        $ExampleVar = True;
        echo "<p>The condition evaluates to true</p>";
        echo '<p>$ExampleVar is equal to', "$ExampleVar.</p>";
        echo "<p>Each of these lines will be printed.</p>";

    }
    echo "<p>This is statement always execute after the if statements</p>"
    ?>

    <h2>Drill 1</h2>
    <?php
    $tommorrow = "Monday";

    if ($tommorrow == "Friday") {
        echo "<p>Yes, tommorrow if Friday</p>";

    }

    else{
        echo "<p>No, Tommororw is not Friday</p>";
    }
    ?>
    
    <h2>Drill 2</h2>
    <?php
    $vowel = "a";  
    if ($vowel == "a") {
        echo "<p>The consonent has a vowel</p>";
    }
    else if ($vowel == "e") {
        echo "<p>The consonent has e vowel</p>";
    }
    else if ($vowel == "i") {
    echo "<p>The consonent has i vowel</p>";
    }
    else if ($vowel == "o") {
    echo "<p>The consonent has o vowel</p>";
    }
    else if ($vowel == "u") {
    echo "<p>The consonent has u vowel</p>";
    }
    else {
        echo "<p>The consonent has no vowel</p>";
    }
    ?>

    <h2>Drill 3</h2>
    <?php
    $vowel = "a";  

    switch ($vowel) {
        case "a":
            echo "<p>The indicated variable has a vowel</p>";
            break;
        case "e":
            echo "<p>The indicated variable has e vowel</p>";
            break;
        case "i":
            echo "<p>The indicated variable has i vowel</p>";
            break;
        case "o":
            echo "<p>The indicated variable has o vowel</p>";
            break;
        case "u":
            echo "<p>The indicated variable has u vowel</p>";
            break;
        default:
            echo "<p>The indicated variable has no vowel</p>";
            break;
    }
?>

    <h2>While Statements</h2>
    <?php
    $Count = 1;
    while ($Count <= 5) {
        echo "$Count<br />";
        ++$Count;
    }

    echo "<p> You have printed 5 numbers.</p>"
?>

<h1>Drill 4</h1>
    <table border="1">
        <tr>
            <?php
                $Number = 1;
                while ($Number <= 10) {
                echo "<td>$Number</td>";
            $Number++;
            }
            ?>
        </tr>
    </table>



</body>
</html>
