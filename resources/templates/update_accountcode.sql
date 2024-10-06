-- Add xml_cdr_account_code permission
INSERT INTO v_permissions (permission_uuid, permission_name, application_name, application_uuid)
VALUES ('4a085c51-7635-ff03-f67b-86e834422848', 'xml_cdr_account_code', 'XML CDR', '4a085c51-7635-ff03-f67b-86e834422848');

-- Add xml_cdr_account_code permission to superadmin group
INSERT INTO v_group_permissions (group_permission_uuid, permission_name, group_name)
SELECT '4a085c51-7635-ff03-f67b-86e834422849', 'xml_cdr_account_code', group_name 
FROM v_groups 
WHERE group_name = 'superadmin';
