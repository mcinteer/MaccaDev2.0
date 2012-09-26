<?php
namespace MaccaDev;

/**
 *
 * @author Jake
 *        
 *        
 */

class FunctionalityGroup {
	// TODO - Insert your code here
	
	var $FuncGr_ID;
	var $FuncGr_Name;
	var $FuncGr_Desc;
	var $currentModel;
	var $functionalitiesArray;
	
	function __construct($FuncGr_IDParam, $FuncGr_NameParam, $FuncGr_DescParam, $currentModelParam) {
		global $FuncGr_ID;
		global $FuncGr_Name;
		global $FuncGr_Desc;
		global $currentModel;
		
		$FuncGr_ID = $FuncGr_IDParam;
		$FuncGr_Name = $FuncGr_NameParam;
		$FuncGr_Desc = $FuncGr_DescParam;
		$currentModel = $currentModelParam;
		// TODO - Insert your code here
	}
	
	function addFunctionality($func)
	{
		global $functionalitiesArray;
		
		$functionalitiesArray[] = $func;
	}
}

?>