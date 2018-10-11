# PHP-Intro-Homework
1. Nfq\Akademija\Soft\calculateHomeWorkSum(3, 2.2, ‘1’) = 6, nes visi parametrai paverčiami integeriais, 2.2 => 2 ir '1' => 1, 3 + 2 + 1 = 6
2. Kadangi yra strict_types=1 deklaracija ir funkcija gali priimti tik integerius, todėl kviečiant  Nfq\Akademija\Strict\calculateHomeWorkSum(3, 2.2, ‘1’) float'as ir stringas sukelia klaidą (TypeError).
