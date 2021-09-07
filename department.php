<?php 
class department{

	var $host = "localhost";
	var $username = "root";
	var $password = "";
	var $database = "db_employee";
	var $koneksi = "";
	function __construct(){
		$this->koneksi = mysqli_connect($this->host, $this->username, $this->password,$this->database);
		if (mysqli_connect_errno()){
			echo "Koneksi database gagal : " . mysqli_connect_error();
		}
	}

	function setDepartmentName($name)
	{
		
		$data = mysqli_query($this->koneksi,"select * from department");
		while($row = mysqli_fetch_array($data)){
			if ($row['name']==$name) {
				$this->name=$name;
			}
		}
	}

	function getDepartmentName()
	{
		return $this->name;
	}

}
$Department = new department;
$Department->setDepartmentName("zz");
echo $Department->getDepartmentName();