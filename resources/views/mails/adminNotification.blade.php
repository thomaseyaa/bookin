<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Notification de l'admin</title>
</head>
<body>
<div>
    <h2>Un client s'est abonné 🥳!</h2>
    <h4>Informations relatives à l'abonnement:</h4>
    <p>Email : {{ $adminReceive['email'] }}</p>
    <p>Abonnement : {{ $adminReceive['plan'] }}</p>
    <p>Prix : {{ $adminReceive['price'] }}</p>
    <p>Consulter votre compte <a href="https://dashboard.stripe.com/test/payments">stripe</a> pour plus d'information.</p>
</div>
</body>
</html>