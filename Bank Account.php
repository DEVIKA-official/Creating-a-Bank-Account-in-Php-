<?php
class BankAccount {
    private $Balance;
    private $Account_Number;
    public function __construct($Initial_Balance, $Account_Number) {
        $this->Balance = $Initial_Balance;
        $this->Account_Number = $Account_Number;
    }
    public function deposit($Amount) {
        if ($Amount > 0) {
            $this->Balance += $Amount;
            echo "Deposit of $Amount is successful !. New balance is: $this->Balance\n";
        } else {
            echo "Invalid deposit amount. Please enter a valid value.\n";
        }
    }

    public function withdraw($Amount) {
        if ($Amount > 0 && $Amount <= $this->Balance) {
            $this->Balance -= $Amount;
            echo "Withdrawal of $Amount is successful !. New balance is: $this->Balance\n";
        } else {
            echo "Invalid withdrawal of amount or insufficient funds.\n";
        }
    }

    public function Display_Balance() {
        echo "Account Number: $this->Account_Number\n";
        echo "Current Balance: $this->Balance\n";
    }
}

// Create a BankAccount object with an initial balance of $1000 and account number "123456"
$Account = new BankAccount(6000, "171003");

// Deposit $500 into the account
$Account->deposit(15000);

// Withdraw $200 from the account
$Account->withdraw(250);

// Display the final balance
$Account->Display_Balance();
?>

