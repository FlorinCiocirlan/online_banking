<?php


    namespace bank;


    class Bank
    {

        public array $clients = array();

        /**
         * @return array
         */
        public function getClients(): array
        {
            return $this->clients;
        }


        public function setClients($client): void
        {
            $this->clients[] = $client;
        }



    }