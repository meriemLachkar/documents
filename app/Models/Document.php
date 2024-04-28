<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    // use HasFactory;
    protected $fillable = ["Référence" ,
                        "dateApp" ,
                        "Version" ,
                        "Nature" ,
                        "Intitulé" ,
                        "Entité" ,
                        "ResponsableEdition" ,
                        "RespArchivage" ,
                        "LieuArchivage" ,
                        "DuréeArchivage" ,
                        "pathName"
                    ];
    public $timestamps = false;
}
