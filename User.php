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
	
	function addAddress($IDParam, $StreetNumberParam, $Line1Param, $Line2Param, $SuburbParam, $CityParam, $StateParam, $CountryParam, $currentModelParam)
	{
		global $addressesArray;
		
		$address = new Address($IDParam, $StreetNumberParam, $Line1Param, $Line2Param, $SuburbParam, $CityParam, $StateParam, $CountryParam, $currentModelParam);
		
		$addressesArray[]= $address;
		return $address;
	}
	
	function addUserGroupUsers($Usr_ID, $UsrGr_ID, $UsrGrUsrs_Active, $currentModelParam)
	{
		global $userGroupUsersArray;
		
		$userGroupUser = new UserGroupUsers($Usr_ID, $UsrGr_ID, $UsrGrUsrs_Active, $currentModelParam);
		
		$userGroupUsersArray[] = $userGroupUser;
		return $userGroupUser;
	}
	
	function addUserPermissions($Usr_IDParam, $FuncGr_IDParam, $AllowCreateParam, $AllowReadParam, $AllowUpdateParam, $AllowDeleteParam, $currentModelParam)
	{
		global $userPermissionsArray;
		
		$userPermissions = new UserPermissions($Usr_IDParam, $FuncGr_IDParam, $AllowCreateParam, $AllowReadParam, $AllowUpdateParam, $AllowDeleteParam, $currentModelParam);
		
		$user[] = $userPermissions;
		return $userPermissions;
	}
}

?>