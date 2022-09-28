<?php

trait Position {
    public $position = [];

    public function setPosition($scaffale, $colonna, $piano) {
        $this->position = [
            "scaffale" => isset($scaffale) ? $scaffale : 'sconosciuto', 
            "colonna" => isset($colonna) ? $colonna : 'sconosciuto',
            "piano" => isset($piano) ? $piano :'sconosciuto'
        ];
    }
}