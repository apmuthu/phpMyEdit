<?php
$page_title = "Institutions";
define('PIM_EXAMPLE', true);

// only after the above lines are defined, should the header be included
include('./header.php');

// Set the table
$opts['tb'] = 'institutions';

// Name of field which is the unique key
$opts['key'] = 'InstID';

// Type of key field (int/real/string/date etc.)
$opts['key_type'] = 'int';

// Sorting field(s)
$opts['sort_field'] = array('InstID');

// Number of records to display on the screen
// Value of -1 lists all records in a table
$opts['inc'] = 15;

$opts['fdd']['InstID'] = array(
  'name'     => 'InstID',
  'select'   => 'T',
  'options'  => 'AVCPDR', // auto increment
  'maxlen'   => 10,
  'default'  => '0',
  'sort'     => true
);
$opts['fdd']['InstName'] = array(
  'name'     => 'InstName',
  'select'   => 'T',
  'maxlen'   => 50,
  'sort'     => true
);
$opts['fdd']['StDate'] = array(
  'name'     => 'StDate',
  'select'   => 'T',
  'options'  => 'AVCPDR', // updated automatically (MySQL feature)
  'maxlen'   => 19,
  'default'  => 'CURRENT_TIMESTAMP',
  'sort'     => true
);
$opts['fdd']['Inactive'] = array(
  'name'     => 'Inactive',
  'select'   => 'T',
  'maxlen'   => 1,
  'default'  => '0',
  'sort'     => true
);

// Now important call to phpMyEdit
require_once $pme_root.'phpMyEdit.class.php';
new phpMyEdit($opts);

echo $pme_end;
?>