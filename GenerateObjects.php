<?php
namespace MaccaDev;

/**
 *
 * @author Jake
 *        
 *        
 */

class GenerateObjects {
	// TODO - Insert your code here
	
	function buildModel()
	{
		$currentModel = new Model();
		return $currentModel;
	}
	
	function buildUser($idParam, $emailAddressParam, $passwordParam, $masterUsrParam, $firstNameParam, $lastNameParam, $postalAddressIDParam, $physicalAddressIDParam, $activeParam, $currentModelParam)
	{
		$currentUser = $currentModelParam.addUser($idParam, $emailAddressParam, $passwordParam, $masterUsrParam, $firstNameParam, $lastNameParam, $postalAddressIDParam, $physicalAddressIDParam, $activeParam, $currentModelParam);
		return $currentUser;
	}
	
	
}

?>