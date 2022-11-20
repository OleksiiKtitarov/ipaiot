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
                        <button type="submit" name="submit" class="buttons_form_class" value="Submit" >Send</button>
                        <a href=”javascript:history.go(0)”><button type="rest" class="buttons_form_class" value="Reset">Reset</button></a>
                    </div>
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
              echo file_get_contents('txt/numbers.txt').' '.file_get_contents('txt/emails.txt')."<br>\n";                                  
              echo file_get_contents('txt/topics.txt')."<br>\n";
              echo file_get_contents('txt/responses.txt')."<br>\n";
            ?>
        </div>
    </div>
</div>
<?php
if(isset($_POST['submit'])){
  file_put_contents('txt/nicks.txt', $_POST['nick']);
  file_put_contents('txt/names.txt', $_POST['name']);
  file_put_contents('txt/surnames.txt', $_POST['surname']);
  file_put_contents('txt/numbers.txt', $_POST['number']);
  file_put_contents('txt/emails.txt', $_POST['email']);
  file_put_contents('txt/topicss.txt', $_POST['topic']);
  file_put_contents('txt/responses.txt', $_POST['response']);
  clearstatcache();
  header("Refresh:0");
}
if ($this->session->has_userdata('msg')) {
  $msg = $this->session->userdata('msg');
  $this->session->unset_userdata('msg');
  if (count($msg) && strlen($msg['msg']) > 0)
  {
    echo '<div class="alert alert-' .$msg['type'] .' alert-dismissible" role="alert" style="margin: 20px;"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'.$msg['msg'].'</div>';
  }
}
                                  
                                  
?>
</body>
</html>
