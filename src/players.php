<?php
phpinfo();
die;
class Players {

    public string $rol;
    public string $points;

    public function __construct (string $rol) {

        $this->rol = $rol;
    }


}