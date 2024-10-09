<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FileTransfer extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function file()
    {
        return $this->belongsTo(File::class);
    }

    public function sender()
    {
        return $this->belongsTo(User::class, 'sent_by', 'id');
    }

    public function receiver()
    {
        return $this->belongsTo(User::class, 'sent_to', 'id');
    }

    public function sending_office()
    {
        return $this->belongsTo(Office::class, 'sending_office_id', 'id');
    }

    public function receiving_office()
    {
        return $this->belongsTo(Office::class, 'receiving_office_id', 'id');
    }
}
