<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class invoices_attachments extends Model
{
    use HasFactory;


    public function section()
    {
        return $this->belongsTo(products::class, 'invoice_id', 'id');
    }
}
