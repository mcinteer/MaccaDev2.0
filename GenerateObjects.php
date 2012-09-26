<?php
namespace MaccaDev;
/**
 * 
 *
 * @author Jake
 *        
 *        
 */
var $mdlModel;

var $userID = 0;
var $addressID = 0;
var $functionalityID = 0;
var $functionalityGroupID = 0;
var $userGroupID = 0;
var $userGroupUsersID = 0;
var $userPermissionsID = 0;

class GenerateObjects {
	// TODO - Insert your code here
	
	function buildModel()
	{
		global $mdlModel;
		$currentModel = new Model();
		$mdlModel = $currentModel;
		return $currentModel;		
	}
	
	function buildUser($emailAddressParam, $passwordParam, $masterUsrParam, $firstNameParam, $lastNameParam, $postalAddressIDParam, $physicalAddressIDParam, $activeParam)
	{
		global $userID;
		global $mdlModel;
		$currentUser = new User($userID, $emailAddressParam, $passwordParam, $masterUserParam, $firstNameParam, $lastNameParam, $postalAddressParam, $physicalAddressParam, $activeParam, $mdlModel);
		$userID++;
		$mdlModel.addUser($currentUser);
		return $currentUser;		
	}
	
	function buildAddress($currentUser, $StreetNumberParam, $Line1Param, $Line2Param, $SuburbParam, $CityParam, $StateParam, $CountryParam)
	{
		global $addressID;
		global $mdlModel;
		$currentAddress = new Address($addressID, $StreetNumberParam, $Line1Param, $Line2Param, $SuburbParam, $CityParam, $StateParam, $CountryParam, $mdlModel);
		$addressID++;
		$mdlModel.addAddress($currentAddress);
		return $currentAddress;
	}
	
	function buildFunctionality($Func_NameParam, $FuncGr_IDParam, $Func_TypeParam, $Func_DescParam)
	{
		global $functionalityID;
		global $mdlModel;
		$currentFunctionality = new functionality($functionalityID, $Func_NameParam, $FuncGr_IDParam, $Func_TypeParam, $Func_DescParam, $mdlModel);
		$functionalityID++;
		$mdlModel.addFunctionality($currentFunctionality);
		return $currentFunctionality;
	}
	function buildFunctionalityGroup($FuncGr_NameParam, $FuncGr_DescParam)
	{
		global $mdlModel;
		global $functionalityGroupID
		$currentFunctionalityGroup = new FunctionalityGroup($functionalityGroupID, $FuncGr_NameParam, $FuncGr_DescParam, $mdlModel)
		$functionalityGroupID++;
		$mdlModel.addFunctionalityGroup($currentFunctionalityGroup);
		return $currentFunctionalityGroup;
	}
	function buildUserGroup($UsrGr_DescParam)
	{
		global $mdlModel;
		global $userGroupID;
		$currentUserGroup = new UserGroup($userGroupID, $UsrGr_DescParam, $mdlModel);
		$userGroupID++;
		$mdlModel.addUserGroup($currentUserGroup);
		return $currentUserGroup;
	}
	function buildUserGroupUsers($Usr_IDParam, $UsrGr_IDParam, $UsrGrUsrs_ActiveParam)
	{
		global $mdlModel;
		global $userGroupUsersID;
		$currentUserGroupUsers = new UserGroupUsers($userGroupUsersID, $Usr_IDParam, $UsrGr_IDParam, $UsrGrUsrs_ActiveParam, $mdlModel);
		$mdlModel.addUserGroupUsers($currentUserGroupUsers);
		$userGroupUsersID++;
		return $currentUserGroupUsers;
	}
	
	function buildUserPermission($Usr_IDParam, $FuncGr_IDParam, $AllowCreateParam, $AllowReadParam, $AllowUpdateParam, $AllowDeleteParam)
	{
		global $mdlModel;
		global $userPermissionsID;
		
		$currentPermission = new UserPermissions($userPermissionsID, $Usr_IDParam, $FuncGr_IDParam, $AllowCreateParam, $AllowReadParam, $AllowUpdateParam, $AllowDeleteParam, $mdlModel);
		$userPermissionsID++;
		mdlModel.addUserPermissions($currentPermission);
		return $currentPermission;		
	}
	
}

?>