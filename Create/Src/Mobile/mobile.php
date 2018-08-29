<?php
namespace App\Mobile;
use PDO;
class Mobile{
	public $id='';
	public $title='';
	public $conn='';
	public $dbuser='root';
	public $dbpass='';

	public function __construct(){
		$this->conn= new PDO ("mysql:host=localhost;dbname=crud-4thbatch",$this->dbuser,$this->dbpass);
	}

	public function setData($data){
		if(array_key_exists('mobile_name',$data ) && !empty($data['mobile_name'])){
			$this->title=$data['mobile_name'];
			echo $this->title;
		}
	}

	public function store(){

		try{
			$query = "INSERT INTO tbl_mobile(id,mobile_name) VALUES (:a,:b)";
			$stmt= $this->conn->prepare($query);
			$stmt-> execute(array(
				':a'=>null,
				':b'=>$this->title

			));

		}catch(PDOException $e){
			echo "Error : ". $e;
		}
	}
	public function index(){
		
	}
	public function show(){
		
	}
	public function update(){
		
	}
	public function delete(){
		
	}


}

?>