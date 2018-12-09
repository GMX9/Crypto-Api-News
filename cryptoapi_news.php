<?php

class cryptoapi{
    
    private $url;
    private $api;
    
    public function __construct($api){
        
        $this->url = "https://cryptoapi.news";
        $this->api = $api;
        
    }

    public function last10News($coin){ // Supported coins : BTC, ETH, LTC, XRM | ALL = TO LIST ALL COINS

         $jsonurl = $this->url."/api/".$this->api."/last10News/".$coin;
         $json = file_get_contents($jsonurl);
         print_r($json);
    }
}

$cryptoapi = new cryptoapi("free");

// Retrieves 10 most recent news 
$cryptoapi->last10News("all");