<!-- потрапляю сюди, якщо ввожу правильні дані -->
<!doctype html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=yes, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title> my Title </title>  

</head>
<body>

<!-- 3. переходимо до /my_Log_out.php та зберігаємо дані які ввів користувач-->
<!-- 2. method="post" зберігає дані які ввів користувач-->
<form action="/my_Log_out.php" method="post">
    <!-- 1. після натискання (Log in button), спрацьовує "submit", код переходить до action="/my_Log_out.php" -->
    <button type="submit">Log out</button> 
</form>

</body>
</html>
       