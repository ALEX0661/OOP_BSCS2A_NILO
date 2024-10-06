<?php
include 'Vehicle.php';
class Bus extends Vehicle {
  public function seating_capacity() {
    $seating_capacity = 50;
    return $seating_capacity; 
  }
  
  public function fare() {
    $total_fare = $this->seating_capacity() * 100;
    return $total_fare + ($total_fare * 0.10);
  }
}

$Bus1 = new Bus("Saulog", 20, 100);
echo $Bus1->fare();
?>
