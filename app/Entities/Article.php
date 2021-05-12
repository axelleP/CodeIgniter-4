<?php

namespace App\Entities;
use CodeIgniter\Entity;
use CodeIgniter\I18n\Time;

class Article extends Entity {
    protected $attributes = [
        'a_id' => '',
        'a_date_creation' => '',
        'a_nom' => '',
        'a_description' => '',
        'a_prix' => '',
        'a_quantite' => '',
        'a_image' => '',
    ];

    public function __construct(array $data = null) {
        $dateTime = new Time('now');
        $data['a_date_creation'] = $dateTime->toDateString();

        parent::__construct($data);
    }

}
