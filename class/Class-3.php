<?php 
	
	class fruit
	{
		protected $name;
		private $color;
		function set_name($name)
		{
			$this->name = $name;
		}
		function get_name()
		{
			return $this->name;
		}
	}
	class apple extends fruit
	{
		private $str;
		function set_str($str){
			$this->str = $str;
		}
		function info()
		{
			echo $this->str;
		}
	}
	class KashmiriApple extends apple
	{
		public $location;
		function get_location()
		{
			return $this->location;
		}
	}
	$redApple = new KashmiriApple();
	$redApple->set_name('Red Apple');
	$redApple->set_str("<br>This is Fresh apples direct from garden.");
	$redApple->location = "Kashmir";
	echo $redApple->get_name();
	$redApple->info();
	echo "<br>This apples are come from ".$redApple->get_location();
	

?>
