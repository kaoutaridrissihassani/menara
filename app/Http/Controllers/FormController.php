<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;

class FormController extends Controller
{

    public function form(Request $request){
        

        return view('ClientSide.Form');
     }


    function addData(Request $req){
    $form = new Form;
    $form->sex = $req->sex;
    $form->nom = $req->nom;
    $form->prenom = $req->prenom;
    $form->cin = $req->cin;
    $form->email = $req->email;
    $form->tele = $req->tele;
    $form->ville = $req->ville;
    $form->metier = $req->metier;
    $form->experience = $req->experience;
    $form->etude = $req->etude;
    $form->ecole = $req->ecole;
    $form->motivation = $req->motivation;
    $form->motivation = $req->motivation;
    $form->save();
    }
}
