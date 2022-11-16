<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="screenStyle_php.css">
    <title>PHP Form</title>
</head>
<body>
<main>
    <?
    $file = 'results.txt';
    echo("Last entered information 4 : ".file_get_contents($file));
    ?>
    
    <div class="article_news">

        <div class="box-shadow">
            <div style="">
                <h1 style="text-align: center">Leave your response</h1>
                <form id="opnFrm" class="opnFrm">

                    <input type="text" name="nick" id="nickname" placeholder="Nick" class="form_input"><br>
                    <input type="text" name="name" id="name" placeholder="Name" class="form_input"><br>
                    <input type="text" name="surname" id="surname" placeholder="Surname" class="form_input"><br>
                    <input type="email" name="email" id="email" placeholder="your@mail" class="form_input"><br>
                    <input type="text" name="number" id="number" placeholder="your number" class="form_input"><br>

                    <input type="text"  class="datalist_topics" name="Key words" id="topics" placeholder="Choose topic">


                    <div class="response_form">
                        <textarea name="response" id="response" placeholder="Your response"></textarea><br>
                    </div>

                    <div class="buttons_form">
                        <button type="submit" class="buttons_form_class">Send</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <br><div class=article_news">
        <div class="box-shadow">
            <div>
                
            </div>
        </div>
    </div>




    <?php


    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $phone = $_POST['number'];
    $email = $_POST['email'];
    $topics = $_POST['topics'];
    $message = $_POST['message'];



    file_put_contents($file, $name.' '.$surname);

    // show the $name and $email


    ?>


</main>
</body>

</html>
