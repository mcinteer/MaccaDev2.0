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
	
	var $Usr_ID;
	var $FuncGr_ID;
	var $AllowCreate;
	var $AllowRead;
	var $AllowUpdate;
	var $AllowDelete;
	var $currentModel;
	var $functionalityGroupsArray;
	
	function __construct($Usr_IDParam, $FuncGr_IDParam, $AllowCreateParam, $AllowReadParam, $AllowUpdateParam, $AllowDeleteParam, $currentModelParam)
	{
		global $Usr_ID;
		global $FuncGr_ID;
		global $AllowCreate;
		global $AllowRead;
		global $AllowUpdate;
		global $AllowDelete;
		global $currentModel;
		
		$Usr_ID = $Usr_IDParam;
		$FuncGr_ID = $FuncGr_IDParam;
		$AllowCreate = $AllowCreateParam;
		$AllowRead = $AllowReadParam;
		$AllowUpdate = $AllowUpdateParam;
		$AllowDelete = $AllowDeleteParam;
		$currentModel = $currentModelParam;
		
		// TODO - Insert your code here
	}
	
	function addFunctionalityGroup($FuncGr_IDParam, $FuncGr_NameParam, $FuncGr_DescParam, $currentModelParam)
	{
		global $functionalityGroupsArray;
		
		$FunctionalityGroup = new FunctionalityGroup($FuncGr_IDParam, $FuncGr_NameParam, $FuncGr_DescParam, $currentModelParam);
		
		$functionalityGroupsArray[] = $FunctionalityGroup;
		return $FunctionalityGroup;
	}
}

?>