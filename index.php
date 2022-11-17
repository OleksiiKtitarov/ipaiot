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
    <form id="opnFrm" class="opnFrm" method="post">
        <div class=article_news">
            <div class="box-shadow">
                <h1 style="text-align: center">Leave your response here</h1>
                <input class="form_input" type="text" name="name" required="required" placeholder="Name" /><br>

                <!--                    <br><label for="surname">Surname:</label>-->
                <input class="form_input" type="text" name="surname" required="required" placeholder="Surname" /><br>

                <input class="form_input" type="email" name="email" required="required" placeholder="your@email" /><br>

                <input class="form_input" type="text" name="phone" placeholder="your phone" /><br>

                <input type="text"  class="datalist_topics" name="Key words" id="topics" placeholder="Choose topic">


                <textarea name="response" id="response" placeholder="Your response"></textarea><br>

                <button type="submit" class="buttons_form_class">Send</button>

            </div>
        </div>

    </form>
    <br><div class=article_news">
        <div class="box-shadow">
            <div>
                <?
                $file = 'results.txt';
                echo("Last entered information 4 :\n".file_get_contents($file));
                ?>
            </div>
        </div>
    </div>




    <?php


    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $topics = $_POST['topics'];
    $message = $_POST['message'];



    file_put_contents($file, $name.' '.$surname.' '.$topics.' '.$phone.' '.$email);

    // show the $name and $email


    ?>


</main>
</body>

</html>
