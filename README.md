# Description
Write a program that prints out a multiplication table of the first n prime numbers.   
The program must run from the command line and print to screen one table.   

# Process
1. load pnum.php file with "count" parameters to display prime numbers.
   * Find below URL to run from browser
   		http://localhost:4040/pnumbers/pnum.php?count=30
   * Use below command to run from CLI
   		php pnum.php 30

# Code explanation 
1. pnum.php is starting point of this application where user can pass required argument. The argument name is "count"
1. pnclass.php has member variable "$n" and member functions "main" and "isPrime".
    	Included this class in pnum.php and passsing parameters(count of prime numbers) to main function.
    	*main function - Find prime numbers and display multiplication table of N prime numbers.
    	*isPrime function - check whether number is prime or not with true or falso return type.
    	
# Automated unit testing - Not covered.
