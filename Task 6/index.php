<?php


class Bus {
    protected $type;
    protected $capacity;

    public function __construct($type, $capacity) {
        $this->type = $type;
        $this->capacity = $capacity;
    }

    public function getType() {
        return $this->type;
    }

    public function getCapacity() {
        return $this->capacity;
    }

    public function drive() {
        echo "The {$this->type} bus is driving.\n";
    }
}

// Ï³äêëàñè àâòîáóñ³â
class BigBus extends Bus {
    public function __construct($capacity) {
        parent::__construct("Big Bus", $capacity);
    }
}

class Marshrutka extends Bus {
    public function __construct($capacity) {
        parent::__construct("Marshrutka", $capacity);
    }
}

class Tralik extends Bus {
    public function __construct($capacity) {
        parent::__construct("Tralik", $capacity);
    }
}

// Êëàñ ïàñàæèðà
class Passenger {
    protected $type;

    public function __construct($type) {
        $this->type = $type;
    }

    public function getType() {
        return $this->type;
    }
}

// Ï³äêëàñè ïàñàæèð³â
class Student extends Passenger {
    public function __construct() {
        parent::__construct("Student");
    }
}

class Babka extends Passenger {
    public function __construct() {
        parent::__construct("Babka");
    }
}

class Programist extends Passenger {
    public function __construct() {
        parent::__construct("Programist");
    }
}

// Êëàñ çóïèíêè
class BusStop {
    protected $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }
}

// Ï³äêëàñè çóïèíîê
class Konechka extends BusStop {
    public function __construct() {
        parent::__construct("Konechka");
    }
}

class SimpleStop extends BusStop {
    public function __construct() {
        parent::__construct("Simple Stop");
    }
}

// Ïðèêëàä âèêîðèñòàííÿ êëàñ³â
$bigBus = new BigBus(50);
echo $bigBus->getType() . " has a capacity of " . $bigBus->getCapacity() . " passengers.\n";
$bigBus->drive();

$studentPassenger = new Student();
echo "A " . $studentPassenger->getType() . " is waiting at the bus stop.\n";

$busStop = new Konechka();
echo "The bus is stopping at " . $busStop->getName() . ".\n";
