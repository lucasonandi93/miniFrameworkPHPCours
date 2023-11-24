<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Bienvenue sur la page d'accueil</h1>
<nav>
    <ul>
        <li><a href="/">Accueil</a></li>
        <li><a href="/random-number">Nombre aléatoire</a></li>
        <li><a href="/even-numbers/0/10">Nombres pairs</a></li>
    </ul>
</nav>

<form action="/even" method="post">
    <label for="number">Entrez un nombre :</label>
    <input type="number" id="number" name="number">
    <input type="submit" value="Vérifier">
</form>

<?php if (isset($message)) echo  $message?>
</body>
</html>