<?php

class StringCalculator
{

	private $delimiter = ',';


    public function Add($stringNumber = null)
    {
    	if (is_null($stringNumber)) {
    		return 0;
    	}

    	if(substr( $stringNumber, 0, 2 ) === "//") {

			$firstLine = strtok($stringNumber, "\n");
			
    		$this->delimiter = str_replace('//', '', $firstLine);

    		$stringNumber = str_replace($firstLine, '', $stringNumber);
    	}


    	return array_sum($stringNumber);

    }
}
