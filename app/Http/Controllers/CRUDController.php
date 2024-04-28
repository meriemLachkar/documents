<?php

namespace App\Http\Controllers;

use App\Imports\DocumentImport;
use Illuminate\Http\Request;
use App\Models\Document;
use Maatwebsite\Excel\Facades\Excel;



class CRUDController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $documents = Document::all();
        return view('documents.index' , compact('documents'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('documents.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $filename = $request->input('Référence').'.'.$request -> pathName-> extension();
        // $request-> pathName ->move(public_path('docs'), $filename);
        // $Référence = $request->input('Référence');
        // $Version = $request->input('Version');
        // $dateApp = $request->input('dateApp');
        // $Nature = $request->input('Nature');
        // $Intitulé = $request->input('Intitulé');
        // $Entité = $request->input('Entité');
        // $ResponsableEdition = $request->input('ResponsableEdition');
        // $RespArchivage = $request->input('RespArchivage');
        // $LieuArchivage = $request->input('LieuArchivage');
        // $DuréeArchivage = $request->input('DuréeArchivage');
        // $pathName = $filename;

        // $documents = new Document();
        // $documents->Référence = $Référence ;
        // $documents->Version = $Version ;
        // $documents->dateApp = $dateApp ;
        // $documents->Nature = $Nature ;
        // $documents->Intitulé = $Intitulé ;
        // $documents->Entité = $Entité ;
        // $documents->ResponsableEdition = $ResponsableEdition ;
        // $documents->RespArchivage = $RespArchivage ;
        // $documents->LieuArchivage = $LieuArchivage ;
        // $documents->DuréeArchivage = $DuréeArchivage ;
        // $documents->pathName = $pathName ;

        // $documents->save();
        $request->validate([
            'pathName'=>'required|mimes:xlsx',
        ]);
        Excel::import(new DocumentImport, $request->file('pathName'));
        // return redirect()->route('documents.index')-> with('message', 'Le document de référence  '.$Référence.' est bien ajouté !');
        // echo 'test';
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $documents = Document::find($id);
        return view('documents.show', compact('documents'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $documents = Document::find($id);
        return view('documents.edit', compact('documents'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        /**
         * Display a listing of the resource.
         */
        $documents = Document::find($id);
        $documents->update([
            'Référence' => $request->input('Référence'),
            'Version' => $request->input('Version'),
            'dateApp' => $request->input('dateApp'),
            'Nature' => $request->input('Nature'),
            'Intitulé' => $request->input('Intitulé'),
            'Entité' => $request->input('Entité'),
            'ResponsableEdition' => $request->input('ResponsableEdition'),
            'RespArchivage' => $request->input('RespArchivage'),
            'LieuArchivage' => $request->input('LieuArchivage'),
            'DuréeArchivage' => $request->input('DuréeArchivage'),
        ]);
        return redirect()->route('documents.index')->with('message', 'Le document avec l\'id : '. $documents->id . ' à été bien modifié !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $id = Document::find($id)->id;
        Document::destroy($id);
        return redirect()->route('documents.index')->with('message', 'Le document avec l\'id : '. $id . ' à été bien Supprimé !');
    }
    public function search(){
        return view('documents.search');
    }

    public function find(Request $request) {
        $id = $request->input('id');
        $documents = Document::find($id);
        if($documents!=null){
            return view('documents.search' , compact('documents'));
        }
        else {
            return view('documents.search' , ['message' => 'Document introuvable']);
        }
    }

    public function filtrage(Request $request){
        $Entité = $request->input('ent');
        if ($Entité == 'Tout') {
            $documents = Document::all();
        } else {
            $documents = Document::where('Entité', $Entité)->get();
        }
        return redirect()->route('documents.index')->with('filteredData', $documents);
    }

    public function open(string $id){
        $document = Document::where('id' , $id)->get();
        $pathname = $document[0]->pathName.'docx';
        $exec_command = `open public/docs/{$pathname}`;
        return redirect()->back();
    }

}

