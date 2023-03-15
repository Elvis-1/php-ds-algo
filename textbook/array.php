<?php
class Account{
private $amount;

    function __construct(int $amount)
    {
      $this->amount = $amount;
    }

    public function balance()
    {
         print($this->amount);
         return;
    }

    public function deposit($amount)
    {
        $this->amount += $amount;
        print('current deposit '. $this->amount);
    }

    public function withdraw($amount)
    {
      if($amount > $this->amount)
      {
        print('Insufficient balance');
        return;
      }else{
        $this->amount -= $amount;
      }
      print('current balance is '. $this->amount);
    }
}

/* Creating Arrays from Strings */

 $sentence = "the quick brown fox jumped over the lazy dog";
 $word = explode(" ",$sentence);
 foreach($word as $w)
 {
    echo "<pre>";
    print('word :'.$w . "\n"); 
 }

 /* Aggregate Array Operations */

 $num1 = [];
 for($i=0;$i<100;$i++)
 {
    $num1[$i] = $i+1;
 }
 $num2 = &$num1;
 $num1[0] = 400;

function copied(&$arr1,&$rr2)
{
    for($i=0;$i<100;$i++)
    {
        $arr1[$i] = $i+1; 
        $arr2[$i] = $arr1[$i] ;
    }

     print_r($arr2);
}

function searchFirstvalue($name)
{
     $names = ["David","Mike", "Cynthia", "Raymond", "Clayton", "Jennifer"];

     // ensure its a string
     if(!is_string($name))
     {
        return 'Only string is allowed';
     }
     // convert to lowercase
     $lowercase = strtolower($name);

     $split = str_split($lowercase);
     for($i = 0; $i<count($split); $i++)
     {
       $split[0] = strtoupper($split[0]);
     }
     $join = implode('',$split);
    //    print_r($join);
    //   return;
     $position = in_array($join,$names);
   
     if($position)
     {
        return $name . " is found";
     }else{
        return $name . " is not found";
     }
}

/* STRING REPRESENTATION OF ARRAY */

function strRepArr($array)
{
   if(!is_array($array))
   {
    return 'Only array is accepted';
   }
   $string = implode(',',$array);
   return $string;
}
$string = strRepArr(["David", "Cynthia", "Raymond", "Clayton", "Mike", "Jennifer"]);
// print($string);

function toArray(&$string)
{
   $arr = explode(',',$string);
   return $arr;
}

/* Creating New Arrays from Existing Arrays */

function getNewArr($arr1,$arr2)
{
  $newArr = [];
  for($i=0;$i<count($arr1);$i++)
  {
    array_push($newArr,$arr1[$i]);
  }
  for($i=0;$i<count($arr2);$i++)
  {
    array_push($newArr,$arr2[$i]);
  }
  return $newArr;
}

function getNewArr1($arr1)
{
  
  $newArr = array_splice($arr1,1,1);
  print_r($arr1);
  return $newArr;
}

 /* Mutator Functions   */

 /* Adding Elements to an Array */

function addEl($a)
{
  // inefficient
  $arr = [1,2];
  $arr[count($arr)] = $a;
  return $arr;
}
function addEl1($a)
{
  // inefficient
  $arr = [1,2];
  for($i=count($arr); $i>=0; $i--)
  {
    $arr[$i] = $arr[$i-1];
  }
  $arr[0] = $a;
  return $arr;
}

function addEl2($a)
{
 
  $arr = [1,2];
  array_push($arr,$a);
  return $arr;
}

function addEl3($a)
{
 
  $arr = [1,2];
  array_unshift($arr,$a);
  return $arr;
}


/* REMOVING ELEMENTS FROM AN ARRAY */

function removeEl($arr)
{
  // inefficient
  for($i=0; $i<count($arr);$i++)
  {
    $arr[$i] = $arr[$i+1];
  }
  return $arr;
}

function removeEl1($arr)
{

 return array_shift($arr);
  //return $arr;
}
function removeEl2($arr)
{

 return array_pop($arr);
  //return $arr;
}

 /* Adding and Removing Elements from the Middle of an Array */
 function aEl()
 {
  $num = [1,2,3,7,8];
  $new = [4,5,6];
  array_splice($num,3,0,$new);
  return $num;
 }
 function rEl()
 {
  $num = [1,2,3,100,200,300,4,5];
  array_splice($num,3,3);
  return $num;
 }

 /* Putting Array Elements in Order   */
 function orArr()
 {
  $names = ["David","Mike","Cynthia","Clayton","Bryan","Raymond"];
  sort($names);
  return $names;
 }
 function orArr1()
 {
  $num = [1,2,3,100,200,300,4,5];
   sort($num);
   return $num;
 }
 
 /* Iterator Functions  */

/* Non–Array-Generating Iterator Functions  */
function itFunction1($array)
{
  function square($num)
  {
    print_r([$num,$num * $num]);
  }
  foreach($array as $arr)
  {
    square($arr);
  }
}
$array = [];
for($a = 0; $a<20; $a++)
{
  $array[$a] = $a+1;
}
function every($array)
{
  // creating every function as in javascript
  function isEven($arr){
    return $arr % 2 == 0;
  }
   foreach($array as $ar)
   {
    if(!isEven($ar))
    {
      return false;
    }
  
   }
   return true;
}

