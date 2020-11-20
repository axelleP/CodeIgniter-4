<?php

namespace App\Models;

use CodeIgniter\Model;

class Article extends Model {

    protected $table = 'article';
    protected $primaryKey = 'a_id';
    protected $returnType = 'App\Entities\Article';
//    protected $useSoftDeletes = true;
    protected $allowedFields = ['a_date_creation', 'a_nom', 'a_description', 'a_prix', 'a_quantite'];
//    protected $useTimestamps = false;
//    protected $createdField  = 'created_at';
//    protected $updatedField  = 'updated_at';
//    protected $deletedField  = 'deleted_at';
    //tableau de règles de validation
    protected $validationRules = [];
    //tableau de messages d'erreur personnalisés
    protected $validationMessages = [];
    protected $skipValidation = false;//détermine si on doit valider ou non l'objet lors d'une modification
    protected $beforeInsert = [];//il existe d'autres fonctions
}
