<?php

namespace App\Imports;

use App\Models\Document;
use Carbon\Carbon;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\withHeadingRow;

class DocumentImport implements ToModel, withHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        // Convert Excel serial date number to Unix timestamp
        $unixTimestamp = ($row['dateapp'] - 25569) * 86400;
        // Create Carbon instance from Unix timestamp
        $dateApp = Carbon::createFromTimestamp($unixTimestamp)->format("Y-m-d");
        
        return new Document([
            "Référence"=>$row['reference'],
            "Version"=>$row['version'],
            "dateApp"=>$dateApp,
            "Nature"=>$row['nature'],
            "Intitulé"=>$row['intitule'],
            "Entité"=>$row['entite'],
            "ResponsableEdition"=>$row['responsableedition'],
            "RespArchivage"=>$row['resparchivage'],
            "LieuArchivage"=>$row['lieuarchivage'],
            "DuréeArchivage"=>$row['dureearchivage'],
            "pathFile"=>$row['pathfile'],
    ]);
    }
}
