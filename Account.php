<?php


    namespace bank\Account;
    use bank\Client\Client;
    require_once ('Client.php');


    abstract class Account
    {
        protected string $uniqueId;
        protected string $currency;
        protected int $balance;
        protected Client $client;
        protected int $fee;

        public function __construct(string $currency, int $balance,Client $client, int $fee)
        {
            $this->uniqueId = $this->generateId();
            $this->currency = $currency;
            $this->balance = $balance;
            $this->client = $client;
            $this->fee = $fee;

        }


        public function generateId() {
           return bin2hex(random_bytes(20));
        }


        public function getClient()
        {
            return $this->client;
        }


        public function setClient($client): void
        {
            $this->client = $client;
        }

        /**
         * @return int
         */
        public function getFee(): int
        {
            return $this->fee;
        }

        /**
         * @param int $fee
         */
        public function setFee(int $fee): void
        {
            $this->fee = $fee;
        }

        /**
         * @return string
         */
        public function getUniqueId(): string
        {
            return $this->uniqueId;
        }

        /**
         * @param string $uniqueId
         */
        public function setUniqueId(string $uniqueId): void
        {
            $this->uniqueId = $uniqueId;
        }

        /**
         * @return string
         */
        public function getCurrency(): string
        {
            return $this->currency;
        }

        /**
         * @param string $currency
         */
        public function setCurrency(string $currency): void
        {
            $this->currency = $currency;
        }

        /**
         * @return int
         */
        public function getBalance(): int
        {
            return $this->balance;
        }

        /**
         * @param int $balance
         */
        public function setBalance(int $balance): void
        {
            $this->balance = $balance;
        }

    }