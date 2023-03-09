<?php
// RGB to Decimal Value conversion
    class RGB{
        private $color;
        private $red;
        private $green;
        private $blue;
        
        public function __construct($colorCode){
            $this->color = ltrim($colorCode,'#');
            $this->parseColor();
        }

        public function getColor(){
            return $this->color;
        }
        
        public function getRGBColor(){
            return array($this->red,$this->green,$this->blue);
        }

        public function getRed(){
            return $this->red;
        }

        public function getGreen(){
            return $this->green;
        }

        public function getBlue(){
            return $this->blue;
        }
        public function readRGBColor(){
            echo "Red = {$this->red}".PHP_EOL;
            echo "Green = {$this->green}".PHP_EOL;
            echo "Blue = {$this->blue}".PHP_EOL;
        }
        public function setColor($colorCode){
            $this->color = ltrim($colorCode,'#');
            $this->parseColor();
        }

        private function parseColor(){
            if($this->color)
            {
                list($this->red,$this->green,$this->blue) = sscanf($this->color,'%02x%02x%02x');             
            }
            else{
                list($this->red,$this->green,$this->blue) = array(0,0,0);
            }
           
        }
    }

    $myRGB = new RGB("0000ff");
    $myRGB->readRGBColor();
?>