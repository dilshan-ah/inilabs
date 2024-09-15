<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task one</title>
</head>
<body>
<?php

// Base class for shape area

class Shape{
    public function area()
    {
        return 0;
    }
}

// Calculating the area of circle

class Circle extends Shape{
    private $r;

    public function __construct($radius)
    {
        $this->r = $radius;
    }

    public function area()
    {
        return pi() * pow($this->r, 2);
    }

    public function __toString()
    {
        return $this->r;
    }
}

if (isset($_POST['submit_radius'])) {
    $radius = $_POST['radius'];
    
    $circle = new Circle($radius);

    echo 'The area of the circle is ' . $circle->area();

    echo "<div style='width: " . $radius * 2 . "px; height: " . $radius * 2 . "px; background-color: red; border-radius: 100%'></div>";
}



?>
<br>
<br>
<br>
<br>
<br>
<form method="post" action="">
    <label for="circle">Put radius value for circle</label><br>
    <input type="number" min=1 name="radius" required>
    <input type="submit" name="submit_radius">
</form>
<br>
<br>
<br>
<br>
<br>
<?php 

// Calculating the area of Rectangle
class Rectangle extends Shape{
    private $w;
    private $h;

    public function __construct($width, $height)
    {
        $this->w = $width;
        $this->h = $height;
    }

    public function area()
    {
        return $this->w * $this->h;
    }

    public function __toString()
    {
        return $this->w . $this->h;
    }
}

if (isset($_POST['submit_w_h'])) {
    $width = $_POST['width'];
    $height = $_POST['height'];

    $rectangle = new Rectangle($width, $height);

    echo 'The area of the rectangle is ' . $rectangle->area();

    echo "<div style='width: " . $width . "px; height: " . $height . "px; background-color: red;'></div>";
}

?>
<br>
<br>
<br>
<br>
<br>
<form method="post" action="">

    <label for="width">Put radius value for width</label><br>
    <input type="number" min=1 name="width" required><br>

    <label for="height">Put radius value for height</label><br>
    <input type="number" min=1 name="height" required><br>

    <input type="submit" name="submit_w_h">
</form>

</body>
</html>
