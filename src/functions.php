<?php
    namespace {
		function countSum(...$numbers) {
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
	
	namespace Nfq\Akademija\Not_Typed {
		function calculateHomeWorkSum(...$numbers): int {
			return countSum(...$numbers);
		}
	}
	
	namespace  Nfq\Akademija\Soft {
		function calculateHomeWorkSum(int...$numbers): int {
			return countSum(...$numbers);
		}
	}
?>