<?php
echo 'Its working';

class Stack {
    private $count = 0;
    private $stack;


    // add items to the stack
    public function push($item)
    {
       $this->stack[$this->count] = $item;
       $this->count++;

    }

    // remove items form stack
    public function pop()
    {
        if($this->count === 0)
        {
            return null;
        }
        array_pop($this->stack);
         $this->count--;
    }

    public function show()
    {
        print_r($this->stack);
        
    }
}

// $myStack = new Stack;
// $myStack->push('car');
// $myStack->push('bicycle');
// $myStack->push('pencil');
// $myStack->push('house');
// $myStack->show();
// echo '---------';
// $myStack->pop();
// $myStack->show();


// creating a pallondron

$word = "racecar";

$rword = '';

$stack = [];

// add items to stack
for($i=0; $i<strlen($word); $i++)
{
    array_push($stack,$word[$i]);
}
// reverse the word
for($i=0; $i<strlen($word); $i++)
{
    $rword .= array_pop($stack);
}

if($rword === $word)
{
    echo 'Its a paraledron';
}else{
    echo 'Its not';
}

