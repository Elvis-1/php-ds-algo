<?php
class Node{
    function __construct($data ){
        $this->data = $data;
        $this->right = null;
        $this->left = null;
    }
}

class BinarySearchTree {
     public $root = null;
     

    
    public function add($data)
    {
        $root = $this->root;
        if($root == null)
        {
            $this->root = new Node($data);
         
        }else{
          while($root)
          {
            if($data < $root->data)
                {
                   if($root->left === null)
                   {
                    $root->left = new Node($data);
                    return true;
                   }else if($root->left !== null)
                   {
                    $root = $root->left;
                   }

                 }else if($data > $root->data){
                    if($root->right === null)
                    {
                        $root->right = new Node($data);
                        return true;
                    }else if($root->right !== null)
                    {
                        $root = $root->right;
                    }

                  }else{
                    return null;
                  }
                 }


          }
    }

    public function isPresent($data)
    {
       $root = $this->root;
       if($root == null)
       {
        return false;
       }
       if($root->data === $data)
       {
        return true;
       }else {

            while($root)
            {
                if($root->data == $data)
                {
                    return true;
                }
               if($data < $root->data)
               {

                 $root = $root->left;
               }else{
                 $root = $root->right;
               }

            }
            return false;
          
       }
    }

    public function findMin()
    {
        $current = $this->root;
        // $left = $current->left;
        if($current === null)
        {
            return 0;
        }
        while($current)
        {
            if($current->left === null)
            {
                return $current->data;
            }
            $current = $current->left; 
        }
      return true;
    }

    public function findMax()
    {
        $current = $this->root;
        while($current)
        {
            if($current->right === null)
            {
                return $current->data;
            }
            $current = $current->right;
        }
    }
    public function find($data)
    {
        $current = $this->root;
        if($current->data === $data)
        {
            return $current;
        }else{
            while($current)
            {

                if($current->data === $data)
                {
                    return $current;
                }
                if($data < $current->data)
                {
                    $current = $current->left;
                }else if($data > $current->data)
                {
                    $current = $current->right;
                }

            }
            return false;
        }

    }

   public function findMinHeight($root)
   {
    if ($root== null) {
        return -1;
    };
     $left = $this->findMinHeight($root->left);
     $right = $this->findMinHeight($root->right);
    if ($left < $right) {
        return $left + 1;
    } else {
        return $right + 1;
    };
   }

   public function findMaxHeight($root)
   {
     if($root === null)
     {
        return -1;
     }
     return 1 + max($this->findMaxHeight($root->left), $this->findMaxHeight($root->right));
   }

   public function isBalanced()
   {
    return ($this->findMinHeight >= $this->findMaxHeight-1);
   }

    
 }


// explores the tree in a sorted order form small to the bigest
function printInOrder($root)
{
    if($root)
    {
        // traverse the left tree
        printInOrder($root->left);
        echo $root->data;

        // traverse the right
        printInOrder($root->right); 
    }
}

// explores the tree from the root node before leaf node
function printPreOrder($root)
{
    if($root === null)
    {
        return;
    }
  if($root)
  {
    echo $root->data;
     // traverse the left tree
    printPreOrder($root->left);
    // traverse the right
    printPreOrder($root->right); 

  }
}

// explores the leaf node before the root node'
function printPostOrder($root){
   if($root === null)
   return;
   printPostOrder($root->left);
   printPostOrder($root->right);

   echo $root->data;
}

function printLevelOrder($root)
{
    $res = [];
    $Q = [];
    if($root === null)
    return;
    array_push($Q,$root);
    while(count($Q) > 0)
    {
        $node = array_shift($Q);
        array_push($res,$node->data);
        if($node->right != null)
        {
            array_push($Q,$node->right);
        }
        if($node->left != null)
        {
            array_push($Q,$node->left);
        }
       
       
        
    }
    return $res;
}

$n = new Node(100);
$n->right = new Node(200);
$n->left = new Node(20);

$n->right->right = new Node(300);
$n->right->left = new Node(150);

$n->left->left = new Node(10);
$n->left->right = new Node(30);

// printInOrder($n);
// printPreOrder($n);
// printPostOrder($n);
print_r(printLevelOrder($n));

$bst = new BinarySearchTree();
$bst->add(9);
$bst->add(4);
$bst->add(17);
$bst->add(3);
// $bst->add(2);
$bst->add(6);
$bst->add(22);
$bst->add(5);
$bst->add(7);
$bst->add(20);
// var_dump($bst->isPresent(22));
print_r($bst->findMinHeight($bst->root));
// print_r($bst->levelOrder($bst->root));



