<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;

    public function getFullURLAttribute() {
        $full_URL = sprintf('<a href="/content/%s">%s</a>', $this->name, $this->title);
        return $full_URL ;
        }

}
