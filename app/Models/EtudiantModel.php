<?php
	namespace App\Models;
	use CodeIgniter\Model;
	class EtudiantModel extends Model
	{
    	protected $table = 'etudiant';
    	protected $primaryKey = 'id_etudiant';
    	protected $allowedFields = ['nom', 
			'prenoms', 
			'date_naissance',
			'lieu_naissance',
			'adresse',
			'cin',
			'telephone',
			'email',
			'annee_bacc',
			'num_bacc',
      'genre',
			'verifier_info'
		];
	}
?>




