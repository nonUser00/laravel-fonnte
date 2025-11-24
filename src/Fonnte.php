<?php

namespace Fonnte\Laravel;

use Illuminate\Support\Facades\Http;

class Fonnte
{
     protected $token;
     protected $apiUrl = 'https://api.fonnte.com/send';

     public function __construct($token)
     {
          $this->token = $token;
     }

     /**
     * Send a message.
     *
     * @param string $to
     * @param string $message
     * @return \Illuminate\Http\Client\Response
     */
     public function sendMessage($to, $message)
     {
          return Http::withHeaders([
               'Authorization' => $this->token,
          ])->post($this->apiUrl, [
               'target' => $to,
               'message' => $message,
          ]);
     }
}
