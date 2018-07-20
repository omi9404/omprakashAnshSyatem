<?php
	error_reporting(0);
    class calculator
    {
	    	/* 
	    		For Task 1 ,Task 2 ,Task 3,Task 4, Task 5, Task 6,Task 7
	    		 
	    		Note : Please note for all the task i have made only 1 file to achieve code reusblity

	    		Github repositiries:   https://github.com/omi9404/omprakashAnshSyatem

				Below two functions get parameter as an array performed ternary operations.

				Also at ternary operations passed parameter is separated by comma(,) and uses array sum.

				After that matched result is returned to user.
	    	*/
	    	function sum($param)
	    	{
					return $this->operation($param);
	    		
	    	}

	    	function add($param)
	    	{
	    		
					return $this->operation($param);
	    	}


	    	function operation($param){
				/* 
					Folowing foreach is checking at array any negative number is available or not.
					If any negative number is found then, it will show the error message.
				*/
				$explodedPara =  explode(',',$param);
	    		foreach($explodedPara as $num)
	    		{
					$i = 0;


					/* 
						Check for negative number and increament the counter by 1.
					*/
					if($num < 0)
					{
						$negativeNumbers[] = $num;
						$i++;
					}

					/* 
					 Check here for number less than 1000
					*/

					if($num < 1000)
					{
						
					    $output+= $num;
					}


				}

				/* 
					If value of $i>0 it means there is a negative number at input else it will show output
				*/
				
				if($i==0)
				{

					return count($param)>0 ? $output : 0;

				}else
				{

					return "Error:Negative numbers ( ".implode(",",$negativeNumbers). " ) not allowed.";
			}
    	}


    	
    }
	$functionName  = $argv[1];   //Get Function name from command line 
	$obj = new calculator();     //Make an object of Class to access function
	echo $obj->$functionName(preg_replace('~[\\\\/:;*?n"<>|]~', ",", $argv[2])); //Get Passed parameter from CLI
?>