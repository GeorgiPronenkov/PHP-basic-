<?php

class Box
{
    /**
     *@var float
     */
    private $length;
    /**
     *@var float
     */
    private $width;
    /**
     *@var float
     */
    private $height;
    
    public function __construct(float $length, float $width, float $height)
    {
        $this->setLength($length);
        $this->setWidth($width);
        $this->setHeight($height);
    }

    public function validateInput(float $parameter, string $type)
    {
          if ($parameter <= 0) {
            throw new Exception("{$type} can not be 0 or negative");
        }
    }

    /**
     * @param float $length
     * @throws Exception
     */
    private function setLength(float $length)
    {
        $this->validateInput($length, "Lenght");
        $this->length = $length;
    }

    /**
     * @param float $width
     * @throws Exception
     */
    private function setWidth(float $width)
    {
        $this->validateInput($width, "Width");
        $this->width = $width;
    }

    /**
     * @param float $height
     * @throws Exception
     */
    private function setHeight(float $height)
    {
        $this->validateInput($height, "Height");
        $this->height = $height;
    }

    /**
     * @return float
     */
    public function getLength(): float
    {
        return $this->length;
    }

    /**
     * @return float
     */
    public function getWidth(): float
    {
        return $this->width;
    }

    /**
     * @return float
     */
    public function getHeight(): float
    {
        return $this->height;
    }

    //get Volume method
    public function getVolume(): float
    {
        $result = $this->getLength()*$this->getWidth()*$this->getHeight();
        return $result;
    }

    public function getSurfaceArea()
    {
        $result = (2*$this->getLength() * $this->getHeight()) + (2*$this->getWidth() * $this->getHeight());
        return $result;
    }

    public function __toString()
    {
       $volume = number_format($this->getVolume(), 2, '.', '');
       $surfaceArea = number_format($this->getSurfaceArea(),2,'.','');
       return "Volume: {$volume}\nSurface Area : {$surfaceArea}\n";
    }
}