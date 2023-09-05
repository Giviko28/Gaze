<?php

namespace App\Models;

use GuzzleHttp\Client;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Item extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function getStatus()
    {
        $updatedAt = Carbon::parse($this->updated_at);
        $currentDateTime = Carbon::now();

        if ($currentDateTime->diffInSeconds($updatedAt) > 300){
            $guzzle = new Client([
                'verify' => false
            ]);
            $response = $guzzle->get($this->url);
            $response = $response->getBody();

            $status = strpos($response, 'In Stock');

            $status ? $this->status = 'In stock' : $this->status = 'Out of stock';
            $this->save();
        }


        return $this->status;
    }
}
