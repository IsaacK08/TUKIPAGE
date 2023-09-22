<?php
include "Bot.php";
$bot = new Bot;
$questions = [
    //que es tuki
    "¿qué es tuki?" => "TUKI es un asistente virtual avanzado y versátil.",
    "Que es tuki?" => "TUKI es un asistente virtual avanzado y versátil.",
    "que es tuki?" => "TUKI es un asistente virtual avanzado y versátil.",
    "Qué es tuki?" => "TUKI es un asistente virtual avanzado y versátil.",
    "¿Que es tuki?" => "TUKI es un asistente virtual avanzado y versátil.",
    "¿que es tuki?" => "TUKI es un asistente virtual avanzado y versátil.",
    
    //Plataformas
    "en qué plataformas se encuentra tuki?" => "TUKI está disponible en smartphones, tablets, computadoras, relojes inteligentes, autos de alta gama y televisores.",
    "en que dispositivos se encuentra tuki?" => "TUKI está disponible en smartphones, tablets, computadoras, relojes inteligentes, autos de alta gama y televisores.",
    "en qué dispositivos se encuentra tuki?" => "TUKI está disponible en smartphones, tablets, computadoras, relojes inteligentes, autos de alta gama y televisores.",
    "¿en qué dispositivos se encuentra tuki?" => "TUKI está disponible en smartphones, tablets, computadoras, relojes inteligentes, autos de alta gama y televisores.",

    //name
    "como te llamas?" =>"Mi nombre es TUKI, soy un robot con inteligencia artificial diseñado para ayudarte en absolutamente todo lo que desees",
    "cual es tu nombre?" =>"Mi nombre es TUKI, soy un robot con inteligencia artificial diseñado para ayudarte en absolutamente todo lo que desees",
    "tienes nombre?" =>"Si, Mi nombre es TUKI, soy un robot con inteligencia artificial diseñado para ayudarte en absolutamente todo lo que desees",
    "¿cómo te llamas?" => "Mi nombre es TUKI, ¡un placer!",
    "¿como te llamas?" => "Mi nombre es TUKI, ¡un placer!",
    "cuál es tu nombre?" => "Mi nombre es TUKI, ¡un placer!",
    "¿cual es tu nombre?" => "Mi nombre es TUKI, ¡un placer!",


    //preguntas de estado
    "¿cómo estás?" => "Estoy muy bien, gracias por preguntar ¿y tú, cómo te encuentras el día de hoy?",
    "como estas?" => "Estoy muy bien, gracias por preguntar ¿y tú, cómo te encuentras el día de hoy?",
    "cómo estas?" => "Estoy muy bien, gracias por preguntar ¿y tú, cómo te encuentras el día de hoy?",
    "como estás?" => "Estoy muy bien, gracias por preguntar ¿y tú, cómo te encuentras el día de hoy?",
    "¿qué haces?" => "Estoy esperando que me pidas ayuda en algo :)",
    "que haces?" => "Estoy esperando que me pidas ayuda en algo :)",
    "qué haces?" => "Estoy esperando que me pidas ayuda en algo :)",

    //saludo
    "hola" =>"Hola que tal cómo vas!",
    "un saludo" =>"como te va",
    "hello" =>"un gusto de verte",
 
    //despedida
    "adios" =>"Cuidate",
    "hasta la proxima" =>"¡Nos vemos pronto!",
    "nos vemos" =>"¡Te estaré esperando, un abrazo!",
    "bye" =>"Good bye ♥",
    "see you" =>"See you lader ♥",
    //
    "what is your name?" =>" My name is TUKI",
   


    "tu nombre es?" => "Mi nombre es " . $bot->getName(),
    "tu eres?" => "Yo soy un " . $bot->getGender()
    
];

if (isset($_GET['msg'])) {
   
    $msg = strtolower($_GET['msg']);
    $bot->hears($msg, function (Bot $botty) {
        global $msg;
        global $questions;
        if ($msg == 'hi' || $msg == "hello") {
            $botty->reply('Hola');
        } elseif ($botty->ask($msg, $questions) == "") {
            $botty->reply("Lo siento, hasta el momento estoy en proceso de creación. Solo puedo responder preguntas sobre información acerca de mí. Soy sensible a las tildes y hay preguntas que aún no estoy programado para responder, agradezco tu paciencia.");
        } else {
            $botty->reply($botty->ask($msg,$questions));
        }
    });
}
