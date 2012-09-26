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
	var $ID;
	var $Usr_ID;
	var $UsrGr_ID;
	var $UsrGrUsrs_Active;
	var $currentModel;
	var $userGroupArray = array();
	
	function __construct($id, $Usr_IDParam, $UsrGr_IDParam, $UsrGrUsrs_ActiveParam, $currentModelParam)
	{
		global $Usr_ID;
		global $UsrGr_ID;
		global $UsrGrUsrs_Active;
		global $currentModel;
		global $ID;
		
		$ID = $id;
		$Usr_ID = $Usr_IDParam;
		$UsrGr_ID = $UsrGr_IDParam;
		$UsrGrUsrs_Active = $UsrGrUsrs_ActiveParam;
		$currentModel = $currentModelParam;
		// TODO - Insert your code here
	}
	
	function addUserGroup($userGroup)
	{
		global $userGroupArray;
		$userGroupArray[] = $userGroup;
	}
}

?>