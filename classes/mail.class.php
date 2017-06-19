<?php
	class email{
		public $to;
		public $subject;
		public $mssg;
		function __construct(){
		}
		public sendmail()
		{
			mail($to, $subject, $mssg);
		}

	}