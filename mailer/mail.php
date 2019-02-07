
<?php
    $msg_box = ""; // в этой переменной будем хранить сообщения формы
    $errors = array(); // контейнер для ошибок
    // проверяем корректность полей
    if($_POST['user_name'] == "")    $errors[] = "Поле 'Ваше имя' не заполнено!";
    if($_POST['user_phone'] == "")   $errors[] = "Поле 'Ваш телефон' не заполнено!";
    if($_POST['user_email'] == "")   $errors[] = "Поле 'Ваш e-mail' не заполнено!";
 
    // если форма без ошибок
    if(сообщение отправлено) 
    {
   header("Location: index.html?status=succes");
   }
   else{
   header("Location: contact.php?status=false"); 
   }
     
   // функция отправки письма
    function send_mail($message){
        // почта, на которую придет письмо
        $mail_to = 'for88@mail.ru'; 
        // тема письма
        $subject = "Письмо с обратной связи";
        $mail->setFrom('shura.vanin.1979@mail.ru', 'John Doe');   // От кого письмо 
        $mail->addAddress('for88@mail.ru');     
         
        // заголовок письма
        $headers= "MIME-Version: 1.0\r\n";
        $headers .= "Content-type: text/html; charset=utf-8\r\n"; // кодировка письма
        $headers .= "From: Тестовое письмо <no-reply@test.com>\r\n"; // от кого письмо
         
        // отправляем письмо 
        mail($mail_to, $subject, $message, $headers);
    }
   

?>
