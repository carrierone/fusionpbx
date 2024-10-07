<?php

// Include necessary FusionPBX files
require_once dirname(__DIR__, 2) . "/resources/require.php";

// Function to get company name from LRN lookup
function get_company_name($caller_id_number) {
    $url = "http://localhost:3000/lrn-lookup/company-only/${caller_id_number}?token=secret1&textOnly=true";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    curl_close($ch);
    return trim($response);
}

// Connect to the database
$database = new database;

// Get all CDR entries with error in origination_caller_id_name
$sql = "SELECT xml_cdr_uuid, caller_id_number, origination_caller_id_name FROM v_xml_cdr WHERE origination_caller_id_name LIKE '%error%'";
$parameters = [];
$result = $database->select($sql, $parameters, 'all');

if (is_array($result) && count($result) > 0) {
    foreach ($result as $row) {
        $xml_cdr_uuid = $row['xml_cdr_uuid'];
        $caller_id_number = $row['caller_id_number'];
        $origination_caller_id_name = $row['origination_caller_id_name'];

        // Extract the part after the error JSON
        $parts = explode('/', $origination_caller_id_name, 2);
        $caller_name = $parts[1] ?? '';

        // Get the correct company name
        $company_name = get_company_name($caller_id_number);

        // Create the new origination_caller_id_name
        $new_origination_caller_id_name = $company_name . '/' . $caller_name;

        // Update the database
        $sql = "UPDATE v_xml_cdr SET origination_caller_id_name = :new_name WHERE xml_cdr_uuid = :uuid";
        $parameters = [
            'new_name' => $new_origination_caller_id_name,
            'uuid' => $xml_cdr_uuid
        ];
        $database->execute($sql, $parameters);

        echo "Updated record: " . $xml_cdr_uuid . "\n";
    }
    echo "All records with errors have been updated.\n";
} else {
    echo "No records with errors found.\n";
}

?>
