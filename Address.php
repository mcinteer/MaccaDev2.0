<?php
namespace MaccaDev;
/** 
 * @author Jake
 * 
 * 
 */

class Address {
	// TODO - Insert your code here
	
	var $ID;
	var $StreetNumber;
	var $Line1;
	var $Line2;
	var $Suburb;
	var $City;
	var $State;
	var $Country;
	var $currentModel;
	
	function __construct($IDParam, $StreetNumberParam, $Line1Param, $Line2Param, $SuburbParam, $CityParam, $StateParam, $CountryParam, $currentModelParam)
	{
		global $ID;
		global $StreetNumber;
		global $Line1;
		global $Line2;
		global $Suburb;
		global $City;
		global $State;
		global $Country;
		global $currentModel;
		
		$ID = $IDParam;
		$StreetNumber = $StreetNumberParam;
		$Line1 = $Line1Param;
		$Line2 = $Line2Param;
		$Suburb = $SuburbParam;
		$City = $CityParam;
		$State = $StateParam;
		$Country = $CountryParam;
		$currentModel = $currentModelParam;
		
		
		// TODO - Insert your code here
	}
}

	/**
 *
 * @author Jake
 *        
 *        
 */

?>