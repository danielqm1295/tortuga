<?php
    class Punto extends Grafico{ //Hereda de gráfico, o qué.
        private int $x;
        private int $y;

        public function getX(){
            return $this->x;
        }

        public function setX(){
            $this->x = $x;
        }

        public function getY(){
            return $this->y;
        }

        public function setY(){
            $this->y = $y;
        }

        public function dibujar(){
            return ""; //¿Aquí no recibe nada, no?
        }

        public function mover($x, $y){
            $this->x = $x;
            $this->y = $y;
        }

        public function desplazar($dx, $dy){
            $this->x += $dx;
            $this->y += $dy
        }
    }

    class Linea extends Punto { //Aquí tendo dudas también, pero viendo el diagrama creo que hereda de Punto.
        private Punto $centro;
        
        public function dibujar(){
            return "";
        }
    }
?>