<?php
namespace MaccaDev;

/**
 *
 * @author Jake
 *        
 *        
 */

class UserGroupUsers
{
	// TODO - Insert your code here
	
	var $Usr_ID;
	var $UsrGr_ID;
	var $UsrGrUsrs_Active;
	var $currentModel;
	var $userGroupArray = array();
	
	function __construct($Usr_IDParam, $UsrGr_IDParam, $UsrGrUsrs_ActiveParam, $currentModelParam)
	{
		global $Usr_ID;
		global $UsrGr_ID;
		global $UsrGrUsrs_Active;
		global $currentModel;
		
		$Usr_ID = $Usr_IDParam;
		$UsrGr_ID = $UsrGr_IDParam;
		$UsrGrUsrs_Active = $UsrGrUsrs_ActiveParam;
		$currentModel = $currentModelParam;
		// TODO - Insert your code here
	}
	
	function addUserGroup($UsrGr_IDParam, $UsrGr_DescParam, $currentModelParam)
	{
		global $userGroupArray;
		
		$UserGroup = new UserGroup($UsrGr_IDParam, $UsrGr_DescParam, $currentModelParam);
		
		$userGroupArray[] = $UserGroup;
		return $UserGroup;
	}
}

?>