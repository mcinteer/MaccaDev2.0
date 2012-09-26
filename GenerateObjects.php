<?php
namespace MaccaDev;
/**
 * 
 *
 * @author Jake
 *        
 *        
 */
global $userID = 0;
global $addressID = 0;


class GenerateObjects {
	// TODO - Insert your code here
	
	function buildModel()
	{
		$currentModel = new Model();
		return $currentModel;		
	}
	
	function buildUser($emailAddressParam, $passwordParam, $masterUsrParam, $firstNameParam, $lastNameParam, $postalAddressIDParam, $physicalAddressIDParam, $activeParam, $currentModelParam)
	{
		$currentUser = $currentModelParam.addUser($userID, $emailAddressParam, $passwordParam, $masterUsrParam, $firstNameParam, $lastNameParam, $postalAddressIDParam, $physicalAddressIDParam, $activeParam, $currentModelParam);
		$userID++;
		return $currentUser;		
	}
	
	function buildAddress($currentUser, $StreetNumberParam, $Line1Param, $Line2Param, $SuburbParam, $CityParam, $StateParam, $CountryParam, $currentModelParam)
	{
		$currentAddress = $currentUser.addAddress($addressID, $StreetNumberParam, $Line1Param, $Line2Param, $SuburbParam, $CityParam, $StateParam, $CountryParam, $currentModelParam);
		$currentAddress++;
		return $currentAddress;
	}
	
	
}

?>