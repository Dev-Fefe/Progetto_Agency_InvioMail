<!DOCTYPE html>
<html lang="it">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Conferma di Iscrizione alla Newsletter</title>
<style>
    /* Stili di base per la struttura */
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
    }
    .container {
        width: 100%;
        max-width: 600px;
        margin: 20px auto;
        background-color: #ffffff;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    .header {
        background-color: #007BFF;
        color: #ffffff;
        padding: 20px;
        text-align: center;
    }
    .content {
        padding: 20px;
        color: #333333;
    }
    .footer {
        background-color: #f1f1f1;
        color: #666666;
        text-align: center;
        padding: 10px;
        font-size: 12px;
    }
    .button {
        display: inline-block;
        padding: 10px 20px;
        margin-top: 20px;
        background-color: #007BFF;
        color: #ffffff;
        text-decoration: none;
        border-radius: 5px;
    }
</style>
</head>
<body>
    <div class="container">
        <!-- Header -->
        <div class="header">
            <h1>Benvenuto nella nostra Newsletter!</h1>
        </div>

        <!-- Contenuto -->
        <div class="content">
            <p>Ciao, {{$name}}</p>
            <p>Grazie per esserti iscritto alla nostra newsletter! Siamo entusiasti di averti con noi.</p>
            <p>Ti risponderemo al più presto con contenuti interessanti e aggiornamenti esclusivi.</p>

            <a href="#" class="button">Scopri di più</a>
        </div>

        <!-- Footer -->
        <div class="footer">
            <p>Se hai domande, non esitare a <a href="mailto:support@example.com">contattarci</a>.</p>
            <p>Copyright © 2024 - La Nostra Azienda</p>
        </div>
    </div>
</body>
</html>
