<?php
	namespace App\Models;
	use CodeIgniter\Model;

    class InscriptionModel extends Model
	{
    	protected $table = 'inscription';
    	protected $primaryKey = 'id_inscription';
    	protected $allowedFields = 
		[	'id_etudiant',
			'num_inscription', 
			'grade', 
			'niveau',
			'id_parcours',
			'statut'
		];
	}
?>
