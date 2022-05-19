<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class stageaire extends Model
{
    use HasFactory;
    protected $table = 'formulaire';
    protected $fillable = ['sex','prenom','nom','email','tele','ville','poste','metier','annee_experience','niveau_etude','file_pdf','region','dateDebut','dateFin','score','CIN','motivation'];
    public $timestamps = false;
}
