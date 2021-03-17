<?php

    use bank\Bank;
    use bank\Account\ConsumerAccount;
    use bank\Account\CorporateAccount;
    use bank\Client\Client;

    require_once ('CorporateAccount.php');
    require_once ('ConsumerAccount.php');
    require_once ('Client.php');
    require_once ('Bank.php');

    $bank = new Bank();

    $izabela = new Client();
    $florin = new Client();

    $bank->setClients($izabela);
    $bank->setClients($florin);


    $izabelaRonAccount = new ConsumerAccount('RON', 1000, $izabela);
    $izabelaEuroAccount = new CorporateAccount('EURO', 5000 , $izabela);

    $florinRonAccount = new ConsumerAccount('RON', 500, $florin);
    $florinEuroAccount = new CorporateAccount('EURO', 700, $florin);

    $izabela->setAccounts($izabelaRonAccount);
    $izabela->setAccounts($izabelaEuroAccount);

    $florin->setAccounts($florinRonAccount);
    $florin->setAccounts($florinEuroAccount);



//    foreach ($clients as $client) {
//        foreach ($client->getAccounts() as $account){
//            echo '<br/>';
//            echo 'Account with id '.$account->getUniqueId().' has balance of'.$account->getBalance(). ' and currency set to '.$account->getCurrency();
//            echo '<br/>';
//        }
//    }

    $clients = $bank->getClients();

    foreach ($clients as $client){
        $count = 1;
        echo '<br/>';
        echo $count.'.'.' Client with id: '.$client->getUniqueId();
        echo '<br/>';
        $count++;
        foreach ($client->getAccounts() as $account){
            echo '<br/>';
            echo 'Account with id '.$account->getUniqueId().' initially has balance of '.$account->getBalance(). ' and currency set to '.$account->getCurrency();
            echo '<br/>';
        }
    }

    echo '------------------------------------------------------------------------------------------------------';

    $florin->transferMoney($florinEuroAccount,$izabelaEuroAccount, 200);
    $florin->transferMoney($florinEuroAccount,$izabelaRonAccount, 300);

    $florin->transferMoney($florinEuroAccount, $florinEuroAccount, 300);

    foreach ($clients as $client){
        $count = 1;
        echo '<br/>';
        echo $count.'.'.' Client with id: '.$client->getUniqueId();
        echo '<br/>';
        $count++;
        foreach ($client->getAccounts() as $account){
            echo '<br/>';
            echo 'Account with id '.$account->getUniqueId().' after transfer has balance of '.$account->getBalance(). ' and currency set to '.$account->getCurrency();
            echo '<br/>';
        }
    }




