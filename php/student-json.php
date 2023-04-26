<?php

// DB table to use
$table = 'student';

// Table's primary key
$primaryKey = 's_id';

// Array of database columns which should be read and sent back to DataTables.
// The `db` parameter represents the column name in the database, while the `dt`
// parameter represents the DataTables column identifier. In this case simple
// indexes
$columns = array(
    array( 'db' => 's_id', 'dt' => 0 ),
    array( 'db' => 'std_id', 'dt' => 1 ),
    array( 'db' => 'std_first_name', 'dt' => 2 ),
    array( 'db' => 'std_last_name', 'dt' => 3 ),
    array( 'db' => 'std_department', 'dt' => 4 ),
    array( 'db' => 'std_program', 'dt' => 5 ),
    array( 'db' => 'std_class', 'dt' => 6 )
);

// SQL server connection information
$sql_details = array(
    'user' => 'root',
    'pass' => '',
    'db'   => 'itkktech',
    'host' => 'localhost'
);

// // Fixed WHERE condition
$filter_option = isset($_POST['filter_option']) ? $_POST['filter_option'] : '';
$where = "std_class = '" . $filter_option . "'";

// Call SSP::complex with the modified $where variable
include('ssp.class.php');
echo json_encode(
    SSP::complex( $_POST, $sql_details, $table, $primaryKey, $columns, $where )
);
