<?php
//	header("Content-type: text/xml; charset=utf-8");
//print '<pre>';

require_once('rxNormApi.php');

$new = new rxNormApi();
$new->setOutputType('json');
//$new->setOutputType('xml');
//// Example use base on RxNormRest Api Documentation
//// http://rxnav.nlm.nih.gov/RxNormRestAPI.html
//

echo '<pre>';
//print_r(json_decode($new->findRxcuiByID('umlscui','C0716276'), true));//-----2
print_r(json_decode($new->getSpellingSuggestions('Codeine'), true));
print_r($new->findRxcuiByString('Codeine', true));
//print_r(json_decode($new->getStrength(315935)));
//print_r(json_decode($new->getRxConceptProperties('1008493'), true));//-------3
//print_r(json_decode($new->getRxConceptProperties('1115966'), true));//-------3
//print_r(json_decode($new->getRxConceptProperties('235412'), true));//-------3
//print_r(json_decode($new->getRxConceptProperties('2670'), true));//-------3
//print_r(json_decode($new->getRxConceptProperties('2672'), true));//-------3
//print_r(json_decode($new->getRxConceptProperties('402563'), true));//-------3
//print_r(json_decode($new->getRxConceptProperties('892543'), true));//-------3
//print_r(json_decode($new->getRxConceptProperties('91104'), true));//-------3
//print_r(json_decode($new->getRelatedByType('SBD+SBDF','2670'), true));
//print_r(json_decode($new->getAllRelatedInfo('1424684'), true));
//print_r(json_decode($new->getDrugs('Ampicillin'), true));//---------------1 trabaja por rxcui
//print_r(json_decode($new->getNDCs('213269'), true));


//print_r(json_decode($new->getRxNormVersion(), true));
//print_r(json_decode($new->getIdTypes(), true));//------------------
//print_r(json_decode($new->getRelaTypes(), true));//----------------
//print_r(json_decode($new->getSourceTypes(), true));//-----------
//print_r(json_decode($new->getTermTypes(), true));//-------------

//// doesn't properly process source_list variable, hard to test without valid tokens...
//print_r(json_decode($new->getProprietaryInformation('xhruziw05Y','MSH+RXNORM','261455'), true));
//print_r(json_decode($new->getMultiIngredBrand('8896+20610'), true));
// disabled because its big!
//$druglist = json_decode($new->getDisplayTerms(),true);
//print_r($druglist['displayTermsList']['term']);
//foreach($druglist['displayTermsList']['term'] as $key=>$drug){
//	print $drug;
//	print_r(json_decode($new->getDrugs($drug), true));//---------------
//	if($key==10){exit;}
//}
//print_r(json_decode($new->getDisplayTerms(),true));
//print_r(json_decode($new->getStrength('315246'), true));
//print_r(json_decode($new->getQuantity('315246'), true));
//print_r(json_decode($new->getUNII('161'), true));
//print_r(json_decode($new->getSplSetId('umlscui','C0487782'), true));
//print_r(json_decode($new->findRemapped('105048'), true));


//// Debug information
//die(print_r($new).print_r(get_object_vars($new)).print_r(get_class_methods(get_class($new))));