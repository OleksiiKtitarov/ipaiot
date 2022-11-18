<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>All articles</title>
    <link rel="stylesheet" href="screenStyle_php.css">

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
                        <button type="submit" class="buttons_form_class" value="Submit">Send</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>


<div class=article_news" style="width: 40%">
    <div class="box-shadow">
        <div class="opnFrm">
            <?
            $file = 'result.txt';
            $lines = file($file);//file in to an array

//<!--            echo("Last entered information 4 :\n".file_get_contents($file));-->


            $file_nick = 'nick.txt';
            $lines_nick = file($file_nick);//file in to an array

            echo("Last entered information 4 :\n".file_get_contents($file_nick));

            $file_name = 'name.txt';
            $lines_name = file($file_name);//file in to an array

            $file_surname = 'surname.txt';
            $lines_surname = file($file_surname);//file in to an array

            $file_number = 'number.txt';
            $lines_number = file($file_number);//file in to an array

            $file_email = 'email.txt';
            $lines_email = file($file_email);//file in to an array

            $file_topicss = 'topicss.txt';
            $lines_topicss = file($file_topicss);//file in to an array

            $file_message = 'message.txt';
            $lines_message = file($file_message);//file in to an array

            $file_response = 'response.txt';
            $lines_response = file($file_response);//file in to an array
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


file_put_contents($file_nick, '$nick');

file_put_contents($file_name, '$name');

file_put_contents($file_surname, '$surname');

file_put_contents($file_number, '$number');

file_put_contents($file_email, '$email');

file_put_contents($file_topicss, '$topic');

file_put_contents($file_message, '$message');

file_put_contents($file_response, '$response');


file_put_contents($file, 'nick:'.$nick.' name:'.$name.' surname:'.$surname.' topic:'.$topic.' number:'.$number.' mail:'.$email.' response:'.$response);
// file_put_contents($file,$fruits);

// show the $name and $email
header("Refresh:0");

?>


</body>
</html>
