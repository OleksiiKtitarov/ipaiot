<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Response</title>
    <link rel="stylesheet" href="screenStyle_php.css">
</head>
<body>
<script> function myfunction() { location.reload(); } </script>
<div class="article_news">
    <div class="box-shadow">
        <div style="">
            <h1 style="text-align: center">Leave your response</h1>
            <form id="opnFrm" class="opnFrm" method="post">
                <div>
                    <input type="text" name="humidity" id="humidity" placeholder="Humidity"  disabled="disabled" class="form_input"><br>
                </div>
            </form>
            
        </div>
    </div>
</div>
<div class=article_news_last_response" style="padding-left: 5%;
    padding-right: 5%;">
    <div class="box-shadow">
        <div class="last_response">
            <?php
              echo file_get_contents('txt/nicks.txt')."<br>\n";
              echo file_get_contents('txt/names.txt').' '.file_get_contents('txt/surnames.txt')."<br>\n";
              echo file_get_contents('txt/numbers.txt')."<br>\n";
              echo file_get_contents('txt/emails.txt')."<br>\n";                                  
              echo file_get_contents('txt/topicss.txt')."<br>\n";
              echo file_get_contents('txt/responses.txt')."<br>\n";
            ?>
        </div>
    </div>
</div>
<?php
                                    file_put_contents('txt/hum.txt', $_POST['humidity']);
// if(isset($_POST['submit'])){
//   file_put_contents('txt/hum.txt', $_POST['humidity']);
// }                                                                   
?>
</body>
</html>
