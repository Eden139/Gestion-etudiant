<?php

namespace App\Controllers;
use App\Models\Etudiant;

class AjoutPersonne extends BaseController
{
    public function index(): string
    {
        return view('form');
    }
    public function insert(): string
    {

        $model = new Etudiant();
        $nom = $this->request->getVar('name');
        $prenom = $this->request->getVar('firstname');
        $date_naissance = $this->request->getVar('birthday');
        $lieu_naissance = $this->request->getVar('birthlocation');
        $cin = $this->request->getVar('cin');
        $adresse = $this->request->getVar('address');
        $mail = $this->request->getVar('email');
        $phone = $this->request->getVar('tel');
        $nationalite = $this->request->getVar('nationality');
        $sexe = $this->request->getVar('gender');
        $an_b = $this->request->getVar('annee_bacc');
        $nb_b = $this->request->getVar('num_bacc');

        if (empty($nom) || empty($lieu_naissance) || empty($adresse) || empty($nationalite)) {
            redirect('form');
        }
        // $prof = $this->request->getVar('ajoutProf');
        // $Etud = $this->request->getVar('ajoutEtud');
        // $reps = $this->request->getVar('resp');
        // $mat = $this->request->getVar('mat');
        // $etat=$this->request->getVar('state');


        $data = [
            'nom' => $nom,
            'prenoms' => $prenom,
            'date_naissance' => $date_naissance,
            'lieu_naissance' => $lieu_naissance,
            'adresse' => $adresse,
            'cin' => $cin,
            'telephone' => $phone,
            'email' => $mail,
            'genre' => $sexe,
            'annee_bacc' => $an_b,
            'num_bacc' => $nb_b,
            'nationalite' => $nationalite 
        ];

        $model->insert($data, false);
        if ($model) {
            $data = ['etudiant' => $model->findAll()]; 
            return view('list', $data);
        }
        return view('form');
    }
}
