<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace CondeLua\Bank\Model\Company;

/**
 * Description of VideoEditor
 *
 * @author arauj
 */
class VideoEditor extends Employee{
    //put your code here
    public function calculateBonus() {
        return $this->getSalary() * 0.05;
    }

}
