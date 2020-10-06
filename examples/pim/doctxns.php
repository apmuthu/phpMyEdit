<?php
$page_title = "Document Transactions";
define('PIM_EXAMPLE', true);

// only after the above lines are defined, should the header be included
include('./header.php');

// Set the table
$opts['tb'] = 'doctxns';

// Name of field which is the unique key
$opts['key'] = 'TxnID';

// Type of key field (int/real/string/date etc.)
$opts['key_type'] = 'int';

// Sorting field(s)
$opts['sort_field'] = array('TxnID');

// Number of records to display on the screen
// Value of -1 lists all records in a table
$opts['inc'] = 15;

$opts['fdd']['TxnID'] = array(
  'name'     => 'TxnID',
  'select'   => 'T',
  'options'  => 'AVCPDR', // auto increment
  'maxlen'   => 10,
  'default'  => '0',
  'sort'     => true
);
$opts['fdd']['UserID'] = array(
  'name'     => 'UserID',
  'select'   => 'T',
  'maxlen'   => 10,
  'sort'     => true
);
$opts['fdd']['EntryDT'] = array(
  'name'     => 'EntryDT',
  'select'   => 'T',
  'options'  => 'AVCPDR', // updated automatically (MySQL feature)
  'maxlen'   => 19,
  'default'  => 'CURRENT_TIMESTAMP',
  'sort'     => true
);
$opts['fdd']['FileRef'] = array(
  'name'     => 'FileRef',
  'select'   => 'T',
  'maxlen'   => 20,
  'sort'     => true
);
$opts['fdd']['Subject'] = array(
  'name'     => 'Subject',
  'select'   => 'T',
  'maxlen'   => 50,
  'sort'     => true
);
$opts['fdd']['Issue'] = array(
  'name'     => 'Issue',
  'select'   => 'T',
  'maxlen'   => 65535,
  'textarea' => array(
    'rows' => 5,
    'cols' => 50),
  'sort'     => true
);

// Now important call to phpMyEdit
require_once $pme_root.'phpMyEdit.class.php';
new phpMyEdit($opts);

?>

</body>
</html>