# MobWeb_SwitchCurrencyByURL extension for Magento

A simple Magento extension that allows to switch the currency by passing a GET parameter in the URL, for example: `http://my-shop.com/product-xy?currency=usd`.

## Installation

Install using [colinmollenhour/modman](https://github.com/colinmollenhour/modman/).

## How it works

The `controller_action_layout_load_before` event, which is fired on every page load, is observed. The observer checks if a `currency` parameter has been passed with the current URL. If it has, it checks the currency code agains the list of allowed currency codes (with the `getAvailableCurrencyCodes` method), and if the currency code is in that list, the currency is switched by calling the `setCurrentCurrencyCode` method.

## Questions? Need help?

Most of my repositories posted here are projects created for customization requests for clients, so they probably aren't very well documented and the code isn't always 100% flexible. If you have a question or are confused about how something is supposed to work, feel free to get in touch and I'll try and help: [info@mobweb.ch](mailto:info@mobweb.ch).