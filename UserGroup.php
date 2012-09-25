<?php
namespace MaccaDev;

/**
 *
 * @author Jake
 *        
 *        
 */

class UserGroup
{
	// TODO - Insert your code here
	
	var $UsrGr_ID;
	var $UsrGr_Desc;
	var $currentModel;
	
	function __construct($UsrGr_IDParam, $UsrGr_DescParam, $currentModelParam)
	{
		global $UsrGr_ID;
		global $UsrGr_Desc;
		
		$UsrGr_ID = $UsrGr_IDParam;
		$UsrGr_Desc = $UsrGr_DescParam;
		$currentModel = $currentModelParam;
		
		// TODO - Insert your code here
	}
}

?>