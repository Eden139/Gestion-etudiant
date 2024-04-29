<?php
	namespace App\Models;
	use CodeIgniter\Model;
	class EtudiantInscritModel extends Model
	{
    	protected $table = 'etudiant_inscrit';
    	protected $primaryKey = 'id_inscrit';
    	protected $allowedFields = 
		[	'id_etudiant', 
			'id_inscription'
		];
	}
?>