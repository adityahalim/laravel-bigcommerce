<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiController extends Controller
{
    public function getProductCount()
    {
        $params = '?page=1&limit=10';

        $apiURL = env('BIGCOMMERCE_DOMAIN').'/v3/catalog/products';
        $response = Http::withHeaders([
            'X-Auth-Token' => env('BIGCOMMERCE_AUTH_TOKEN'),
        ])->get($apiURL. $params);

        $response = json_decode($response->body());

        if ($response) {
            return [
                'total_pages'  => $response->meta->pagination->total,
                'status' => true
            ];
        }

        return false;
    }

    public function getProducts()
    {
        $params = '?page=1&limit=10';

        $apiURL = env('BIGCOMMERCE_DOMAIN').'/v3/catalog/products';
        $response = Http::withHeaders([
            'X-Auth-Token' => env('BIGCOMMERCE_AUTH_TOKEN'),
        ])->get($apiURL . $params);

        if ($response) {
            return [
                'results'  => json_decode($response->body()),
                'status' => true
            ];
        }

        return false;
    }
}
