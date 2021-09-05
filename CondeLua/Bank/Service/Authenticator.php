<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace CondeLua\Bank\Service;

use CondeLua\Bank\Model\Abstraction\Authenticable;

/**
 * Description of Authenticator
 *
 * @author arauj
 */
class Authenticator{

    public function tryToLogin(Authenticable $authenticable, string $password) {
        if ($authenticable->beAbleToAuthenticate($password)) {

            echo "{$this->loading()} usuário logado no sistema" . PHP_EOL;
        } else {
            echo "{$this->loading()} senha incorreta" . PHP_EOL;
        }
    }

    private function loading() {
        $contador = 0;
        for ($contador = 0; $contador <= 6; $contador++) {
            echo ".";
            usleep(250000);
        }
    }

}
