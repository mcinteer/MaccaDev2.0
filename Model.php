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
	
	var $usersArr = array();	
	var $addressArr = array();
	var $functionalityArr = array();
	var $functionalityGroupArr = array();
	var $userGroupArr = array();
	var $userGroupUsersArr = array();
	var $userPermissionsArr = array();
	
	var $dbConnectionStr;
	
	function __construct()
	{
		global $usersArr;
		
		$usersArr = array();
		
		return $this;
		// TODO - Insert your code here
	}
	
	function generateDBConnection($serverName, $userName, $password)
	{
		$dbConn = 'mssql_connect(' + $serverName + ', ' + $userName + ', ' + $password + ')';
		
		return dbConnStr;
	}
	
	function addUser($user)
	{
		global $usersArr;		
		$usersArr[]= $user;		
	}
	
	function addAddress($add)
	{
		global $addressArr;
		$addressArr[] = $add;
	}
	
	function addFunctionality($func)
	{
		global $functionalityArr;
		$functionalityArr[] = $func;
	}
	function addFunctionalityGroup($funcGroup)
	{
		global $functionalityGroupArr;
		$functionalityGroupArr[] = $funcGroup;
	}
	function addUserGroup($userGroup)
	{
		global $userGroupArr;
		$userGroupArr[] = $userGroup;
	}
	function addUserGroupUsers($userGrUser)
	{
		global $userGroupUsersArr;
		$userGroupUsersArr[] = $userGrUser;
	}
	function addUserPermissionsArr($perm)
	{
		global $userPermissionsArr;
		$userPermissionsArr[] = $perm;
	}
}

?>