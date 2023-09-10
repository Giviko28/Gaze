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

    public static function setStatus($url)
    {
        $guzzle = new Client([
            'verify' => false,
            'headers' => [
                'User-Agent' => 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Mobile Safari/537.36',
            ]
        ]);
        $response = $guzzle->get($url);
        $response = $response->getBody();

        $status = strpos($response, 'In Stock');

        if ($status) return 'In stock';
        else return 'Out of stock';
    }

    public function updateStatus()
    {
        $updatedAt = Carbon::parse($this->updated_at);
        $createdAt = Carbon::parse($this->created_at);
        $currentDateTime = Carbon::now();

        if ($currentDateTime->diffInSeconds($updatedAt) > 1200){
            $guzzle = new Client([
                'verify' => false,
                'headers' => [
                    'User-Agent' => 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Mobile Safari/537.36',
                ]
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
