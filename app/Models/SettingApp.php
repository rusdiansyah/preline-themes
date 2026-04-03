<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;

#[Fillable(['nama_aplikasi','nama_instansi','alamat_instansi','email','website','logo'])]
class SettingApp extends Model
{
    //
}
