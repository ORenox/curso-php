<?php

    declare(strict_types=1);
    
    $title="la proxima peli de marvel";

    function get_data( string $url) : array
    {

        $result = file_get_contents($url); //SI SOLO QUIERES HACER UN GET SE PUEDE USAR MÁS RAPIDO EL file_get_contents

        $data = json_decode($result,true);
        return $data;
    }

    function render_template (string $template, array $data = [] ){

        extract($data);
        require "templates/$template.php";
    }

    function get_until_message (int $days ): string
    {
        return match (true){
            $days === 0 => "Hoy se estrena 🥳",
            $days === 1 => "Mañana se estrena 💥",
            $days <7 => "Falta una semana 😶‍🌫️",
            $days <30 => "Este mes se estrena 🤧",
            default  => " $days días para el estreno 🫥",
        };
    }
?>
    