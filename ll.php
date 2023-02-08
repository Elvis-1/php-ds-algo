<?php

class Node
{
    function  __construct($element){
      $this->next = NULL ;
      $this->element  =  $element;
    }

}

class LinkedList{

    private $head;
   public  $length = 0;
   function __construct()
   {
    $this->head = NULL;
   }

   public function size()
   {
    return $this->length;
   }
   public function head()
   {
    return $this->head;
   }

   public function add($element)
   {
   
     $currentNode = $this->head;
     $previousNode;
     if($currentNode == null)
     {
        $this->head = new Node($element);

     }else{
         $currentNode = $this->head;
        while($currentNode->next)
        {
          
           $currentNode = $currentNode->next;
        }
        $currentNode->next = new Node($element);
     }
  
     $this->length++;
   }

   public function remove($element)
   {
     $currentNode = $this->head;
     $previousNode;
     if($currentNode->element === $element)
     {
        $currentNode = $currentNode->next;
     }else{
        while($currentNode->element != $element)
        {
            // if($currentNode->element != $element){
            //     $previousNode = $currentNode;
            //     $currentNode = $currentNode->next;
            // }
                $previousNode = $currentNode;
                $currentNode = $currentNode->next;
           
        }
        $previousNode->next = $currentNode->next;
       $this->length--;
        // return null;

     }
    
     
   }

   public function indexOf($element)
   {
    $index = 0;
    $currentNode = $this->head;

    if($currentNode->element == $element)
    {
        return $index;
    }else{
        $currentNode = $currentNode->next;
        while($currentNode)
        {
            $index++;
            if($currentNode->element == $element)
            {
                return $index;
            }
            $currentNode = $currentNode->next;
        }
        return -1;
    }
   }
   public function removeAt($index)
   {
    $currentIndex = 0;
    $previousNode;
    $currentNode = $this->head;

    // check index
    if($index >= $this->length || $index < 0)
    {
        return null;
    }
    if($index === 0)
    {
       $this->head =  $currentNode->next ;   
    }else{
       
         while($currentIndex < $index){
            $currentIndex++;
            $previousNode = $currentNode;
            $currentNode = $currentNode->next;
         }
         $previousNode->next = $currentNode->next;
    }
    $this->length--;
    return $currentNode->element;

   }

   public function addAt($index,$element)
   {
      $currentNode = $this->head;
      $currentIndex = 0;
      if($index > $this->length)
      {
        return false;
      }
      if($index === 0)
      {
        $currentNode->element = $element;
      }else{
        while($currentIndex < $index)
        {
            $currentIndex++;
            $previousNode = $currentNode;
            $currentNode = $currentNode->next;
        }
        $currentNode->element = $element;
        $this->length++;
      }
   }


}

$ll = new LinkedList();
$ll->add('work');
$ll->add('good');
$ll->add('always');
$ll->add('grateful');
$ll->remove('grateful');
$ll->addAt(1,'praise');
print_r($ll->head());
// var_dump($ll->removeAt(0));
print($ll->size());

