<?php


    namespace bank\Client;


    class Client
    {

        private array $accounts = array();
        private string $uniqueId;

        public function __construct()
        {
            $this->uniqueId = bin2hex(random_bytes(20));
        }

        public function transferMoney($fromAccount, $toAccount, int $amount)
        {
            if (!array_search($toAccount, $this->accounts)) {
                $totalSum = $this->getFeeValue($fromAccount, $amount) + $amount;
                if ($fromAccount->getCurrency() === $toAccount->getCurrency(
                    ) && ($fromAccount->getBalance() - $totalSum) >= 0) {
                    $fromAccount->setBalance($fromAccount->getBalance() - $totalSum);
                    $toAccount->setBalance($toAccount->getBalance() + $amount);
                }

            }
        }

        public function getFeeValue($account, $amount)
        {
            $feeRatio = $account->getFee();

            return (1 * $amount) / 100;
        }

        /**
         * @return array
         */
        public function getAccounts(): array
        {
            return $this->accounts;
        }


        public function setAccounts($account): void
        {
            $this->accounts[] = $account;
        }

        /**
         * @return false|string
         */
        public function getUniqueId()
        {
            return $this->uniqueId;
        }






    }