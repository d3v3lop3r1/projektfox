<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/bootstrap-min.css">
    <title>Projektfox</title>
</head>
<body>
    @php
        
        $client = new MongoDB\Client(env(MONGO_DB_URL));

        $db = $client->test;

    @endphp
    <div class="container d-flex w-100 h-100 p-3 mx-auto flex-column">
        <div class="inner home-page">
            <h1>Üdvözöljük a Projektfox oldalunkon</h1>
        </div>
    </div>
</body>
</html>