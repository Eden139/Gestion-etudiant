<?php

namespace App\Controllers;

use App\Models\Etudiant;

class Users extends BaseController
{
    public function insert(): void
    {
        $etudiants = new Etudiant();
        $name = $this->request->getPost('name');
        $firstname = $this->request->getPost('firstname');
        $address = $this->request->getPost('address');
        $sexe = $this->request->getPost('sexe');
        $mail = $this->request->getPost('mail');
        $birth = $this->request->getPost('birth');

        if (empty($name) || empty($address) || empty($sexe)) {
            redirect('/form');
        } else {
            $data = [
                'name' => $name,
                'firstname' => $firstname,
                'address' => $address,
                'gender' => $sexe,
                'mail' => $mail,
                'birth' => $birth,
            ];

            $etudiants->insert($data, false);
            if ($etudiants) {
                redirect('/list');
            } else redirect('/form');
        }
    }

    public function list(): string
    {
        $etudiants = new Etudiant();
        $searchString = $this->request->getGet('q');
        if ($searchString != '') {
            $var = [
                'users' => $etudiants
                            ->like('name', $searchString)
                            ->orLike('firstname', $searchString)
                            ->orLike('address', $searchString)
                            ->orLike('birth', $searchString)
                            ->orLike('mail', $searchString)
                            ->orLike('gender', $searchString)
                            ->findAll()
            ];
        }
        else $var = ['users' => $etudiants->findAll()];
        return view('list', $var);
    }
}
