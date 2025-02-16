<?php
	class greeting
	{
		public $str = "Hello World";

		function show_greeting()
		{
			return $this->str;
		}
	}

	$message = new greeting;
	var_dump($message);
echo "This program is executed by Vaibhav(2220100288)";?>