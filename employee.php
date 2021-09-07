<?php 
class employee{

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

	function setEmployeeName($name)
	{
		
		$data = mysqli_query($this->koneksi,"select * from employee");
		while($row = mysqli_fetch_array($data)){
			if ($row['name']==$name) {
				$this->name=$name;
				$this->title=$row['title'];
				$this->salary=$row['salary'];
			}
		}
		
	}

	function getEmployeeTitle()
	{
		return $this->title;
	}

	function getEmployeeProfile()
	{
		return $this->name;
	}

	function getEmployeeMonthlySalary($day)
	{
		return $this->salary;
	}

}
$Employee = new employee;
$Employee->setEmployeeName("chaca");
echo $Employee->getEmployeeTitle();
echo $Employee->getEmployeeProfile();
echo $Employee->getEmployeeMonthlySalary("1");