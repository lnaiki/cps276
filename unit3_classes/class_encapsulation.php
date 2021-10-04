<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<nav>
                <ul>
                    <li><a href="http://192.241.150.43/cps276/"">CPS 276 Home</a> </li>
                    <li><a href="index.php">Class Properties</a></li>
                    <li><a href="class_methods.php">Class Methods</a></li>
                    <li><a href="class_encapsulation.php">Class Encapsulation</a></li>
                    <li><a href="class_inheritance.php">Class Inheritence</a></li>
                    <li><a href="class_constructors.php">Class Constructors</a></li>

                </ul>

</body>
</html>

<?php
    //Encapsulation: A class's internal data should be protected from being directly manipulated from outside 
    //and details of class's implementation should be hidden from the outside world. 

    class Account {
        private $totalBalance = 0;
        public function makeDeposit( $amount ) {
            $this->totalBalance += $amount;
        }
        public function makeWithdrawal( $amount ) {
            if ( $amount < $this->totalBalance ) {
                $this->totalBalance -= $amount;
            } else {
                die( "Insufficient funds <br>" );
            }
        }
        public function getTotalBalance() {
            return $this->totalBalance;
        }
    }
           $a = new Account;
           $a->makeDeposit( 500 );
           $a->makeWithdrawal( 100 );
           echo "Total Balance is: $" . $a->getTotalBalance() . "<br>";
           $a->makeWithdrawal( 1000 );
?>