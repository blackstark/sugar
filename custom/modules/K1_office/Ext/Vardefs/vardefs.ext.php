<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2015-05-26 17:31:06
$dictionary["K1_office"]["fields"]["k1_house_k1_office"] = array (
  'name' => 'k1_house_k1_office',
  'type' => 'link',
  'relationship' => 'k1_house_k1_office',
  'source' => 'non-db',
  'module' => 'K1_House',
  'bean_name' => 'K1_House',
  'vname' => 'LBL_K1_HOUSE_K1_OFFICE_FROM_K1_HOUSE_TITLE',
  'id_name' => 'k1_house_k1_officek1_house_ida',
);
$dictionary["K1_office"]["fields"]["k1_house_k1_office_name"] = array (
  'name' => 'k1_house_k1_office_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_K1_HOUSE_K1_OFFICE_FROM_K1_HOUSE_TITLE',
  'save' => true,
  'id_name' => 'k1_house_k1_officek1_house_ida',
  'link' => 'k1_house_k1_office',
  'table' => 'k1_house',
  'module' => 'K1_House',
  'rname' => 'name',
);
$dictionary["K1_office"]["fields"]["k1_house_k1_officek1_house_ida"] = array (
  'name' => 'k1_house_k1_officek1_house_ida',
  'type' => 'link',
  'relationship' => 'k1_house_k1_office',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_K1_HOUSE_K1_OFFICE_FROM_K1_OFFICE_TITLE',
);

?>