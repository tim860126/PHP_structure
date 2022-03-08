
<?php
class StackNode{
	public $data;
    public $next;
	function __construct($data,$next){
    	$this->data=$data;
        $this->next=$next;
    }
}

class LinkedStack{
	public $top;
    public $size;
    function __construct()
    {
    	$this->top=null;
        $this->size=0;
    }
    
    function imEmpty()
    {
    	return $this->top === null;
    }
    
    function push($value)
    {
    	$node=new StackNode($value);
        $node->next=$this->top;
        $this->top=$node;
        $this->size++;
    }
    function pop()
    {
        $result =$this->top;
        $this->top=$this->top->next;
        $this->size--;
	return $result->data;
    }
    function peek()
    {
	return $this->top->data;
    }
}

$stack=new LinkedStack();
$stack->push(12);
$stack->push(32);
print_r($stack->peek());
$stack->push(40);
print_r($stack->peek());
print_r($stack->pop());
?>


