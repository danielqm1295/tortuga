<?php
class Punto extends Grafico
{ //Hereda de gráfico, o qué.
    private int $x;
    private int $y;

    public function getX()
    {
        return $this->x;
    }

    public function setX($x)
    {
        $this->x = $x;
    }

    public function getY()
    {
        return $this->y;
    }

    public function setY($y)
    {
        $this->y = $y;
    }

    public function dibujar()
    {
        return ""; //¿Aquí no recibe nada, no?
    }

    public function mover($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function desplazar($dx, $dy)
    {
        $this->x += $dx;
        $this->y += $dy;
    }

    //Pensar si crear otra clase intermedia entre grafico y linea que tenga lo siguiente
    public function insertarPunto(Punto $p)
    {
        $this->vertices[] = $p;
        $this->numeroVertices++;
    }
    public function getVertice($n)
    {
        $p = null;
        if (count($this->vertices) > $n) {
            $p = $this->vertices[$n];
        }
        return $p;
    }
}

class Linea extends Grafico
{ //Aquí tendo dudas también, pero viendo el diagrama creo que hereda de Punto.
    private Punto $centro;

    public function __construct($x1, $x2, $y1, $y2)
    {
        $p = new Punto($x1, $y1);
        $p->mover($x1, $y1);
        $this->centro->insertarPunto($p);
        $p2 = new Punto($x2, $y2);
        $p2->mover($x2, $y2);
        $this->centro->insertarPunto($p2);
    }

    public function dibujar()
    {
        return "<line x1='" . $this->centro->getVertice(0)->getX() . "' y1='" . $this->centro->getVertice(0)->getY() . "' x2='". $this->centro->getVertice(1)->getX()."' y2='".$this->centro->getVertice(1)->getY()."' style='stroke:#f00; stroke-width:15; stroke-linecap: butt'></line>";
    }
}
