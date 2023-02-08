<?php
$collection =[1,2,3,4,4,4,4,4,4,4,4];

//printf("The original array elements are :\n");
for($i=0;$i<count($collection); $i++)
{
    // print("\n");
   
    //    print_r("\n");
    //    echo "\n";
    // echo(" $collection[$i] \n");
    // echo("\n");
 
}

// int LA[] = {1,3,5,7,8};
// int item = 10, k = 3, n = 5;
// int i = 0, j = n;   
// printf("The original array elements are :\n");
// for(i = 0; i<n; i++) {
//    printf("LA[%d] = %d \n", i, LA[i]);
// }
// $a = [1,2,3]; length - 1 = 0
// index + 1 = length
// in = 1 -1;
// first = 0;
// index = length - 1
$arr = [[1,2,3], [4,5,6],[9,8,9]];
function diagonalDiff($arr,$n){
    $d1 = 0;
    $d2  = 0;
   for($i = 0; $i<$n; $i++)
   {
    for($j=0; $j<$n; $j++)
    {
        if($i === $j)
        {
            $d1  += $arr[$i][$j];
        }

       if($i === 0 && $j === 2)
       {
        $d2  += $arr[$i][$j];
       }
       if($i === 1 && $j === 1)
       {
        $d2  += $arr[$i][$j];
       }
       if($i === 2 && $j === 0)
       {
        $d2  += $arr[$i][$j];
       }
    
    }

  
   }
   $abs = abs($d1 - $d2);


   print($abs);
}
// diagonalDiff($arr,3);

$col = [[1],[2,3],[4,5,6,5],[6,7]];
[1,2,3];

for($i=0;$i<count($col);$i++)
{
    for($j=0;$j<count($col[$i]); $j++)
    {

    }
}
$arr[4] = [1,2,3,4];
$col = [[1],[2,3],[4,5,6,5],[6,7]];
function stairCase($n){
    $p = '#';
    $s = '';
    for($i = 0; $i <= $n; $i++)
    {
        printf("\n");
        // for($k=$n-1; $k>=$i; $k--)
        // {
        //     $s .= '';
        // }
        for($j = 0; $j<($i+1);$j++)
        {
           print('#');
     
        }

        
        $s .= "\n";
      echo "<br>";
  
    }
    // print($s);
    
}

//  stairCase(3);

// get the size and length of two dimensional array
function size($arr)
{
    // ensure that the arg is an array
    // the length of the general array
   $length = count($arr);
   $sub_length = [];
   // length of the sub arrays
   for($i=0;$i<count($arr); $i++)
   {
      array_push($sub_length,count($arr[$i]));
   }
  return [$length,max($sub_length)];
} 


function stair($n)
{
    // for($i = 0; $i<$n; $i++)
    // {
   
  
    //      for($k = $i; $k>=0; $k--)
    //   {
    //     printf("#");
    //   }
    //   printf("\n");
     
    //   for($j=0; $j<$n-$j-1; $j++)
    //   {
    //     print(" ");
    //   }
  
    // }


    // for($i=1;$i<=$n;$i++){
    //     echo str_repeat(' ', $n-$i) . str_repeat('#', $i);
    //     echo "\n";
    // }

    // for($i=1; $i<=$n; $i++)
    // {
    //     for($j = 1; $j <= ($n - $i); $j++)
    //     {
    //         echo "";
    //     }
        
    //     for($k = 1; $k <= $i; $k++)
    //     {
    //         echo '#';
    //     }
    //     echo "\n";
    // }

//     for ( $i =1 ; $i<=$max;$i++)
// {
//         for ( $space = 1; $space <= ($max-$i);$space++) {
//                 echo " ";
//         }
//         for ( $hash = 1; $hash <= $i;$hash ++ ) 
//         {
//                 echo "#";
//         }
//         echo "\n";
// }

}
// echo "<pre>";
//  stair(6);

$arr = [1,2,3,4,5];


function miniM(&$arr) {
    // Write your code here
    $sum = 0;
    $total = []; 
    for($i = 0; $i<count($arr); $i++)
    {
       
        if($i === (count($arr) - 1))
        {
            continue;
        }
        $sum += $arr[$i];
    }
      array_push($total, $sum);
      $sum = 0;

  for($i = 0; $i<count($arr); $i++)
      {
         
          if($i === (count($arr) - 2))
          {
              continue;
          }
          $sum += $arr[$i];
     }
     array_push($total, $sum);
     $sum = 0;

     for($i = 0; $i<count($arr); $i++)
     {
        
         if($i === (count($arr) - 3))
         {
             continue;
         }
         $sum += $arr[$i];
    }
    array_push($total, $sum);
    $sum = 0;

    for($i = 0; $i<count($arr); $i++)
    {
       
        if($i === (count($arr) - 4))
        {
            continue;
        }
        $sum += $arr[$i];
   }
   array_push($total, $sum);
   $sum = 0;
   for($i = 0; $i<count($arr); $i++)
   {
      
       if($i === (count($arr) - 5))
       {
           continue;
       }
       $sum += $arr[$i];
  }
  array_push($total, $sum);
  $sum = 0;
   $min_max = [min($total),'', max($total)];
   foreach($min_max as $mm)
   {
     echo "&nbsp";
    print(''.$mm.'');
  
   }

}

function minMaxSum(&$arr)
{
   $sort = sort($arr);
   $total = array_sum($arr);

   $newSum = [];
   for($i=0; $i<count($arr); $i++)
   {
    $newSum[] = $total - $arr[$i];
   }
   $min = min($newSum);
   $max = max($newSum);

   echo $min. " ". $max;
}

/*
 * Complete the 'countApplesAndOranges' function below.
 *
 * The function accepts following parameters:
 *  1. INTEGER s
 *  2. INTEGER t
 *  3. INTEGER a
 *  4. INTEGER b
 *  5. INTEGER_ARRAY apples
 *  6. INTEGER_ARRAY oranges
 */

 function countApplesAndOranges($s, $t, $a, $b, $apples, $oranges)
 {
    // Write your code here
    $oranges_location_of_fall = [];
    $apples_location_of_fall = [];

    foreach($oranges as $t_o)
    {
        $oranges_location_of_fall[] = $b + $t_o;
    }
    foreach($apples as $t_o)
    {
        $apples_location_of_fall[] = $a + $t_o;
    }

$ap = 0;
$or = 0;
foreach($oranges_location_of_fall as $o)
{
    if($o >= $s && $o <=$t)
    {
        $or++;
    }
}

foreach($apples_location_of_fall as $a)
{
    if($a >= $s && $a <=$t)
    {
        $ap++;
    }
}

 echo "<pre>";
echo $ap;
echo "\n";
echo $or;
}
//countApplesAndOranges(7,10,4,12,[2,3,-4],[3,-2,-4]);

$name1 = 'Mavin';
$name2 = 'Prince';


$closure = function (&$num) use($name1){
    $num++;
    global $name2;
 echo $name1 . "is number". $num;
 echo "\n";
 echo $name2 . "is number". $num;
};

function convertToDollar($dob){
  // dob format 'yyyy-mm-dd'
  
}


$ele = 'no';

function change()
{
    global $ele;
    $ele = 'niiii';
}

change();
echo $ele;









