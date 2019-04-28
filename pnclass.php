<?php 
/*
 * @Class - Pnclass
 * @Description - program that prints out a multiplication table of the N prime numbers.
 * @Author - Masood
 * @Date - 2019-04-28
 */

//date_default_timezone_set("Asia/Calcutta");

class Pnclass
{
	private $n;
	/*
	 * @Description - Main function to create table of first N prime numbers
	 * @param Input parameter which holds to find prime number limit
	 * 
	 */
	public function main($input = NULL)
	{
        $this->n = $input;
        for($i = 2; $i <= $this->n; $i++)
        {
            if($this->isPrime($i))
            {
                echo $i."-";
                for($j = 2; $j <= $this->n; $j++)
                {
                    if ($this->isPrime($j))
                    {
                        if ($j <= $this->n)
                        {
                            echo $i*$j.' ';
                        }
                    }
                }
                echo (PHP_SAPI === "cli")?(PHP_EOL):("<br />");
            }
	    }
	    //echo date("h:i:s A")."<br />";
	}
	
	/*
	 * @Function - isPrime
	 * @Description - check whether number is prime or not
	 * @param $checkPrime parameter to find number is a prime or not
	 * @Return type - true or false
	 */
	private function isPrime($checkPrime = NUll)
	{
	    $this->p = $checkPrime;
	    if ($this->p <= 1)
	    {
	        
	        return false;
	    }
	    
	    for ($n = 2; $n < $this->p; $n++)
	    {
	        if ($this->p % $n == 0)
	        {
	            return false;
	        }
	    }
	    
	    return true; 
	}
}

//echo date("h:i:s A")."<br />";

?> 