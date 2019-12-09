<?php 
$to  = "<andrei.grosu.96@mail.ru>";

$subject = "Заказ на сайте MO-ZABORY.RU"; 

$message = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width"/>

    <!-- For development, pass document through inliner -->

    <style type="text/css">

    /* Your custom styles go here */
* {
  margin: 0;
  padding: 0;
  font-size: 100%;
  font-family: "Avenir Next", "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif;
  line-height: 1.65; }

img {
  max-width: 100%;
  margin: 0 auto;
  display: block; }

body,
.body-wrap {
  width: 100% !important;
  height: 100%;
  background: #efefef;
  -webkit-font-smoothing: antialiased;
  -webkit-text-size-adjust: none; }

a {
  color: #71bc37;
  text-decoration: none; }

.text-center {
  text-align: center; }

.text-right {
  text-align: right; }

.text-left {
  text-align: left; }

.button {
  display: inline-block;
  color: white;
  background: #71bc37;
  border: solid #71bc37;
  border-width: 10px 20px 8px;
  font-weight: bold;
  border-radius: 4px; }

h1, h2, h3, h4, h5, h6 {
  margin-bottom: 20px;
  line-height: 1.25; }

h1 {
  font-size: 32px; }

h2 {
  font-size: 28px; }

h3 {
  font-size: 24px; }

h4 {
  font-size: 20px; }

h5 {
  font-size: 16px; }

p, ul, ol {
  font-size: 16px;
  font-weight: normal;
  margin-bottom: 20px; }

.container {
  display: block !important;
  clear: both !important;
  margin: 0 auto !important;
  max-width: 580px !important; }
  .container table {
    width: 100% !important;
    border-collapse: collapse; }
  .container .masthead {
    padding: 80px 0;
    background: #71bc37;
    color: white; }
    .container .masthead h1 {
      margin: 0 auto !important;
      max-width: 90%;
      text-transform: uppercase; }
  .container .content {
    background: white;
    padding: 30px 35px; }
    .container .content.footer {
      background: none; }
      .container .content.footer p {
        margin-bottom: 0;
        color: #888;
        text-align: center;
        font-size: 14px; }
      .container .content.footer a {
        color: #888;
        text-decoration: none;
        font-weight: bold; }

    </style>
</head>
<body>
<table class="body-wrap">
    <tr>
        <td class="container">

            <!-- Message start -->
            <table>
                <tr>
                    <td align="center" class="masthead">

                        <h1>MO-ZABORY.RU - Заказ на сайте</h1>

                    </td>
                </tr>
                <tr>
                    <td class="content">

                        <h2>Здравствуйте</h2>

                        <p>На сайте был сделан заказ на "'.$_POST['type'].'"</p>

                          <table class="layout" cellspacing="0">
                                 <tr>
                                    <td class="col1">Тип работ</td>
                                    <td class="col2">'.$_POST['type'].'</td>
                                </tr>
                                <tr>
                                    <td class="col1">Имя</td>
                                    <td class="col2">'.$_POST['name'].'</td>
                                </tr>
                                <tr>
                                    <td class="col1">Телефон</td>
                                    <td class="col2">'.$_POST['phone'].'</td>
                                </tr>
                                 <tr>
                                    <td class="col1">Время когда удобно с ним связатся</td>
                                    <td class="col2">'.$_POST['time'].'</td>
                                </tr>
                                <tr>
                                    <td class="col1">Email</td>
                                    <td class="col2">'.$_POST['email'].'</td>
                                </tr>
                          </table>

                    </td>
                </tr>
            </table>

        </td>
    </tr>
    <tr>
        <td class="container">

            <!-- Message start -->
            <table>
                <tr>
                    <td class="content footer" align="center">
                        <p>Sent by <a href="#">MO-ZABORY.RU</a>, Все права защищены</p>
                        <p><a href="mailto:site@mo-zabory.ru>site@mo-zabory.ru</a></p>
                    </td>
                </tr>
            </table>

        </td>
    </tr>
</table>
</body>
</html>';


$message2 = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width"/>

    <style type="text/css">

    * {
  margin: 0;
  padding: 0;
  font-size: 100%;
  font-family: "Avenir Next", "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif;
  line-height: 1.65; }

img {
  max-width: 100%;
  margin: 0 auto;
  display: block; }

body,
.body-wrap {
  width: 100% !important;
  height: 100%;
  background: #efefef;
  -webkit-font-smoothing: antialiased;
  -webkit-text-size-adjust: none; }

