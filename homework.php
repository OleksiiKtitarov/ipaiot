<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>PHP Form</title>
</head>
<body>
    <main>
            <?
            $file = 'results.txt';
            echo(file_get_contents($file));
        ?>
            <form action="homework.php" method="post">
                <div>
                    <label for="name">Name:</label>
                    <input type="text" name="name" required="required" placeholder="Enter your name" />
                </div>

                <div>
                    <label for="name">Email:</label>
                    <input type="email" name="email" required="required" placeholder="Enter your email" />
                </div>

                <input type="submit" value="Submit">

            </form>
        

            <?php
                
            
                $name = $_POST['name'];
                $email = $_POST['email'];
                
                
                file_put_contents($file, $name.' '.$email);

                // show the $name and $email
               
                
            ?>

        
    </main>
</body>

</html>
