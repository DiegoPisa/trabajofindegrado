<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
    box-sizing: border-box;
    font-family: "Trebuchet MS", sans-serif;
}

form {
    width: 550px;
    padding: 16px;
    border-radius: 10px;
    margin: auto;
    background-color: #ccc;
}

form label {
    width: 200px;
    font-weight: bold;
    display: inline-block;
}

form input[type="text"],
form input[type="number"],
form select {
    width: 300px;
    padding: 3px 10px;
    border: 1px solid #f6f6f6;
    border-radius: 3px;
    background-color: #f6f6f6;
    margin: 8px 0;
    display: inline-block;
}

form label[for="si"],
form label[for="no"] {
    width: 50px;
}

form input[type="radio"] {
    width: 30px;
    border: 1px solid #f6f6f6;
    background-color: #f6f6f6;
    margin: 8px 0;
}

form button {
    width: 505px;
    padding: 8px 16px;
    margin-top: 12px;
    border: 1px solid #000;
    border-radius: 5px;
    display: block;
    color: #fff;
    background-color: #000;
    font-weight: bold;
}

form button:hover {
    cursor: pointer;
}

form div.error {
    width: 505px;
    padding: 8px 16px;
    border: 1px solid red;
    border-radius: 3px;
    background-color: red;
    margin: 8px 0;
    color: white;
    font-size: small;
    display: none;
}

    </style>
    <script src="compra.js"></script>
</head>
<body>
    <form action="#" method="post" id="form">
        <label for="fecha">Fecha</label>
        <input type="date" name="fecha" id="fecha" required>

        <label for="cocinero">Cocinero</label>
        <input type="text" name="cocinero" id="cocinero" pattern="[A-Z]{2}\W[0-9]{4}" >

        <label for="destinatario">Destinatario</label>
        <input type="text" name="destinatario" id="destinatario" pattern="[A-Z]{2,3}_[a-z]{1,25}:[0-9]{4}" >

        <label for="gramos">Gramos</label>
        <input type="number" name="gramos" id="gramos" min="100" max="5000">

        <label for="composicion">Composicion</label>
        <input type="text" name="composicion" id="composicion" pattern="[0-9]{3,4}g[A-Z]{1,2}[0-9]?[A-Z]{1,2}[0-9]?">
        <label for="num_cuen">Numero de cuenta</label>
        <input type="text" name="num_cuen" id="num_cuen" pattern="[A-Z]{2}[0-9]{2}-[0-9]{12}-[0-9]{2}" required>
        <p id="menfinal"></p>

        <div id="mensaje" class="error">Mensaje de error</div>

        <button type="submit" value="Enviar" id="enviar">Enviar</button>
        </form>
       

       
</body>
</html>