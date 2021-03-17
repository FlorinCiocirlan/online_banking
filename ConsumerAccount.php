<?php

    namespace bank\Account;
    require_once 'Account.php';
    use bank\Client\Client;


    class ConsumerAccount extends Account
    {


        public function __construct(string $currency, int $balance,Client $client){
            parent::__construct($currency, $balance, $client, 1);

        }



    }