<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FileTransfer extends Model
{
    use HasFactory;

    protected $fillable = [
        'sent_by',
        'sent_to',
        'acknowledged_by',
        'sending_office_id',
        'receiving_office_id',
        'file_id',
        'status'
    ];

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
