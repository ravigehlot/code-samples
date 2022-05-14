<?php
// Contract
interface Car {
	public function cost();
	public function description();
}

// Main Class
class SUV implements Car {
	public function cost() {
		return 40000;
	}

	public function description() {
		return 'SUV';
	}
}

// Decorator
abstract class CarFeature implements Car {
	protected $car;

	public function __construct(Car $car) {
		$this->car = $car;
	}

	abstract function cost();
	abstract function description();
}

// Feature 1
class sunRoof extends CarFeature {
	public function cost() {
		return $this->car->cost() + 1500;
	}

	public function description() {
		return 'Adding a SunRoof to this ' . $this->car->description() . ' will up the cost to ' . $this->cost();
	}
}

// Feature 2
class TintWindow extends CarFeature {
	public function cost() {
		return $this->car->cost() + 200;
	}

	public function description() {
		return 'Adding a TintWindow to this ' . $this->car->description() . ' will up the cost to ' . $this->cost();
	}
}

echo (new TintWindow(new sunRoof(new SUV)))->cost();
