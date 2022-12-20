<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>PHP Form</title>
    <style>
        form {
            box-sizing: content-box;
            display: flex;
            flex-direction: column;
            width: 250px;
            border: black solid 1px;
            padding: 20px;
            border-radius: 5px;
            margin-bottom: 20px;
            -webkit-box-shadow: 6px 6px 8px 0px rgba(34, 60, 80, 0.2);
            -moz-box-shadow: 6px 6px 8px 0px rgba(34, 60, 80, 0.2);
            box-shadow: 6px 6px 8px 0px rgba(34, 60, 80, 0.2);
        }
        body {
            display: flex;
            justify-content: center;
            align-items: flex-start;
            align-items: center;
            flex-direction: column;
        }
        input {
            margin-bottom: 20px;
        }
        input:last-child {
            margin-bottom: 0;
        }
    </style>
</head>
<body>
  
    <form action="dadata.php" method="POST">
      <input type="hidden" name="token" value="6fd633848ef1771b3a89b8d1c18999217891bc8b">
      <input type="hidden" name="secret" value="664d92f14bb495c330c029d1ac6f66029bc053d2">
      <input type="hidden" name="form_name" value="FIO">
		  <strong>Ваше имя<span>*</span></strong>
  		<input type="text" name="user_name" value="" required>
 	  	<strong>Ваше отчество<span>*</span></strong>
  		<input type="text" name="user_second_name" value="" required>
	  	<strong>Ваша фамилия<span>*</span></strong>
  		<input type="text" name="user_last_name" value="" required>
	  	<input type="submit" name="submit" value="Отправить"/>
	  </form>
  
    <form action="dadata.php" method="GET">
      <input type="hidden" name="token" value="6fd633848ef1771b3a89b8d1c18999217891bc8b">
      <input type="hidden" name="secret" value="664d92f14bb495c330c029d1ac6f66029bc053d2">
      <input type="hidden" name="form_name" value="INN">
		  <strong>ИНН юр. лица<span>*</span></strong>
  		<input type="number" name="inn" value="" required>
	  	<input type="submit" name="submit" value="Отправить"/>
	  </form>
  
</body>
</html>

