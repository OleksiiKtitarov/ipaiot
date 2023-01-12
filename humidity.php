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
            <h1 style="text-align: center">Humidity</h1>
            <form id="opnFrm" class="opnFrm" method="post">
                <div>
                    <input type="text" name="humidity" id="humidity" placeholder="Humidity"  disabled="disabled" class="form_input"><br>
                </div>
            </form>
            
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
