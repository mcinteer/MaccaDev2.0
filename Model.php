<?php
namespace MaccaDev;

/**
 *
 * @author Jake
 *        
 *        
 */

class Model {
	// TODO - Insert your code here
	
	var $usersArray;
	var $dbConnectionStr;
	
	function __construct()
	{
		global $usersArray;
		
		$usersArray = array();
		
		return $this;
		// TODO - Insert your code here
	}
	
	function generateDBConnection($serverName, $userName, $password)
	{
		$dbConn = 'mssql_connect(' + $serverName + ', ' + $userName + ', ' + $password + ')';
		
		return dbConnStr;
	}
	
	function addUser($id, $emailAddress, $password, $masterUsr, $firstName, $lastName, $postalAddressID, $physicalAddressID, $active)
	{
		GLOBAL $usersArray;
		
		$user = new User($id, $emailAddress, $password, $masterUsr, $firstName, $lastName, $postalAddressID, $physicalAddressID, $active, $this);
		
		$usersArray[]= $user;
		return $user;
	}
	
	

}

?>