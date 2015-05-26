<?php
// created: 2015-05-26 17:14:18
$dictionary["k1_house_k1_office"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'k1_house_k1_office' => 
    array (
      'lhs_module' => 'K1_House',
      'lhs_table' => 'k1_house',
      'lhs_key' => 'id',
      'rhs_module' => 'K1_office',
      'rhs_table' => 'k1_office',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'k1_house_k1_office_c',
      'join_key_lhs' => 'k1_house_k1_officek1_house_ida',
      'join_key_rhs' => 'k1_house_k1_officek1_office_idb',
    ),
  ),
  'table' => 'k1_house_k1_office_c',
  'fields' => 
  array (
    0 => 
    array (
      'name' => 'id',
      'type' => 'varchar',
      'len' => 36,
    ),
    1 => 
    array (
      'name' => 'date_modified',
      'type' => 'datetime',
    ),
    2 => 
    array (
      'name' => 'deleted',
      'type' => 'bool',
      'len' => '1',
      'default' => '0',
      'required' => true,
    ),
    3 => 
    array (
      'name' => 'k1_house_k1_officek1_house_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'k1_house_k1_officek1_office_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'k1_house_k1_officespk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'k1_house_k1_office_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'k1_house_k1_officek1_house_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'k1_house_k1_office_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'k1_house_k1_officek1_office_idb',
      ),
    ),
  ),
);