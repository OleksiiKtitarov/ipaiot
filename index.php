<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>All articles</title>
    <link rel="stylesheet" href="screenStyle_php.css">

    <link rel="shortcut icon" href="fig/T.svg" type="image/x-icon">
</head>
<body>


<div class="article_news">

    <div class="box-shadow">
        <div style="">
            <h1 style="text-align: center">Leave your response</h1>
            <form id="opnFrm" class="opnFrm" method="post">
                <div>
                    <input type="text" name="nick" id="nick" placeholder="Nick" class="form_input"><br>
                    <input type="text" name="name" id="name" placeholder="Name" class="form_input"><br>
                    <input type="text" name="surname" id="surname" placeholder="Surname" class="form_input"><br>
                    <input type="email" name="email" id="email" placeholder="your@mail" class="form_input"><br>
                    <input type="text" name="number" id="number" placeholder="your number" class="form_input"><br>

                    <input list="topics"  class="datalist_topics" name="topicss" id="topicss" placeholder="Choose topic">
                    <datalist id="topics">
                        <option value="Page trouble">
                        <option value="Suggestions">
                        <option value="Improvements">
                    </datalist>

                    <div class="response_form">
                        <textarea name="response" id="response" placeholder="Your response"></textarea><br>
                    </div>

                    <div class="buttons_form">
                        <button type="submit" class="buttons_form_class">Send</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>


<div class=article_news">
    <div class="box-shadow">
        <div>
            <?
            $file = 'result.txt';
            $lines = file($file);//file in to an array
//             var_dump($lines);

            $pieces = explode(',', $lines);

//             print_r($pieces[1]);
            echo("Last entered information 4 :\n".$pieces);
//             echo("Last entered information 4 :\n".file_get_contents($file));
            ?>
        </div>
    </div>
</div>




<?php

$nick = $_POST['nick'];
$name = $_POST['name'];
$surname = $_POST['surname'];
$number = $_POST['number'];
$email = $_POST['email'];
$topic = $_POST['topicss'];
$message = $_POST['message'];
$response = $_POST['response'];



// $fruits = array($nick, $name, $surname, $topicss);
// 
                           
// array_push(array, variable);
                           
file_put_contents($file, $nick.' '.$name.' '.$surname.' '.$topic.' '.$number.' '.$email.' '.$response);
// file_put_contents($file,$fruits);

// show the $name and $email


?>


</body>
</html>
