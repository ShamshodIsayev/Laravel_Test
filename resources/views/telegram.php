<?

$name = $_POST['name'];
$email = $_POST['email'];
$company = $_POST['company'];
$number = $_POST['project'];

$token = "1536487309:AAEw5AeJqzciBfGscYaZ6O3O6Ket33Wdt_0";

$chat_id = "149820072";

$arr = array(
    'Имя пользователя: ' => $name,
    'Email: ' => $email,
     'Компания: ' => $company,
     'Телефон: ' => $number,
);

foreach($arr as $key => $value){
    $txt .= "<b>".$key."</b>".$value."%0A";
};

$sendTotelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");




require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

$name = $_POST['name'];
$email = $_POST['email'];
$company = $_POST['company'];
$number = $_POST['project'];


ST['user_com'];

$mail->isSMTP();
$mail->Host = 'smtp.mail.ru';

$mail->SMTPAuth = true;
$mail->Username = 'abdushamshod@mail.ru';
$mail->Password = 'mail__ru';
$mail->SMTPSecure = 'ssl';

$mail->Port = 465;

$mail->setFrom('abdushamshod@mail.ru');
$mail->addAddress('abdushamshod@mail.ru');
$mail->addAddress('abdushamshod@gmail.com');



$mail->isHTML(true);


$mail->Subject = 'Заявка с сайта';

$mail->Body = '' .$name. ' оставил заявку,  Его почта : ' .$email. ' , Телефон :' .$number. '   ' .$company;

$mail->AltBody = '';




if($sendTotelegram ){
    header('Location: index.html');
}else{
    echo "error";
}



?>