function some($array)
{
  function isEven($num)
  {
    return $num % 2 == 0;
  }
  foreach($array as $ar)
  {
    if(isEven($ar)){
      return true;
    }
  }
  return false;
}

function itFunction2($array, callable $callback)
{
//array_reduce()
 return  array_reduce($array, 'callback');
}
function acc($runningTotal, $currentValue)
{
  return $runningTotal + $currentValue;
}

function itFunction3($string)
{
  function concat($former, $now){
    return $former . ' ' . $now;
  }
  return array_reduce($string,'concat');
}
print(itFunction3(['God', 'is','always','good']));
// print(gettype(array_reduce([1,2,3], 'acc')));

/* Iterator Functions That Return a New Array  */

// array_map() and filter

function numSum($array)
{
  function sum($arr)
  {
    return $arr+=5;
  }

  return array_map('sum',$array,$ar);
}

function filter($array)
{
  function afterc($word)
  {
    return strpos($word,'cie') >=-1;
  }
 return array_filter($array,'afterc');
}

 $dictionary = ["recieve","deceive","percieve","deceit","concieve"];
 function gradeChecker($array)
 {
  function check($grade)
  {
    return $grade >= 60;
  }
  return array_filter($array,'check');
 }
$grades = [];
for($i=0; $i<20; $i++)
{
  $grades[$i] = floor(rand(1,2) * 100);
}
 print_r(gradeChecker($grades));

 /* Two-Dimensional and Multidimensional Arrays */
 function twoDi()
 {
  $twoDi = [];
   for($i=0; $i<5; $i++)
   {
      $twoDi[$i] = [];
   }
   print_r($twoDi);
 }

 function createTwoDi($numrows, $numcols,$init)
 {
  $array = [];
  for($i =0; $i<$numrows; $i++)
  {
    $columns = [];
    for($j=0; $j<$numcols; $j++)
    {
      $columns[$j] = $init;
    }
    $array[$i] = $columns;
  }
  return $array;
 }

 /*  Processing Two-Dimensional Array Elements   */

 function colProcessingOfArr($array)
 {
  $total = 0;
  $average = 0.0;
   for($rows = 0; $rows < count($array); $rows++)
   {
    for($cols = 0; $cols < $array[$rows][$cols]; $cols++)
    {
      $total += $array[$rows][$cols];
      
      
    }
    $average = $total/count($array[$rows]);
    print("Student " .$rows+1 . " has a total of " . $total . " with an average of ". round($average,2) );
    $total = 0;
    $average = 0.0;
   }
 }

 function rowProcessingOfArray($array)
 {
  $total = 0;
  $average = 0.0;
   for($cols = 0; $cols < count($array); $cols++)
   {
    for($rows = 0; $rows <= $array[$cols][$rows]; $rows++)
    {
      $total += $array[$cols][$rows];
    }
    $average = $total/count($array[$cols]);
    print("Student " .$cols+1 . " has a total of " . $total . " with an average of ". round($average,2) );
    $total = 0;
    $average = 0.0;
   }
 }
 $grades = [[89, 77, 78],[76, 82, 81],[91, 94, 89]];

function jaggedArray($array)
{
  $total = 0;
  $average = 0.0;
   for($cols = 0; $cols < count($array); ++$cols)
   {
    for($rows = 0; $rows < $array[$cols][$rows]; ++$rows)
    {
      $total += $array[$cols][$rows];
    }
    $average = $total/count($array[$cols]);
    print("Student " .$cols+1 . " has a total of " . $total . " with an average of ". round($average,2) );
    $total = 0;
    $average = 0.0;
   }
 }
 $grades = [[89, 78],[76, 82, 81],[91, 94, 89]];

 /* Arrays of Objects  */

 class Points{
  public $x;
  public $y;
  public function __construct($x,$y)
  {
    $this->x = $x;
    $this->y = $y;
  }


 }


 function displayPoints($array)
 {
    // foreach($array as $arr)
    // {
    //   print($arr->x . "," . $arr->y);
    // }
    for($i=0; $i<count($array); $i++)
    {
      print($array[$i]->x . ", " . $array[$i]->y);
      echo "\n";
    }
 }

 
 $p1 = new Points(1,2);
 $p2 = new Points(3,4);
 $p3 = new Points(5,6);
 $p4 = new Points(1,2);
 $p_array = [$p1,$p2,$p3,$p4];

class WeekTemps{
  public $dataStore = [];
  public $add;
  public $average;
}

function add(WeekTemps $wt, $temp)
{
  array_push( $wt->dataStore,$temp);
}

function average(WeekTemps $wt)
{
  $total = 0;
  for($i=0; $i < count($wt->dataStore); $i++)
  {
     $total += $wt->dataStore[$i];
  }
  print(round($total/count($wt->dataStore),2));
}










