<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>Aboclear</title>
</head>
<?php

if ($_POST) {

$ch = curl_init();



curl_setopt($ch, CURLOPT_URL, 'https://api.openai.com/v1/completions');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);

$post_data = array (
    "model"=> "text-davinci-001",
    "prompt"=> $_POST['question'],
    "temperatur"=> 0.4,
    "max_tokens"=> 64,
    "top_p"=> 1,
    "frequency_penalty"=> 1,
    "presence_penalty"=> 1
);

$post_data = json_encode($post_data);
curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);

$headers = array();
$headers[] = 'Content-Type: application/json';
$headers[] = 'Authorization:Bearer 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';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);
var_dump($result);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
$result = json_decode($result=true);

curl_close($ch);


}
?>

<script src="node_modules/jquery/dist/jquery.min.js"></script>
<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

<div class="container">
    <div class="row form-group">
        <div class="col-xs-12 col-md-offset-2 col-md-8 col-lg-8 col-lg-offset-2">
            <div class="panel panel-primary">
                <div class="panel-body body-panel">
                    <ul class="chat">
                        <?php 
                        if (isset($_POST['question']) && !empty($_POST['question'])) {
                        ?>
                        <li class="right clearfix"><span class="chat-img pull-right">
                            <img src="images/profil-picture.png" alt="User Avatar" class="img-circle" style="width:20px" />
                        </span>
                            <div class="chat-body clearfix">
                                <div class="header">
                                    <small class=" text-muted"><span class="glyphicon glyphicon-time"></span><?php echo date('H:i'); ?></small>
                                    <strong class="pull-right primary-font">You</strong>
                                </div>
                                <p>
                                    <?php 
                                    echo $_POST['question'];
                                    ?>
                                </p>
                            </div>
                        </li>
                        <?php } ?>
                        <?php
                        if(isset($result) && !empty($result)){
                        ?>
                        <li class="left clearfix"><span class="chat-img pull-left">
                            <img src="images/profil-picture.png" alt="User Avatar" class="img-circle" style="width:20px" />
                        </span>
                        <div class="chat-body clearfix">
                            <div class="header">
                                <strong class="primary-font">Answer</strong><small class="pull-right text-muted">
                                    <span class="glyphicon glyphicon-time"></span><?php echo date('H:i'); ?></small>
                            </div>
                            <p>
                                <?php if (isset($result['choices'][0]['text'])) {
    echo $result['choices'][0]['text'];
}
 ?>
                            </p>
                        </div>
                        </li>
                        <?php } ?>
                    </ul>
                </div>
                <form method="post" name="chatform">
                    <div class="panel-footer clearfix">
                        <textarea class="form-control" rows="3" name="question" id="question"></textarea>
                        <span class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-xs-12" style="margin-top: 10px" >
                            <button type="submit" class="btn btn-warning btn-lg btn-block" id="btn-chat" name="submit">Submit</button>
                        </span>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>