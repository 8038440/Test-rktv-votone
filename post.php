<?
if((isset($_POST['tel'])&&$_POST['tel']!="")||(isset($_POST['email'])&&$_POST['email']!="")){ 
        $to = 'yrfin.chert@mail.ru'; //Почта получателя
        $subject = 'Заявка: страница новостей'; 
        $message = '
                <html>
                    <head>
                        <title>'.$subject.'</title>
                    </head>
                    <body>
						<p>Клиент</p>
						<p>Имя: '.$_POST['name'].'</p>
						<p>Телефон: '.$_POST['tel'].'</p>
						<p>E-mail: '.$_POST['email'].'</p>						
                    </body>
                </html>'; 
        $headers  = "Content-type: text/html; charset=utf-8 \r\n"; 
        $headers .= "From: ЭнергоСервис <noreplay@vot.one/utl>\r\n"; //Важно указать адрес откуда отправляется форма
        mail($to, $subject, $message, $headers);
}
?>