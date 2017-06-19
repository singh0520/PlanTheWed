<?php
	/**
	* This is the class for user data
	*/
	class user
	{
		public $email="";
		//private $pass ="";
		public $bname ;
		public $gname ;
		public $bnamel;
		public $gnamel;
		public $wedate;
        public $aboutg;
        public $aboutb;
		// Functions
		// void __construct($id)
		// {
		// 	mkdir(../userData/$id,0774);
		// }
		public function writeInfo($email)
		{
			$path="userdata/";
			$path.=$email;
			mkdir($path,0777);
			//$f1=fopen("../userData/$id/info.txt","w");
			//fwrite($f1, $bname);
		}
	}
?>