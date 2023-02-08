<?php
class Set{
    private $collection = [];

    // function to check if an item exist in the set
    public function has($item){
        return in_array($item,$this->collection);
    }

    public function values()
    {
        return $this->collection;
    }
// function to add to the set
    public function add($item){
      if(!$this->has($item))
      {
        array_push($this->collection,$item);
        return true;
      }
      return false;
    }

    // function to remove from the set
    public function remove($item)
    {
       if(!$this->has($item)){
        return false;
       }
       $index = array_search($item,$this->collection);
       array_splice($this->collection,$index,1);
       return true;
    }

    // function to add two sets

    public function union($otherSet)
    {
       $firstSet = $this->values();
       $unionSet = new Set();
       $secondSet = $otherSet->values();

       foreach($firstSet as $e){
        $unionSet->add($e);
       }
       foreach($secondSet as $s)
       {
        $unionSet->add($s);
       }

       return $unionSet->values();
    }

    // return the intersection of two sets

    public function intersection($otherSet){
      $firstSet = $this->values();
      $secondSet = $otherSet;

      $intersectionSet = new Set();

      foreach($firstSet as $f)
      {
        if($secondSet->has($f)){
            $intersectionSet->add($f);
            //return true;
        }
      }
      return $intersectionSet->values();
    }

    // return the difference between two sets
    public function difference($otherSet){
       $firstSet = $this->values();
       $differenceSet = new Set();

       foreach($firstSet as $f)
       {
        if(!$otherSet->has($f))
        {
          $differenceSet->add($f);
        }
       }
       return $differenceSet->values();
    }

    public function allEven(array $values)
    {
       foreach($values as $v)
       {
        if(1 === $v % 2)
        {
          return false;
        }
       }
       return true;
    }

    public function even(array $array, callable $predicate)
    {
      foreach($array as $arr)
      {
        if(!call_user_func('predicate',$arr)){
          return false;
        }
      }

      return true;
    }

    public function increment($a)
    {
      $a++;
    }
    // return the subset of two set
    public function subset($otherSet){
       $firstSet = $this->values();
       $secondSet = $otherSet->values();
       $subset = new Set();
       foreach($secondSet as $f)
       {
        if(!in_array($f,$firstSet))
        { 
        return  false;
        }
       }
       return true;
    }

}

function predicate($val){
   if(1=== $val%2)
   {
    return false;
   }
   return true;
}

$firstSet = new Set();
$secondSet = new Set();


//  var_dump($firstSet->even([1,2,42,9000], 'predicate'));
//  var_dump($firstSet->allEven([2,42,9000]));


$firstSet->add('a');
$firstSet->add('a');
$firstSet->add('b');
$firstSet->add('c');
$firstSet->add('c');


$secondSet->add('b');
$secondSet->add('b');
$secondSet->add('b');


 print_r($firstSet->values());
 print('--------');
print_r($secondSet->values());
print('--------');
// $firstSet->remove('s');
// print_r($firstSet->union($secondSet));
// print_r($firstSet->intersection($secondSet));
// print_r($firstSet->difference($secondSet));
var_dump($firstSet->subset($secondSet));




