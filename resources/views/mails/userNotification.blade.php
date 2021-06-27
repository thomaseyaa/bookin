<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Notification de l'utilisateur</title>
</head>
<body>
<div>
    <h2>Bonjour {{ $userReceive['email'] }} !</h2>
    <p>Merci pour votre souscription sur Bookin, vous pouvez dès maintenant profiter de votre abonnement 🥳</p>
    <h4>Informations relatives à votre abonnement:</h4>
    <p>Email : {{ $userReceive['email'] }}</p>
    <p>Abonnement : {{ $userReceive['plan'] }}</p>
    <p>Prix : {{ $userReceive['price'] }}</p>
    <p>L'équipe Bookin.</p>
</div>
</body>
</html>