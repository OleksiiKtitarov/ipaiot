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
    echo("Last enterred information 4".file_get_contents($file));
    ?>
    <form method="post">
        <div class="box-shadow">
            <div>
                <label for="name">Name:</label>
                <input type="text" name="name" required="required" placeholder="First name" />

                <label for="surname">Surname:</label>
                <input type="text" name="surname" required="required" placeholder="Last Name" />
            </div>

            <div>
                <label for="name">Email:</label>
                <input type="email" name="email" required="required" placeholder="Enter your email" />
            </div>

            <div>
                <label for="phone">Phone:</label>
                <input type="phone" name="phone" placeholder="your phone" />
            </div>

            <div>
                <input list="topics"  class="datalist_topics" name="Key words" id="key_words" placeholder="Choose topic">
                <datalist id="topics">
                    <option value="Page trouble">
                    <option value="Suggestion">
                    <option value="Improvement">
                </datalist>
            </div>

            <div>
                <label for="message">Message:</label>
                <textarea name="response" id="message" placeholder="Your response"></textarea><br>
            </div>

            <button type="submit" class="buttons_form_class">Send</button>

        </div>


    </form>


    <?php


    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $topics = $_POST['topics'];
    $message = $_POST['message'];



    file_put_contents($file, $name.' '.$surname.' '.$topics.' '.$phone.' '.$email, FILE_APPEND);

                // show the $name and $email


            ?>


</main>
</body>

</html>
