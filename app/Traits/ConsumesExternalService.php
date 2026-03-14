<?php

namespace App\Traits;

use GuzzleHttp\Client;

trait ConsumesExternalService
{
    /**
     * Send a request to any service
     * @return string
     */
    public function performRequest($method, $requestUrl, $form_params = [], $headers = [])
    {
    // If baseUri is empty, this will throw a clear error instead of a cURL crash
    if (empty($this->baseUri)) {
        throw new \Exception("Gateway Error: Base URI for the service is not defined in .env or services.php");
    }

    $client = new Client(['base_uri' => $this->baseUri]);
    $response = $client->request($method, $requestUrl, [
        'form_params' => $form_params, 
        'headers' => $headers
    ]);
    
    return $response->getBody()->getContents();
    }
}

