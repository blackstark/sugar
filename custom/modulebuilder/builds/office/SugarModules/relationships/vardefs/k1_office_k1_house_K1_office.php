<?php
// created: 2015-05-26 17:28:25
$dictionary["K1_office"]["fields"]["k1_office_k1_house"] = array (
  'name' => 'k1_office_k1_house',
  'type' => 'link',
  'relationship' => 'k1_office_k1_house',
  'source' => 'non-db',
  'module' => 'K1_House',
  'bean_name' => 'K1_House',
  'vname' => 'LBL_K1_OFFICE_K1_HOUSE_FROM_K1_HOUSE_TITLE',
  'id_name' => 'k1_office_k1_housek1_house_ida',
);
$dictionary["K1_office"]["fields"]["k1_office_k1_house_name"] = array (
  'name' => 'k1_office_k1_house_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_K1_OFFICE_K1_HOUSE_FROM_K1_HOUSE_TITLE',
  'save' => true,
  'id_name' => 'k1_office_k1_housek1_house_ida',
  'link' => 'k1_office_k1_house',
  'table' => 'k1_house',
  'module' => 'K1_House',
  'rname' => 'name',
);
$dictionary["K1_office"]["fields"]["k1_office_k1_housek1_house_ida"] = array (
  'name' => 'k1_office_k1_housek1_house_ida',
  'type' => 'link',
  'relationship' => 'k1_office_k1_house',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_K1_OFFICE_K1_HOUSE_FROM_K1_OFFICE_TITLE',
);
