<?php

// searching for an item
function searchItem($array,$target)
{
   $low = 0; // index of the first item
   $high = count($array) - 1; // index of last item;

   $mid;
   while($low <= $high)
   {
     $mid = ($low + $high)/2;
     if($target < $array[$mid])
     {
        $high = $mid - 1;
     }else if($target > $array[$mid])
     {
        $low = $mid + 1;
     }else break;
   }

   print($mid);

}

// 0(n);
function getThreeDistinctItems($array){
    $res = [];

    function findIndex($array,$max){
        for($i = 0; $i<count($array); $i++)
        {
          if($max === $array[$i])
          {
              return $i;
          }
        }
      }
    if(!is_array($array))
    { return false;
    }
    while(count($res) < 3)
    {
        $max = max($array);
        array_push($res,$max);
        // remove the item before next iteration
        $index = findIndex($array,$max); // get the index
        array_splice($array,$index,1);
    }

return $res;
}



function print3largest($arr, $arr_size)
{
    $i; $first; $second; $third;
 
    // There should be atleast
    // three elements
    if ($arr_size < 3)
    {
        echo " Invalid Input ";
        return;
    }
 
    $third = $first = $second = PHP_INT_MIN;
    for ($i = 0; $i < $arr_size ; $i ++)
    {
        // If current element is
        // greater than first
        // 12, 13, 1,10, 34, 1
        if ($arr[$i] > $first)
        {
            $third = $second;
            $second = $first;
            $first = $arr[$i];
        }
 
        // If arr[i] is in between first
        // and second then update second
        else if ($arr[$i] > $second)
        {
            $third = $second;
            $second = $arr[$i];
        }
 
        else if ($arr[$i] > $third)
            $third = $arr[$i];
    }

    echo "Three largest elements are ",
    $first, " ", $second, " ", $third;
}

// 0(1); 
function subArraySum($arr,$n,$s) :array
{
    if(!is_array($arr))
    {
        return false;
    }
    if($s<=0 || empty($arr))
    {
        return [-1];
    }
$right = 0;
$left = 0;
$sum = $arr[0];

while($right < $n)
{
  if($sum < $s)
  {
    $right++;
    if($right === $n)
    {
        break;
    }
    $sum += $arr[$right];
  }else if($sum > $s)
  {
    $sum -=$arr[$left];
    $left++;
  }else{
    return [$left+1, $right+1];
  }
}
 return-1;     
    
}

function missingNumber1($array,$n){
    //code here
    if($n < 0)
    {
        return false;
    }

    for($i=1; $i<=$n; $i++)
    {
        if(!in_array($i, $array))
        {
            return $i;
        }
     
    }
}

function missingNumber(array $array, int $n) : int {
    if ($n <= 0) {
        return false;
    }

    $hash = array_fill(0, $n + 1, false);
   
    for ($i = 0; $i < $n; $i++) {
        $hash[$array[$i]] = true;
    }
   
    for ($i = 1; $i <= $n; $i++) {
        if (!$hash[$i]) {
            return $i;
        }
    }

    return $n + 1;
}

function maxSubarraySum($arr, $n){
    // code here
    $sum = 0;
    $maxSum = PHP_INT_MIN;
   
    for($i=0; $i<$n; $i++)
    {
      $sum += $arr[$i];
     
       $maxSum = max($maxSum, $sum);

    }
    
    return $maxSum;
}
function minJumps($arr,$n)
{
  // find minimum jumps to get the end of the array.
  $track = [];
  $min = 0;
  $len = 0;
  for($i = 0; $i<$n; $i++)
  {
    $len++;
    if($arr[$i] === 0)
    {
        continue;
    }

    for($j = $i; $j<$arr[$i]; $j++)
    {
        if(!$arr[$j])
        {
            // print($j);
            return $len+1;
        } 
         print($j);
    }
    $i = $j+1;
       
    
  }
  
  return null;
}
// 1, 4, 3, 2, 6, 7
var_dump(minJumps([1, 4, 5, 8, 9,7],6));



 
