<!doctype html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=yes, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- заголовок сторінки, змінна $title з php  -->
    <title> Enter u data again </title>  
</head>
<body>

<!-- переходимо до /secret.php та зберігаємо дані які ввів користувач-->
<!-- method="post" зберігає дані які ввів користувач-->
<form action="/secret.php" method="post">
    <input type="text" name="login" placeholder="login">
    <input type="password" name="pass" placeholder="password">
    <!-- після натискання (Log in button), спрацьовує "submit", код переходить до action="/secret.php" method="post"-->
    <button type="submit">Log in</button> 
</form>

</body>
</html>
