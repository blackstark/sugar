<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2015-05-21 16:31:25
$dictionary["Note"]["fields"]["k1_house_notes"] = array (
  'name' => 'k1_house_notes',
  'type' => 'link',
  'relationship' => 'k1_house_notes',
  'source' => 'non-db',
  'module' => 'K1_House',
  'bean_name' => 'K1_House',
  'vname' => 'LBL_K1_HOUSE_NOTES_FROM_K1_HOUSE_TITLE',
  'id_name' => 'k1_house_notesk1_house_ida',
);
$dictionary["Note"]["fields"]["k1_house_notes_name"] = array (
  'name' => 'k1_house_notes_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_K1_HOUSE_NOTES_FROM_K1_HOUSE_TITLE',
  'save' => true,
  'id_name' => 'k1_house_notesk1_house_ida',
  'link' => 'k1_house_notes',
  'table' => 'k1_house',
  'module' => 'K1_House',
  'rname' => 'name',
);
$dictionary["Note"]["fields"]["k1_house_notesk1_house_ida"] = array (
  'name' => 'k1_house_notesk1_house_ida',
  'type' => 'link',
  'relationship' => 'k1_house_notes',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_K1_HOUSE_NOTES_FROM_NOTES_TITLE',
);

?>