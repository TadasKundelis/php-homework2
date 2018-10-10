<?php 
    declare(strict_types=1);
    namespace  Nfq\Akademija\Strict { 
        function countSum(int...$numbers): int {
            $total = 0;
            foreach ($numbers as $num) {
                $total += $num;
            }
            return $total;
        }
        function calculateHomeWorkSum(...$numbers) {
            return countSum(...$numbers);
        }
    }
?>
