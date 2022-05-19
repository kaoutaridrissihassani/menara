<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StageaireController extends Controller
{

    /**
     * indexCondidatureSP()
     * @param : request
     * * this function used to redirect user from Anonce, with type as : Stage  *
     */
    public function form(Request $request){
        

        return view('ClientSide.Form');
     }

     public function indexquest(){
         return view('clientSide.questionnaireStag');
     }

     /**
     * storeStage()
     * @param : request
     * * this function used to Insert condidature:
     */
    public function storeStage(Request $request){


        $formulaire = new stageaire();
        $formulare->sex = $request->input('sex');
        $formulare->prenom = $request->input('prenom');
        $formulare->nom = $request->input('nom');
        $formulare->cin = $request->input('cin');
        $formulare->email = $request->input('email');
        $formulare->tele = $request->input('tele');
        $formulare->ville = $request->input('ville');




        //dd("stor");
       /* $req = $request->validate([
           
            'sex'               =>'required',
            'prenom'            =>'required',
            'nom'               =>'required',
            'cin'               =>'required',
            'email'             =>'required',
            'tele'              =>'required',
            'ville'             =>'required',
            'poste'             =>'nullable',
            'metier'            =>'required',
            'annee_experience'  =>'nullable',
            'niveau_etude'      =>'nullable',
            'ecole'             =>'nullable',
            'motivation'        =>'nullable',
            'upload_image'      =>'nullable',
            'file_pdf'          =>'nullable',
            'region'            =>'nullable',
            'dateDebut'         =>'nullable',
            'dateFin'           =>'nullable'
        ]);*/
        
        
        //$newImage = time() . '-' . $request->nom . '.' . $request->upload_image->extension();
        //$request->upload_image->move(public_path('images/profiles'), $newImage);
       // dd("tst sp");
       // $newPDF = time() . '-' . $request->file_pdf . '.' . $request->file_pdf->getClientOriginalExtension();
       // $pdf = $request->file_pdf->move(public_path('cv'), $newPDF);
       
        // $textContent = $this->getTextFromPDF($pdf);
        // $dataAnonce     = anonce::where('id',$req["idAnnonce"])->get();
        // $jobDescription = $dataAnonce[0]['Discription_poste'];
        
        // $score = $this->getScore($textContent,$jobDescription,$request->idAnonce);
        // $req +=["score"=>$score];

        //stageaire::insert($req);
    //    //dd("ok store");
        return redirect()->route('stageaire.indexSP')->with('success','votre demande est bien enregistrer !');

    }
            
        
    

    /**
     * store()
     * @param : request
     * * this function to Add anonces 
     */
   /*public function store(Request $request){
        
        $req = $request->validate([
            'idAnnonce'         =>'nullable',
            'sex'               =>'nullable',
            'prenom'            =>'nullable',
            'nom'               =>'nullable',
            'email'             =>'nullable',
            'tele'              =>'nullable',
            'ville'             =>'nullable',
            'poste'             =>'nullable',
            'metier'            =>'nullable',
            'annee_experience'  =>'nullable',
            'niveau_etude'      =>'nullable',
            'upload_image'      =>'nullable',
            'file_pdf'          =>'nullable',
            'region'            =>'nullable',
            'dateDebut'         =>'nullable',
            'dateFin'           =>'nullable'
        ]);
        
        
        $newImage = time() . '-' . $request->nom . '.' . $request->upload_image->extension();
        $request->upload_image->move(public_path('images/profiles'), $newImage);
        dd($newImage);
        $newPDF = time() . '-' . $request->file_pdf . '.' . $request->file_pdf->getClientOriginalExtension();
        $pdf = $request->file_pdf->move(public_path('cv'), $newPDF);
        // dd($pdf);
        //get text from pdf to having scor CV:
        $textContent = $this->getTextFromPDF($pdf);
        $dataAnonce     = anonce::where('id',$req["idAnnonce"])->get();
        $jobDescription = $dataAnonce[0]['Discription_poste'];
        
        $score = $this->getScore($textContent,$jobDescription,$request->idAnonce);
        $req +=["score"=>$score];

        //insert Condidature
        stageaire::insert($req);

        return redirect()->route('stageaire.store', $req['idAnnonce'])->with('success','votre demande est bien enregistrer !');

    }*/

    /**
     * storeStage()
     * @param : request
     * * this function used to Insert condidature:
     */
     /*public function storeStage(Request $request){
        //dd("stor");
        $req = $request->validate([
            'idAnnonce'         =>'nullable',
            'sex'               =>'required',
            'prenom'            =>'required',
            'nom'               =>'required',
            'cin'               =>'required',
            'email'             =>'required',
            'tele'              =>'required',
            'ville'             =>'required',
            'poste'             =>'nullable',
            'metier'            =>'required',
            'annee_experience'  =>'nullable',
            'niveau_etude'      =>'nullable',
            'ecole'             =>'nullable',
            'motivation'        =>'nullable',
            'upload_image'      =>'nullable',
            'file_pdf'          =>'nullable',
            'region'            =>'nullable',
            'dateDebut'         =>'nullable',
            'dateFin'           =>'nullable'
        ]);
        
        
        $newImage = time() . '-' . $request->nom . '.' . $request->upload_image->extension();
        $request->upload_image->move(public_path('images/profiles'), $newImage);
       // dd("tst sp");
        $newPDF = time() . '-' . $request->file_pdf . '.' . $request->file_pdf->getClientOriginalExtension();
        $pdf = $request->file_pdf->move(public_path('cv'), $newPDF);
       
        // $textContent = $this->getTextFromPDF($pdf);
        // $dataAnonce     = anonce::where('id',$req["idAnnonce"])->get();
        // $jobDescription = $dataAnonce[0]['Discription_poste'];
        
        // $score = $this->getScore($textContent,$jobDescription,$request->idAnonce);
        // $req +=["score"=>$score];

        stageaire::insert($req);
    //    //dd("ok store");
        return redirect()->route('stageaire.indexSP', $req['idAnnonce'])->with('success','votre demande est bien enregistrer !');

    }*/

    
   /**
     * get Scoor()
     * @param : text 
     * * this function used to compare twoo text, and return the score %*
     */

    /*public function getScore($text,$jobDescription,$idAnonce){
        
        $score          =  similar_text($text, $jobDescription, $percent);
        return $percent;
    }*/

     /**
     * get getTextFromPDF()
     * @param : path  
     * * this function used to extract text from PDF, and return the text *
     */
    public function getTextFromPDF($path){
        $parser = new \Smalot\PdfParser\Parser(); 
        $pdf = $parser->parseFile($path); 
        return $pdf->getText();
       
    }
     /**
     * get checkCIN()
     * @param : path  
     * * this function used to Validate CIN*
     */
    public function checkCIN(Request $request){
        //Ajouter ces Critaire: nom prenom, cin periode: pour les critaire des filtre de Validation CIN..
        $cin = $request->cin;
        $res = stageaire::where("CIN",$cin)->get();
        if(count($res)>=1){return response("find");}
        else return response("not found");
        //dd($res);

        return redirect()->route('stageaire.indexSP')->with('success','votre demande est bien enregistrer !');
    }
    /**
     * get listCv()
     * @param : path  
     * * this function used to get all CVs.
     */
    /*public function listCv(){
        $cv = stageaire::all();
        return view('adminSide.Recrutement.CVTheque.ListeCV')->with('CVs',$cv);
    }*/


     /*public function listCvByAnonce(Request $req){
         
        $idAnnonce = $req->idAnonce;
        $cv = stageaire::where('idAnonce',$idAnnonce)->get();
        
        return view('adminSide.Recrutement.CVTheque.ListeCVbyAnonce')->with('CVAn',$cv);


    }*/

    
    /*public function MailCondidat(Request $request){
        //dd($request->idCondidat);
        $infoCondidat = stageaire::where('id',$request->idCondidat)->get();
        //dd($infoCondidat);
        return view('adminSide.Recrutement.mail.mailingCondidat')->with('condidat',$infoCondidat);
    }*/

    /*public function addMail(){
        return view('adminSide.Recrutement.mail.buildMail');
    }*/
    

}