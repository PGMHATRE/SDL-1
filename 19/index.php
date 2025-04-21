<!DOCTYPE html>
<html>
<head>
    <title>Shape Area Calculator</title>
</head>
<body>
    <h2>Select a Shape</h2>
    <form method="post">
        <input type="radio" name="shape" value="triangle" required> Triangle<br>
        <input type="radio" name="shape" value="square"> Square<br>
        <input type="radio" name="shape" value="circle"> Circle<br><br>
        <input type="submit" name="submit" value="Calculate Area">
    </form>

<?php
// Base class
class Shape {
    public $base, $height, $side, $radius;

    public function area() {
        return 0;
    }
}

// Subclass: Triangle
class Triangle extends Shape {
    public function area() {
        return 0.5 * $this->base * $this->height;
    }
}

// Subclass: Square
class Square extends Shape {
    public function area() {
        return $this->side * $this->side;
    }
}

// Subclass: Circle
class Circle extends Shape {
    public function area() {
        return 3.14 * $this->radius * $this->radius;
    }
}

if (isset($_POST['submit'])) {
    $shape = $_POST['shape'];
    echo "<h3>Selected Shape: " . ucfirst($shape) . "</h3>";

    if ($shape == "triangle") {
        $t = new Triangle();
        $t->base = 5;
        $t->height = 10;
        echo "Base = 5, Height = 10<br>";
        echo "Area of Triangle: " . $t->area();
    }
    elseif ($shape == "square") {
        $s = new Square();
        $s->side = 4;
        echo "Side = 4<br>";
        echo "Area of Square: " . $s->area();
    }
    elseif ($shape == "circle") {
        $c = new Circle();
        $c->radius = 3;
        echo "Radius = 3<br>";
        echo "Area of Circle: " . $c->area();
    }
}
?>

</body>
</html>
