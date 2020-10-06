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
  'select'   => 'T',
  'maxlen'   => 10,
  'sort'     => true
);
$opts['fdd']['FullName'] = array(
  'name'     => 'FullName',
  'select'   => 'T',
  'maxlen'   => 50,
  'sort'     => true
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
  'maxlen'   => 40,
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

?>

</body>
</html>