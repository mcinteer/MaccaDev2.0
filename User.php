<?php
namespace MaccaDev;

/**
 *
 * @author Jake
 *        
 *        
 */

class User {
	// TODO - Insert your code here

	var $id;
	var $emailAddress;
	var $password;
	var $masterUsr;
	var $firstName;
	var $lastName;
	var $postalAddressID;
	var $physicalAddressID;
	var $active;
	var $currentModel;
	var $addressesArray = array();
	var $userGroupUsersArray = array();
	var $userPermissionsArray = array();
	
	
	function __construct($idParam, $emailAddressParam, $passwordParam, $masterUsrParam, $firstNameParam, $lastNameParam, $postalAddressIDParam, $physicalAddressIDParam, $activeParam, $currentModelParam)
	{
		global $id;
		global $emailAddress;
		global $password;
		global $masterUsr;
		global $firstName;
		global $lastName;
		global $postalAddressID;
		global $physicalAddressID;
		global $active;
		global $currentModel;
		
		$id = $idParam;
		$emailAddress = $emailAddressParam;
		$password = $passwordParam;
		$masterUsr = $masterUsrParam;
		$firstName = $firstNameParam;
		$lastName = $lastNameParam;
		$postalAddressID = $postalAddressIDParam;
		$physicalAddressID = $physicalAddressIDParam;
		$active = $activeParam;
		$currentModel = $currentModelParam;		
		// TODO - Insert your code here
	}
	
	function addAddress($address)
	{
		global $addressesArray;
		
		$addressesArray[] = $address;
	}
	
	function addUserGroupUsers($userGroupUsers)
	{
		global $userGroupUsersArray;
		
		$userGroupUsersArray[] = $userGroupUsers;
	}
	
	function addUserPermissions($permission)
	{
		global $userPermissionsArray;
		
		$userPermissionsArray[] = $permission;
	}
}

?>