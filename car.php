<?php

class Car 
{
    public string $brand;
    public string $model;
    public string $engine;
    public string $color;
    public int $doors;

    public function __construct(string $brand, string $model, string $engine, string $color, int $doors)
    {
        $this->brand = $brand; 
        $this->model = $model;
        $this->engine = $engine;
        $this->color = $color;
        $this->doors = $doors;  
    }
}

$auto = new Car($_POST['brand'], $_POST['model'], $_POST['engine'], $_POST['color'], $_POST['doors']);

echo $auto->engine;

?>
<html>
    <body>
    <a href="index.html">Wróć do strony głównej</a>
    </body>
</html>