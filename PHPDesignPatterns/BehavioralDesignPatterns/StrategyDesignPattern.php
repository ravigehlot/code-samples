<?php
// Contract
interface Grocery {
	public function add();
	public function remove();
}

// Object of type Grocery
class Publix implements Grocery
{
	private $itemOrItems;
	private $items = [
		1 => 'eggs', 
		2 => 'milk'
	];

	public function __construct(array $itemOrItems)
	{
		$this->itemOrItems = $itemOrItems;
	}

	public function add() : array
	{
		foreach($this->itemOrItems as $item) {
			array_push($this->items, $item);
		}

		return $this->items;
	}

	public function remove() : array
	{
		foreach($this->itemOrItems as $item) {
			if($key = array_search($item, $this->items) !== false) {
				unset($this->items[$key]);
			}
		}

		return $this->items;
	}
}

// Object of type Grocery 
class Target implements Grocery
{
	private $itemOrItems;
	private $items = [
		1 => 'eggs', 
		2 => 'milk'
	];

	public function __construct(array $itemOrItems)
	{
		$this->itemOrItems = $itemOrItems;
	}

	public function add() : array
	{
		foreach($this->itemOrItems as $item) {
			array_push($this->items, $item);
		}

		return $this->items;
	}

	public function remove() : array
	{
		foreach($this->itemOrItems as $item) {
			if($key = array_search($item, $this->items) !== false) {
				unset($this->items[$key]);
			}
		}

		return $this->items;
	}
}


// Object Generator
function groceryList($store, $items) 
{
	switch($store) {
		case 'Publix':
			$groceryList = new Publix($items);
		break;

		case 'Target':
			$groceryList = new Target($items);
		break;
	}

	return $groceryList;
}

class GroceryGenerator {
	private $grocery;

	public function __construct(Grocery $grocery)
	{
		$this->grocery = $grocery;
	}

	public function addToGroceryList()
	{
		$addItem = $this->grocery->add();

		return $addItem;
	}

	public function removeFromGroceryList()
	{
		$removeItem = $this->grocery->remove();

		return $removeItem;
	}
}

$store = groceryList('Publix', ['eggs']);
$groceryList = new GroceryGenerator($store);
$result = $groceryList->removeFromGroceryList();

print_r($result);
print_r("\n\n");

$store = groceryList('Target', ['oreos']);
$groceryList = new GroceryGenerator($store);
$result = $groceryList->addToGroceryList();

print_r($result);
