<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\EtudiantModel;
use App\Models\InscriptionModel;
use App\Models\Etudiant;
use CodeIgniter\Files\File;

class GestionEtudiant extends BaseController
{
  protected $helpers = ['form'];
  public function listsomeone()
    {
        $model = new EtudiantModel();
        $etudiants = $model->findAll();
        foreach($etudiants as $e){
            $id_etd[] = $e['id_etudiant'];
            $name[] = $e['nom'];
            $fname[] = $e['prenoms'];
            $birthday[] = $e['date_naissance'];
            $birthlocation[] = $e['lieu_naissance'];
            $address[] = $e['adresse'];
            $cin[] = $e['cin'];
            $tel[] = $e['telephone'];
            $mail[] = $e['email'];
            $num_bac[] = $e['num_bacc'];
            $year_bac[] = $e['annee_bacc'];
            $nation[] = $e['nationalite'];
        }
        
        foreach($etudiants as $e){
            $data[] = [
                'id_etudiant' => $e['id_etudiant'],
                'nom' => $e['nom'],
                'prenoms' => $e['prenoms'],
                'date_naissance' => $e['date_naissance'],
                'lieu_naissance' => $e['lieu_naissance'],
                'adresse' => $e['adresse'],
                'cin' => $e['cin'],
                'telephone' => $e['telephone'],
                'email' => $e['email'],
                'num_bacc' => $e['num_bacc'],
                'annee_bacc' => $e['annee_bacc'],
                'nationalite' => $e['nationalite'],
                'statut' => $this->exist($e['id_etudiant']),
                'grade' => $this->rec_grade($e['id_etudiant'])
            ];
        }
        return view('list', ['etudiants' => $data]);
    }
    public function exist($id){
        $model = new InscriptionModel();
        $inscrit = $model->where('id_etudiant', $id)->findAll();
        if(!empty($inscrit)){
            $exist = "Inscrit";
        } else {
            $exist = "N'est pas inscrit";
        }
        return $exist;
    }
    public function rec_grade($id){
        $model = new InscriptionModel();
        $inscrit = $model->where('id_etudiant', $id)->findAll();
        if(!empty($inscrit)){
            foreach($inscrit as $i){
                $grade = $i['grade'];
                $grade .= $i['niveau'];
            }
            
        } else {
            $grade = "inconnue";
        }
        return $grade;
    }

    public function someoneregister()
    {
        $grade = $this->request->getvar('grade');
        $niveau = $this->request->getvar('niveau');
        if(empty($grade) and empty($niveau)){
            $grade ="L";
            $niveau ="1";
        }

        $model = new InscriptionModel();
        $model1 = new EtudiantModel();
        
        if($grade === "all" and $niveau="all"){
            return $this->listsomeone();
        }
        $inscrit = $model->where('grade', $grade)->where('niveau', $niveau)->findAll();
        if(empty($inscrit)){
       
            return view('list', ['etudiants' => "vide"]);
            // return $this->listsomeone();
        }
        foreach ($inscrit as $in) {
            $etudiants[] = $model1->where('id_etudiant', $in['id_etudiant'])->findAll()[0];    
        }
        foreach($etudiants as $e){
            $data[] = [
                'id_etudiant' => $e['id_etudiant'],
                'nom' => $e['nom'],
                'prenoms' => $e['prenoms'],
                'date_naissance' => $e['date_naissance'],
                'lieu_naissance' => $e['lieu_naissance'],
                'adresse' => $e['adresse'],
                'cin' => $e['cin'],
                'telephone' => $e['telephone'],
                'email' => $e['email'],
                'num_bacc' => $e['num_bacc'],
                'annee_bacc' => $e['annee_bacc'],
                'nationalite' => $e['nationalite'],
                'statut' => $this->exist($e['id_etudiant']),
                'grade' => $this->rec_grade($e['id_etudiant'])
            ];
        }
        return view('list', ['etudiants' => $data]);
    }  
/* public function listsomeone()
  {
    $model = new EtudiantModel();
    $etudiants = $model->findAll();
    return view('list', ['etudiants' => $etudiants]);
  }
  public function form_modify()
  {
    $id = $this->request->getvar('id');
    echo "id = $id";
    $model  = new EtudiantModel();
    $model1 = new InscriptionModel();
    $etudiants   = $model->where('id_etudiant', $id)->find();
    $inscription = $model1->where('id_etudiant', $id)->find();
    print_r($etudiants);
    echo "<br>TTTTTTT<br>";
    print_r($inscription);
    return view('form_modify', ['etudiants' => $etudiants, 'id' => $id, 'inscription' => $inscription]);
  }

  public function someoneregister()
  {
    $grade = $this->request->getvar('grade');
    $niveau = $this->request->getvar('niveau');
    if (empty($grade) and empty($niveau)) {
      $grade = "L";
      $niveau = "1";
    }

    $model = new InscriptionModel();
    $model1 = new EtudiantModel();

    if ($grade === "all" and $niveau = "all") {
      return $this->listsomeone();
    }
    $inscrit = $model->where('grade', $grade)->where('niveau', $niveau)->findAll();
    if (empty($inscrit)) {

      return view('list', ['etudiants' => "vide"]);
      // return $this->listsomeone();
    }
    foreach ($inscrit as $in) {
      $etudiants[] = $model1->where('id_etudiant', $in['id_etudiant'])->findAll()[0];
    }
    return view('list', ['etudiants' => $etudiants]);
  }*/
  public function form_inscription()
  {
    return view('form_inscription');
  }

