<?php
class Student {
    // 1. Three member variables
    private $n;
    private $r;
    private $m;

    // 2. Parameterized constructor with 3 parameters
    public function __construct($name, $roll, $marks) {
        $this->n = $name;
        $this->r = $roll;
        $this->m = $marks;
    }
    // 3. Display method to show values of member variables
    public function displayValues() {
        echo "<b>Name:</b> " . $this->n . "<br>";
        echo "<b>Roll No:</b> " . $this->r . "<br>";
        echo "<b>Marks:</b> " . $this->m . "<br><br>";
    }
    // 4. Three updater methods (single parameter each)
    public function updateName($newName) {
        $this->n = $newName;
    }

    public function updateRoll($newRoll) {
        $this->r = $newRoll;
    }

    public function updateMarks($newMarks) {
        $this->m = $newMarks;
    }
}
// 5. Create two objects
$s1 = new Student("Nik", 101, 85.5);
$s2 = new Student("Nab", 102, 90.0);

// 6. Display initial values
echo "<h3>Initial OV:</h3>";
echo "<b>Student 1:</b><br>";
$s1->displayValues();

echo "<b>Student 2:</b><br>";
$s2->displayValues();

// Update member variables using update methods
$s1->updateName("Nik Dulal");
$s1->updateMarks(92.0);

$s2->updateRoll(105);

// Display updated values
echo "<h3>Updated OV:</h3>";
echo "<b>Student 1 (Updated Name & Marks):</b><br>";
$s1->displayValues();

echo "<b>Student 2 (Updated Roll No):</b><br>";
$s2->displayValues();
?>