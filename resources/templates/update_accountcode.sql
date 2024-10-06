-- Update accountcode with caller_id_name in v_xml_cdr table
UPDATE v_xml_cdr SET accountcode = caller_id_name WHERE accountcode IS NULL OR accountcode = '';
