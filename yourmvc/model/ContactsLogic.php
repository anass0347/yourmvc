<?php

require_once 'DataHandler.php';

class ContactsLogic{
	public function __construct(){
			$this->DataHandler = new DataHandler("localhost","mysql", "mvc","root", "");
	}
	public function __destruct(){}
	public function createContact(){
		try{
			$naam = $_REQUEST['name'];
			$phone = $_REQUEST['phone'];
			$email = $_REQUEST['email'];
			$location = $_REQUEST['location'];

			$sql = "INSERT INTO `contacts`(`name`, `phone`, `email`, `location`) VALUES ('$naam', '$phone','$email','$location');
 ";
			$result = $this->DataHandler->createData($sql);
			return $result;

		}catch (Exception $e){
			throw $e;
		}
	}
	public function readContact($id){
		try{
			$sql = "SELECT * FROM contacts WHERE id =" .$id;
			$result = $this->DataHandler->readData($sql);
			return $result;

		}catch (Exception $e){
			throw $e;
		}
	}
	public function readContacts(){
		try{
			$sql = 'SELECT * FROM contacts;';
			$result = $this->DataHandler->readsData($sql);
			return $result;
	

			
		}catch (Exception $e){
			throw $e;
		}
	}
	public function updateContact(){
		try{
			$column = $_REQUEST['column'];
			$id = $_REQUEST['id'];
			$updating = $_REQUEST['new'];

			$sql = "UPDATE `contacts` SET `$column` = '$updating' WHERE `contacts`.`id` = $id;
 ";
			$result = $this->DataHandler->updateData($sql);
			return $result;

		}catch (Exception $e){
			throw $e;
		}
	}
	public function deleteContact($id){
		try{
			$sql = "DELETE FROM contacts WHERE id =" . $id ;
			$result = $this->DataHandler->deleteData($sql);
			return $result;



		}catch (Exception $e){
			throw $e;
		}
	}
}



?>
