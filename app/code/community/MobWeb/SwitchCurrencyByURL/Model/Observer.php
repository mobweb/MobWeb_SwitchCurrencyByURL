<?php

class MobWeb_SwitchCurrencyByURL_Model_Observer
{
	public function controllerActionLayoutLoadBefore(Varien_Event_Observer $observer)
	{
		// Get the list of available currencies
		$availableCurrencyCodes = array_values(Mage::app()->getStore()->getAvailableCurrencyCodes(true));

		// Check if a currency parameter is available and if yes, if the selected currency is allowed
		if (($currencyCode = (string) Mage::app()->getRequest()->getParam('currency')) && in_array($currencyCode, $availableCurrencyCodes)) {

			//Switch the currency
			Mage::app()->getStore()->setCurrentCurrencyCode($currencyCode);
		}
	}
}