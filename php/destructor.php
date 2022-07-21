<html>

<body>
	
	<?php
		
		class Person{
			
			public $name;
			
			public $age; 
			
			function __construct($name,$age){
				$this->name = $name;
				$this->age = $age;
			}
			
			function __destruct(){
				echo "Name is $this->name and Age is $this->age.";
				echo "<br/>";
			}
		}
		
		$Person1 = new Person('Harry',15);
		
			
		
		$Person2 = new Person('jerry',"25");

	?>
	
</body>

</html>
