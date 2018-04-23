<?php 
$pdo = new PDO("mysql:host=$servername;dbname=event_db;charset=utf8", $username, $password);
if (isset($this->request->get('imageid'))) {
	$this->response->redirect('even');
	$re= $edit->id;
    $result = $pdo->prepare("SELECT `event_picture` FROM `event` WHERE `id`=7");
    if ($result->execute(array($this->request->get('imageid'))) {
        $row=$result->fetch();
        echo $row['event_picture']; //this prints the image data, transforming the image.php to an image
        }
    } // you can put an "else" here to do something on error....

}