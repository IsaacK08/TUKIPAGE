<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TUKICHAT</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
    <div class="container">
       
            <div class="chatbox">
                    <div class="header">
                        <h4> <img src='img/tukiface.jpg' class='imgRedonda'/> TukiChat </h4>
                                    
                    </div>
                    
                        <div class="body" id="chatbody">
                        <p class="alicia">¡Hola soy Tuki!, Estoy aquí para responder cualquier pregunta que quieras. Espero poder ayudarte.</p>
                            <div class="scroller"></div>
                        </div>

                    <form class="chat" method="post" autocomplete="off">
                    
                                <div>
                                    <input type="text" name="chat" id="chat" placeholder="Escribe un mensaje...">
                                </div>
                                <div>
                                    <input type="submit" value="Enviar" id="btn">
                                </div>
                    </form>
        </div>
    </div>
    
    <script src="app.js"></script>
        
</body>

</html>