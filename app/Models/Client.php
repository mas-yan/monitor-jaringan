<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function getDateAttribute()
    {
        return "{$this->updated_at->translatedFormat('l, jS F Y')}";
    }

    public function getStatusAttribute()
    {
        $host = $this->ip;
        $ch = curl_init($host);
        curl_setopt($ch, CURLOPT_TIMEOUT, 5);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $data = curl_exec($ch);
        $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
        if ($httpcode !== 0) {
            echo '<span class="badge badge-success">Online</span>';
        } else {
            echo '<span class="badge badge-danger">Offline</span>';
        }
    }
}
