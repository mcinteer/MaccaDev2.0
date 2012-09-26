<?php
namespace MaccaDev;

/**
 *
 * @author Jake
 *        
 *        
 */

class UserPermissions {
	// TODO - Insert your code here
	
	var $ID;
	var $Usr_ID;
	var $FuncGr_ID;
	var $AllowCreate;
	var $AllowRead;
	var $AllowUpdate;
	var $AllowDelete;
	var $currentModel;
	var $functionalityGroupsArray;
	
	function __construct($id, $Usr_IDParam, $FuncGr_IDParam, $AllowCreateParam, $AllowReadParam, $AllowUpdateParam, $AllowDeleteParam, $currentModelParam)
	{
		global $Usr_ID;
		global $FuncGr_ID;
		global $AllowCreate;
		global $AllowRead;
		global $AllowUpdate;
		global $AllowDelete;
		global $currentModel;
		global $ID;
		
		$ID = $id;
		$Usr_ID = $Usr_IDParam;
		$FuncGr_ID = $FuncGr_IDParam;
		$AllowCreate = $AllowCreateParam;
		$AllowRead = $AllowReadParam;
		$AllowUpdate = $AllowUpdateParam;
		$AllowDelete = $AllowDeleteParam;
		$currentModel = $currentModelParam;
		
		// TODO - Insert your code here
	}
	
	function addFunctionalityGroup($functionalityGroup)
	{
		global $functionalityGroupsArray;
		$functionalityGroupsArray[] = $functionalityGroup;
	}
}

?>