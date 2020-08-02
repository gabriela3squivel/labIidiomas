<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mensaje recibido</title>
</head>
<body>
<label for="">De: {{$msg['email']}}</label>
<label for="">Asunto: {{$msg['subject']}}</label>
<label for="">Correo: {{$msg['content']}}</label>
    
</body>
</html>