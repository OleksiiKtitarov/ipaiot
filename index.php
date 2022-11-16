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
            echo("Last enterred information".file_get_contents($file));
        ?>
            <form  method="post">
            <div class="box-shadow">
                   <div>
                       <label for="name">Name:</label>
                       <input type="text" name="name" required="required" placeholder="First name" />
                       
                       <label for="name">Surname:</label>
                       <input type="text" name="surname" required="required" placeholder="Last Name" />
                   </div>
   
                   <div>
                       <label for="name">Email:</label>
                           <input type="mail" name="mail" required="required" placeholder="your@email" />    
                   </div>
   
                   <div>
                       <label for="name">Phone:</label>
                           <input type="phone" name="phone" placeholder="your phone" />    
                   </div>
   
                   <div>
                       <label for="name">Topic:</label>
                           <input type="text" name="topic" required="required" placeholder="Topic of the message" />    
                   </div>
   
                   <div>
                       <label for="name">Message:</label>
                           <input type="text" name="message" required="required" placeholder="Topic of the message" />    
                   </div>
   
                   <div>
                       <label for="name">Email:</label>
                       <input type="email" name="email" required="required" placeholder="Enter your email" />
                   </div>
   
                   <input type="submit" value="Submit">
                    
            </div>
                

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
