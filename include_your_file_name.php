<?php 

if ( isset($_GET['action'] ) && $_GET['action'] == 'download_csv_file' )
{
	// Query
	$statement = $wpdb->get_results("SELECT * FROM `table_name` ORDER BY `id` DESC");
	
	// file creation
	$wp_filename = "filename_".date("d-m-y").".csv";
	
	// Clean object
	ob_end_clean ();
	
	// Open file
	$wp_file = fopen($wp_filename,"w");
	
	// loop for insert data into CSV file
	foreach ($statement as $statementFet)
	{
		$wp_array = array(
			"name"=>$statementFet->name,
			"phone"=>$statementFet->phone
		);
		fputcsv($wp_file,$wp_array);
	}
	
	// Close file
	fclose($wp_file);
	
	// download csv file
	header("Content-Description: File Transfer");
	header("Content-Disposition: attachment; filename=".$wp_filename);
	header("Content-Type: application/csv;");
	readfile($wp_filename);
	exit;
}