a {
  color: #71bc37;
  text-decoration: none; }

.text-center {
  text-align: center; }

.text-right {
  text-align: right; }

.text-left {
  text-align: left; }

.button {
  display: inline-block;
  color: white;
  background: #71bc37;
  border: solid #71bc37;
  border-width: 10px 20px 8px;
  font-weight: bold;
  border-radius: 4px; }

h1, h2, h3, h4, h5, h6 {
  margin-bottom: 20px;
  line-height: 1.25; }

h1 {
  font-size: 32px; }

h2 {
  font-size: 28px; }

h3 {
  font-size: 24px; }

h4 {
  font-size: 20px; }

h5 {
  font-size: 16px; }

p, ul, ol {
  font-size: 16px;
  font-weight: normal;
  margin-bottom: 20px; }

.container {
  display: block !important;
  clear: both !important;
  margin: 0 auto !important;
  max-width: 580px !important; }
  .container table {
    width: 100% !important;
    border-collapse: collapse; }
  .container .masthead {
    padding: 80px 0;
    background: #71bc37;
    color: white; }
    .container .masthead h1 {
      margin: 0 auto !important;
      max-width: 90%;
      text-transform: uppercase; }
  .container .content {
    background: white;
    padding: 30px 35px; }
    .container .content.footer {
      background: none; }
      .container .content.footer p {
        margin-bottom: 0;
        color: #888;
        text-align: center;
        font-size: 14px; }
      .container .content.footer a {
        color: #888;
        text-decoration: none;
        font-weight: bold; }


    </style>
</head>
<body>
<table class="body-wrap">
    <tr>
        <td class="container">

            <!-- Message start -->
            <table>
                <tr>
                    <td align="center" class="masthead">

                        <h1>MO-ZABORY.RU - Клиент хочет предложить свою цену</h1>

                    </td>
                </tr>
                <tr>
                    <td class="content">

                        <h2>Здравствуйте</h2>

                        <p>Клиент увидел где подешевле и хочет торговатся</p>

                          <table class="layout" cellspacing="0">
                              
                                <tr>
                                    <td class="col1">Имя</td>
                                    <td class="col2">'.$_POST['name2'].'</td>
                                </tr>
                                <tr>
                                    <td class="col1">Телефон</td>
                                    <td class="col2">'.$_POST['phone2'].'</td>
                                </tr>
                                 <tr>
                                    <td class="col1">Предложенная цена</td>
                                    <td class="col2">'.$_POST['price'].'</td>
                                </tr>
                          </table>

                    </td>
                </tr>
            </table>

        </td>
    </tr>
    <tr>
        <td class="container">

            <!-- Message start -->
            <table>
                <tr>
                    <td class="content footer" align="center">
                        <p>Sent by <a href="#">MO-ZABORY.RU</a>, Все права защищены</p>
                        <p><a href="mailto:site@mo-zabory.ru>site@mo-zabory.ru</a></p>
                    </td>
                </tr>
            </table>

        </td>
    </tr>
</table>
</body>
</html>';


$headers  = "Content-type: text/html; charset=utf-8 \r\n"; 
$headers .= "From: <site@mo-zabory.ru>\r\n"; 
$headers .= "Reply-To: <site@mo-zabory.ru>\r\n"; 

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if(isset($_POST['submit'])){
if($_POST['type'] != '' && $_POST['name'] != '' && $_POST['phone'] != '' && $_POST['time']!= '' && $_POST['email']!= ''){
    if(mail($to, $subject, $message, $headers)){
        http_response_code(200);
        echo "Заявка успешно принята! Мы с вами скоро свяжемся!";
    }else{
        http_response_code(500);
        echo "Ошибка отправки формы!";
    }
}else{
    http_response_code(403);
    echo "Ошибка отправки заявки! Попробуйте еще раз!";
}
}
}

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if(isset($_POST['submit2'])){
if(isset($_POST['name2']) && $_POST['name2'] != '' && isset($_POST['phone2']) && $_POST['phone2'] != '' && isset($_POST['price']) && $_POST['price'] != ''){
    if(mail($to, $subject, $message2, $headers)){
        http_response_code(200);
        echo "Заявка успешно принята! Мы с вами скоро свяжемся!";
    }else{
        http_response_code(500);
        echo "Ошибка отправки формы!";
    }
}else{
    http_response_code(403);
    echo "Ошибка отправки заявки! Попробуйте еще раз!";
}
    }
}
?>