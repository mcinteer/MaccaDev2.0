<?php
namespace MaccaDev;

/**
 *
 * @author Jake
 *        
 *        
 */

class Functionality {
	// TODO - Insert your code here
	var $Func_ID;
	var $Func_Name;
	var $FuncGr_ID;
	var $Func_Type;
	var $Func_Desc;
	var $currentModel;
	
	function __construct($Func_IDParam, $Func_NameParam, $FuncGr_IDParam, $Func_TypeParam, $Func_DescParam, $currentModelParam) {
		global $Func_ID;
		global $Func_Name;
		global $FuncGr_ID;
		global $Func_Type;
		global $Func_Desc;
		global $currentModel;
		
		$Func_ID = $Func_IDParam;
		$Func_Name = $Func_NameParam;
		$FuncGr_ID = $FuncGr_IDParam;
		$Func_Type = $Func_TypeParam;
		$Func_Desc = $Func_DescParam;
		$currentModel = $currentModelParam;
		// TODO - Insert your code here
	}
}

?>