  public function form_ajout_etudiant()
  {
    return view('formulaire');
  }
  public function insert(): string
  {
    ini_set('memory_limit', '256M');
    ini_set('upload_max_filesize', '256M');
    ini_set('post_max_size', '256M');
    /* Autres champs */
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
      redirect('formulaire');
    }

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
    $id = $model->getInsertID();

    /* Fichiers */
    $validationRule = [
      'photo' => [
        'label' => 'Photo de profile',
        'rules' => "uploaded[photo]|is_image[photo]|mime_in[photo,image/jpg,image/jpeg,image/gif,image/png,image/webp]",
      ],
      'identite' => [
        'label' => 'Photo d\'identite',
        'rules' => "uploaded[identite]|is_image[identite]|mime_in[identite,image/jpg,image/jpeg,image/gif,image/png,image/webp]",
      ],
      'notes' => [
        'label' => 'Releve de notes',
        'rules' => "uploaded[notes]|is_image[notes]|mime_in[notes,image/jpg,image/jpeg,image/gif,image/png,image/webp]",
      ]
    ];
    if (!$this->validate($validationRule)) {
      $data = ['errors' => $this->validator->getErrors()];
      return view('upload_form', $data);
    }

    $img = $this->request->getFile('photo');
    $notes = $this->request->getFile('notes');
    $identite = $this->request->getFile('identite');

    // echo "photo: ";
    // print_r($img->guessExtension());
    // echo " notes: ";
    // print_r($notes->guessExtension());
    // echo " identite: ";
    // print_r($identite->guessExtension());

    if (!$img->hasMoved()) {
      $img->move(WRITEPATH . 'uploads/etudiants/photos/', $id . '.' . $img->guessExtension(), true);
    } else {
      $data = ['errors' => 'The photo has already been moved.'];
      return view('upload_form', $data);
    }

    if (!$notes->hasMoved()) {
      $notes->move(WRITEPATH . 'uploads/etudiants/notes/', $id . '.' . $notes->guessExtension(), true);
    } else {
      $data = ['errors' => 'The photo has already been moved.'];
      return view('upload_form', $data);
    }

    if (!$identite->hasMoved()) {
      $identite->move(WRITEPATH . 'uploads/etudiants/identite/', $id . '.' . $identite->guessExtension(), true);
    } else {
      $data = ['errors' => 'The photo has already been moved.'];
      return view('upload_form', $data);
    }

    if ($model) {
      $data = ['etudiant' => $model->findAll()];
    }
    return $this->listsomeone();
  }

  //Fonction permet de faire une inscription
  public function inscription()
  {
    $data = [
      'id_etudiant' => (int)$this->request->getvar('idEtd'),
      'num_inscription' => $this->request->getvar('numInscr'),
      'grade' => $this->request->getvar('grade'),
      'niveau' => $this->request->getvar('niveau'),
      'id_parcours' => (int)$this->request->getvar('parcours'),
      'statut' => $this->request->getvar('status')
    ];
    //Permet de recupere uniquement le numero entre 
    $num = explode('UA', $data['num_inscription']);
    $num = explode('FS', $num[1]);
    $data['num_inscription'] = $num[0];
    $inscription = new InscriptionModel();
    $verify_etudiant = $inscription->where('id_etudiant', $this->request->getvar('idEtd'))->findAll();
    $verify_inscription = $inscription->where('num_inscription', $this->request->getvar('numInscr'))->findAll();

    //Permet de verifier si l'etudiant est deja inscrit
    if (empty($verify_etudiant) and empty($verify_inscription)) {
      if ($inscription->insert($data)) { //Naviguez vers someoneregister si l'inscription est réussie
        return $this->someoneregister();
      } else {
        echo "<h1>Echec lors de l'insertion</h1>";
        return view('form_inscription');
      }
    } else {
      return view('form_inscription');
    }
  }
  public function search()
  {
    $model = new EtudiantModel();
    $search = $this->request->getvar("search");
    $etudiants = $model->like('nom', $search)->orLike('prenoms', $search)->orLike('date_naissance', $search)->orLike('lieu_naissance', $search)->orLike('adresse', $search)->orLike('cin', $search)->orLike('telephone', $search)->orLike('annee_bacc', $search)->orLike('num_bacc', $search)->orLike('nationalite', $search)->orLike('genre', $search)->findAll();;
    if (empty($etudiants)) {
      return $this->someoneregister();
    }
 foreach($etudiants as $e){
            $data[] = [
                'id_etudiant' => $e['id_etudiant'],
                'nom' => $e['nom'],
                'prenoms' => $e['prenoms'],
                'date_naissance' => $e['date_naissance'],
                'lieu_naissance' => $e['lieu_naissance'],
                'adresse' => $e['adresse'],
                'cin' => $e['cin'],
                'telephone' => $e['telephone'],
                'email' => $e['email'],
                'num_bacc' => $e['num_bacc'],
                'annee_bacc' => $e['annee_bacc'],
                'nationalite' => $e['nationalite'],
                'statut' => $this->exist($e['id_etudiant']),
                'grade' => $this->rec_grade($e['id_etudiant'])
            ];
        }
        return view('list', ['etudiants' => $data]);
  }
}
