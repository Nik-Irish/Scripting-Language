<?php
function sumSecondLargestAndSmallest($numbers) {
    if (count($numbers) < 2) {
        return "Array must contain at least two elements.";
    }
    
    sort($numbers);
    $secondSmallest = $numbers[1];
    $secondLargest = $numbers[count($numbers) - 2];
    
    return $secondSmallest + $secondLargest;
}

$array = [3, 1, 4, 1, 5, 9, 2, 6, 5];
echo "Sum of the second largest and smallest elements is: " . sumSecondLargestAndSmallest($array);
?>
