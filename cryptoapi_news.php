<?php

class cryptoapi{
    
    private $url;
    private $api;
    
    public function __construct($api){
        
        $this->url = "https://cryptoapi.news";
        $this->api = $api;
        
    }

    public function lastNews($coin,$count){ // Supported coins : BTC, ETH, LTC, XRM | ALL = TO LIST ALL COINS | MAX COUNT : 10

         $jsonurl = $this->url."/api/v1/".$this->api."/lastnews/".$coin."/".$count;
         $json = file_get_contents($jsonurl);
         print_r($json);
    }
    
    public function sentiment($coin){ // Supported coins : BTC, ETH, LTC, XRM | ALL = TO LIST ALL COINS / pow = Proof of work 

         $jsonurl = $this->url."/api/v1/".$this->api."/sentiment/".$coin;
         $json = file_get_contents($jsonurl);
         print_r($json);
    }
}

$cryptoapi = new cryptoapi("free");

// Retrieves 10 most recent news 
$cryptoapi->lastNews("all",10);
$cryptoapi->sentiment("pow");
$cryptoapi->sentiment("all");
