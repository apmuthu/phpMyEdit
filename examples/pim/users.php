<?php
$page_title = "Users";
define('PIM_EXAMPLE', true);

// only after the above lines are defined, should the header be included
include('./header.php');

// Set the table
$opts['tb'] = 'users';

// Name of field which is the unique key
$opts['key'] = 'UserID';

// Type of key field (int/real/string/date etc.)
$opts['key_type'] = 'int';

// Sorting field(s)
$opts['sort_field'] = array('UserID');

// Number of records to display on the screen
// Value of -1 lists all records in a table
$opts['inc'] = 15;

$opts['fdd']['UserID'] = array(
  'name'     => 'UserID',
  'select'   => 'T',
  'options'  => 'AVCPDR', // auto increment
  'maxlen'   => 10,
  'default'  => '0',
  'sort'     => true
);
$opts['fdd']['InstID'] = array(
  'name'     => 'InstID',
  'select'   => 'D',
  'values'   => array(
                   'table' => 'institutions',
                   'column' => 'InstID',
                   'description' => 'InstName'
                ),
  'maxlen'   => 10,
  'sort'     => true
);
/*                   'description' => array('columns' => array('InstID', 'InstName'), 'divs' => array(' - ')) */
$opts['fdd']['FullName'] = array(
  'name'     => 'FullName',
  'select'   => 'T',
  'maxlen'   => 50,
  'sort'     => true,
  'URL'      => './doctxns.php?u=$key'
);
$opts['fdd']['username'] = array(
  'name'     => 'Username',
  'select'   => 'T',
  'maxlen'   => 10,
  'sort'     => true
);
$opts['fdd']['passcode'] = array(
  'name'     => 'Passcode',
  'select'   => 'T',
  'input'    => 'W',
  'maxlen'   => 40,
  'sort'     => true,
  'sqlw'     => 'IF(Passcode = $val_qas, $val_qas, MD5($val_qas))'
);
$opts['fdd']['Inactive'] = array(
  'name'     => 'Inactive',
  'select'   => 'C',
  'values'   => array(1),
//  'values2'   => array(1 => 'Disabled'),
  'colattrs' => 'align="center"',
  'maxlen'   => 1,
  'default'  => '0',
  'sort'     => true
);

if(isset($_REQUEST['i']) && $_REQUEST['i']+0 > 0) { $i = $_REQUEST['i']+0; $opts['filters'] = "PMEtable0.InstID=$i"; }

// Now important call to phpMyEdit
require_once $pme_root.'phpMyEdit.class.php';
new phpMyEdit($opts);

echo $pme_end;
?>