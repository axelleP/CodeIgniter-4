<?php

namespace App\Entities;
use CodeIgniter\Entity;

class Article extends Entity {
    public function getNom() {
        return $this->a_nom . '_OOOOOK2';
    }

}
