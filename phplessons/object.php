<?php
	//6.object
	Class Student
	{
		public $id;
		public $name;

		public function __construct($a, $b)
		{
			$this -> id = $a;
			$this -> name = $b;
		}

		public function S_details()
		{
			return "<h1><i>ID: ".$this->id."<br>Name: ".$this->name."</i></h1>";
		}
	}
	$student_info = new Student($_POST['s_id'], $_POST['s_name']);
	echo $student_info->S_details();
?>
