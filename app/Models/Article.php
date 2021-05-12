<?php

namespace App\Models;

use CodeIgniter\Model;

class Article extends Model {

    protected $table = 'article';
    protected $primaryKey = 'a_id';
    protected $returnType = 'App\Entities\Article';
    protected $allowedFields = ['a_date_creation', 'a_nom', 'a_description', 'a_prix', 'a_quantite', 'a_image'];

    //tableau de règles de validation
    protected $validationRules = [
        'a_date_creation' => 'required|valid_date',
        'a_nom' => 'required',
        'a_description' => 'required',
        'a_prix' => 'required',
        'a_quantite' => 'required',
        'a_image' => 'required',
    ];

    //tableau de messages d'erreur personnalisés
    protected $validationMessages = [
        'a_date_creation' => [
            'required'   => 'La date de création est obligatoire',
        ],
        'a_nom' => [
            'required'   => 'Le nom est obligatoire',
        ],
        'a_description' => [
            'required'   => 'La description est obligatoire',
        ],
        'a_prix' => [
            'required'   => 'Le prix est obligatoire',
        ],
        'a_quantite' => [
            'required'   => 'La quantité est obligatoire',
        ],
        'a_image' => [
            'required'   => "L'image est obligatoire",
        ],
    ];

}
