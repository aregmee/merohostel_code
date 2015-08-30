<?php
	include_once "db.php";

	//$something =" oyo oy oyo oy oyo oy oyoi oy o";
	class Connection
	{
		private $dbname;
		private $dbuser;
		private $dbpass;
		private $hostname;

		public function __construct($DBNAME, $DBUSER, $DBPASS, $HOSTNAME){
			$this->dbname	= $DBNAME;
			$this->dbuser	= $DBUSER;
			$this->dbpass	= $DBPASS;
			$this->hostname	= $HOSTNAME;
		}

		public function connect(){
			try{

				$dbh = mysqli_connect($this->hostname,$this->dbuser,$this->dbpass,$this->dbname);;
				return $dbh;	
			}catch(Exception $e)
			{
				echo $e->getMessage();
				exit;
			}
		}

		/*$link= mysql_connect("$this->hostname:3306", $this->dbuser, $this->dbpass);
		$dbh = mysql_select_db($this->dbname, $link);
		return $link;

	}*/
	
}
	

	$connection = new Connection($DB_NAME,$DB_USER,$DB_PASS,$HOST_NAME);
	//$connection->connect();

?>