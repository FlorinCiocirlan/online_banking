# Online Banking

In a single Bank multiple Clients can open one or more Bank Account for themselves.

People working at the Bank are able to monitor these transactions, all of them.

Clients can monitor their own transactions and can’t see others’.

### There should be a single Bank instance.

Clients can open Bank Accounts in the Bank.

A client is identified by a unique identifier (use UUID.randomUUID().toString())

A client can have multiple accounts, but a single bank account is linked only to a single client.

### Bank accounts are also identified with a unique identifier.

There are two types of bank accounts: consumer and corporate
.
Bank accounts carry current balance and currency information.

### Clients can wire money to other clients in the bank using bank account identifiers and specifying how much money they want to send.
Clients can’t wire money to themselves.

Clients can’t wire money between incompatible currency types.

Clients can’t wire more money than their current balance.

Consumer client money wiring incurs a 1% transaction fee (if the client wires 100 EUR to somewhere else their balance will be decreased with 101 EUR).

Corporate client can wire money without transaction fees.

Test your code by making a few sample instances and printing them out!

Remind the student that in the future the bank can create more types of accounts with different rules (Family Account, Super Saver Account).

Hints: you should have an abstract class or interface, use inheritance, data hiding and make sure there is no code repetition.

