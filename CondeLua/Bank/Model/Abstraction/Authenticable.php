<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace CondeLua\Bank\Model\Abstraction;

/**
 *
 * @author arauj
 */
interface Authenticable {

    //put your code here
    public function beAbleToAuthenticate(string $password): bool;
}
