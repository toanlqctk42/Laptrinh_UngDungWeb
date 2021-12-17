<?php
    class BankAccount
    {
        private $balance;
        public function getBalance()
        {
            return $this->balance;
        }
        public function deposit($amount)
        {
            if ($amount > 0) {
            $this->balance += $amount;
            }
            return $this;
        }
    }

    class SavingAccount extends BankAccount
    {
        private $interestRate;
        public function setInterestRate($interestRate)
        {
            $this->interestRate = $interestRate;
        }
        public function addInterest()
        {
        // calculate interest
            $interest = $this->interestRate * $this->getBalance();
        // deposit interest to the balance
            $this->deposit($interest);
        }
    }
    $account = new SavingAccount();
    $account->deposit(100);
    // set interest rate
    $account->setInterestRate(0.05);
    $account->addInterest();
    echo $account->getBalance();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lê Quốc Toàn</title>
</head>
<body>
    
</body>
</html>