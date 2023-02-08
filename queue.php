<?php
class Queue {
   private $collection = [];

    public function size(){
        return count($this->collection);
    }
    public function print()
    {
        var_dump($this->collection);
    }

    public function enqueue($item)
    {
        array_push($this->collection,$item);
    }
    public function dequeue(){
        array_shift($this->collection);
    }
    public function front()
    {
        return $this->collection[0];
    } 
}

class PriorityQueue{
   private $collection = [];
    
   public function size()
   {
    return count($this->collection);
   }
   public function print()
   {
    print_r($this->collection);
   }
   public function empty()
   {
    return ($this->collection ===0);
   }

   public function enqueue($item)
   {
      if($this->empty())
      {
        array_push($this->collection,$item);
      }else{
        $added = false;
        for($i=0;$i<$this->size();$i++)
        {
            if($item[1]<$this->collection[$i][1])
            {
                array_splice($this->collection,$i,0,$item);
                $added = true;
                break;
            }
        }
        if(!$added)
        {
            array_push($this->collection,$item);
        }
      }
   }
}





// $q = new Queue();
// $q->enqueue('1');
// $q->enqueue(5);
// $q->enqueue(6);
// $q->enqueue('Good');
// var_dump($q->front());
// // $q->dequeue();
// $q->print();


$pq = new PriorityQueue();
$pq->enqueue(['a',1]);
$pq->enqueue(['b',2]);
$pq->enqueue(['c',3]);

$pq->enqueue(['ss',1]);
$pq->print();