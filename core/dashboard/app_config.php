<?php

	//application details
		$apps[$x]['name'] = 'Dashboard';
		$apps[$x]['uuid'] = '55533bef-4f04-434a-92af-999c1e9927f7';
		$apps[$x]['category'] = 'system';
		$apps[$x]['subcategory'] = '';
		$apps[$x]['version'] = '1.1';
		$apps[$x]['license'] = 'Mozilla Public License 1.1';
		$apps[$x]['url'] = 'http://www.fusionpbx.com';
		$apps[$x]['description']['en-us'] = '';

	//permission details
		$y = 0;
		$apps[$x]['permissions'][$y]['name'] = 'dashboard_view';
		$apps[$x]['permissions'][$y]['groups'][] = 'superadmin';
		$y++;
		$apps[$x]['permissions'][$y]['name'] = 'dashboard_add';
		$apps[$x]['permissions'][$y]['groups'][] = 'superadmin';
		$y++;
		$apps[$x]['permissions'][$y]['name'] = 'dashboard_edit';
		$apps[$x]['permissions'][$y]['groups'][] = 'superadmin';
		$y++;
		$apps[$x]['permissions'][$y]['name'] = 'dashboard_delete';
		$apps[$x]['permissions'][$y]['groups'][] = 'superadmin';
		$y++;
		$apps[$x]['permissions'][$y]['name'] = 'dashboard_all';
		$apps[$x]['permissions'][$y]['groups'][] = 'superadmin';
		$y++;
		$apps[$x]['permissions'][$y]['name'] = 'dashboard_group_view';
		$apps[$x]['permissions'][$y]['groups'][] = 'superadmin';
		$y++;
		$apps[$x]['permissions'][$y]['name'] = 'dashboard_group_add';
		$apps[$x]['permissions'][$y]['groups'][] = 'superadmin';
		$y++;
		$apps[$x]['permissions'][$y]['name'] = 'dashboard_group_edit';
		$apps[$x]['permissions'][$y]['groups'][] = 'superadmin';
		$y++;
		$apps[$x]['permissions'][$y]['name'] = 'dashboard_group_delete';
		$apps[$x]['permissions'][$y]['groups'][] = 'superadmin';
		$y++;
		$apps[$x]['permissions'][$y]['name'] = 'dashboard_group_all';
		$apps[$x]['permissions'][$y]['groups'][] = 'superadmin';
		$y++;
		$apps[$x]['permissions'][$y]['name'] = 'dashboard_parent_uuid';
		$y++;

	//dashboard
		$y = 0;
		$apps[$x]['db'][$y]['table']['name'] = 'v_dashboard';
		$apps[$x]['db'][$y]['table']['parent'] = '';
		$z = 0;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = 'dashboard_uuid';
		$apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = 'uuid';
		$apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = 'text';
		$apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = 'char(36)';
		$apps[$x]['db'][$y]['fields'][$z]['key']['type'] = 'primary';
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = 'dashboard_parent_uuid';
		$apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = 'uuid';
		$apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = 'text';
		$apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = 'char(36)';
		$apps[$x]['db'][$y]['fields'][$z]['key']['type'] = 'foreign';
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = 'dashboard_name';
		$apps[$x]['db'][$y]['fields'][$z]['type'] = 'text';
		$apps[$x]['db'][$y]['fields'][$z]['search_by'] = '';
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = 'Enter the dashboard name.';
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = 'dashboard_path';
		$apps[$x]['db'][$y]['fields'][$z]['type'] = 'text';
		$apps[$x]['db'][$y]['fields'][$z]['search_by'] = '';
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = 'Enter the dashboard path.';
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = 'dashboard_icon';
		$apps[$x]['db'][$y]['fields'][$z]['type'] = 'text';
		$apps[$x]['db'][$y]['fields'][$z]['search_by'] = '';
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = 'Enter the dashboard icon.';
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = 'dashboard_url';
		$apps[$x]['db'][$y]['fields'][$z]['type'] = 'text';
		$apps[$x]['db'][$y]['fields'][$z]['search_by'] = '';
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = 'Enter the dashboard url.';
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = 'dashboard_target';
		$apps[$x]['db'][$y]['fields'][$z]['type'] = 'text';
		$apps[$x]['db'][$y]['fields'][$z]['search_by'] = '';
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = 'Enter the dashboard target.';
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = 'dashboard_width';
		$apps[$x]['db'][$y]['fields'][$z]['type'] = 'numeric';
		$apps[$x]['db'][$y]['fields'][$z]['search_by'] = '';
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = 'Enter the dashboard width.';
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = 'dashboard_height';
		$apps[$x]['db'][$y]['fields'][$z]['type'] = 'numeric';
		$apps[$x]['db'][$y]['fields'][$z]['search_by'] = '';
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = 'Enter the dashboard height.';
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = 'dashboard_content';
		$apps[$x]['db'][$y]['fields'][$z]['type'] = 'text';
		$apps[$x]['db'][$y]['fields'][$z]['search_by'] = '';
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = 'Enter the dashboard content.';
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = 'dashboard_content_text_align';
		$apps[$x]['db'][$y]['fields'][$z]['type'] = 'text';
		$apps[$x]['db'][$y]['fields'][$z]['search_by'] = '';
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = 'Select the dashboard content text alignment.';
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = 'dashboard_content_details';
		$apps[$x]['db'][$y]['fields'][$z]['type'] = 'text';
		$apps[$x]['db'][$y]['fields'][$z]['search_by'] = '';
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = 'Enter the dashboard content details.';
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = 'dashboard_chart_type';
		$apps[$x]['db'][$y]['fields'][$z]['type'] = 'text';
		$apps[$x]['db'][$y]['fields'][$z]['search_by'] = '';
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = 'Enter the chart type.';
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = 'dashboard_label_enabled';
		$apps[$x]['db'][$y]['fields'][$z]['type'] = 'boolean';
		$apps[$x]['db'][$y]['fields'][$z]['toggle'] = ['true','false'];
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = 'Enter the label enabled';
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name']['text'] = 'dashboard_label_text_color';
		$apps[$x]['db'][$y]['fields'][$z]['name']['deprecated'] = 'dashboard_heading_text_color';
		$apps[$x]['db'][$y]['fields'][$z]['type'] = 'text';
		$apps[$x]['db'][$y]['fields'][$z]['search_by'] = '';
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = 'Enter the label text color.';
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name']['text'] = 'dashboard_label_text_color_hover';
		$apps[$x]['db'][$y]['fields'][$z]['name']['deprecated'] = 'dashboard_heading_text_color_hover';
		$apps[$x]['db'][$y]['fields'][$z]['type'] = 'text';
		$apps[$x]['db'][$y]['fields'][$z]['search_by'] = '';
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = 'Enter the label text color hover.';
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name']['text'] = 'dashboard_label_background_color';
		$apps[$x]['db'][$y]['fields'][$z]['name']['deprecated'] = 'dashboard_heading_background_color';
		$apps[$x]['db'][$y]['fields'][$z]['type'] = 'text';
		$apps[$x]['db'][$y]['fields'][$z]['search_by'] = '';
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = 'Enter the label background color.';
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name']['text'] = 'dashboard_label_background_color_hover';
		$apps[$x]['db'][$y]['fields'][$z]['name']['deprecated'] = 'dashboard_heading_background_color_hover';
		$apps[$x]['db'][$y]['fields'][$z]['type'] = 'text';
		$apps[$x]['db'][$y]['fields'][$z]['search_by'] = '';
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = 'Enter the label background color hover.';
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = 'dashboard_number_text_color';
		$apps[$x]['db'][$y]['fields'][$z]['type'] = 'text';
		$apps[$x]['db'][$y]['fields'][$z]['search_by'] = '';
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = 'Enter the number text color.';
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = 'dashboard_number_text_color_hover';
		$apps[$x]['db'][$y]['fields'][$z]['type'] = 'text';
		$apps[$x]['db'][$y]['fields'][$z]['search_by'] = '';
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = 'Enter the number text color hover.';
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = 'dashboard_background_color';
		$apps[$x]['db'][$y]['fields'][$z]['type'] = 'text';
		$apps[$x]['db'][$y]['fields'][$z]['search_by'] = '';
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = 'Enter the background color.';
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = 'dashboard_background_color_hover';
		$apps[$x]['db'][$y]['fields'][$z]['type'] = 'text';
		$apps[$x]['db'][$y]['fields'][$z]['search_by'] = '';
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = 'Enter the background color hover.';
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = 'dashboard_detail_background_color';
		$apps[$x]['db'][$y]['fields'][$z]['type'] = 'text';
		$apps[$x]['db'][$y]['fields'][$z]['search_by'] = '';
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = 'Enter the detail background color.';
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = 'dashboard_column_span';
		$apps[$x]['db'][$y]['fields'][$z]['type'] = 'numeric';
		$apps[$x]['db'][$y]['fields'][$z]['search_by'] = '';
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = 'Enter the dashboard column span.';
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = 'dashboard_row_span';
		$apps[$x]['db'][$y]['fields'][$z]['type'] = 'numeric';
		$apps[$x]['db'][$y]['fields'][$z]['search_by'] = '';
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = 'Enter the dashboard row span.';
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = 'dashboard_details_state';
		$apps[$x]['db'][$y]['fields'][$z]['type'] = 'text';
		$apps[$x]['db'][$y]['fields'][$z]['search_by'] = 'expanded';
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = 'Set the default state of the widget details.';
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = 'dashboard_order';
		$apps[$x]['db'][$y]['fields'][$z]['type'] = 'numeric';
		$apps[$x]['db'][$y]['fields'][$z]['search_by'] = '';
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = 'Enter the dashboard order.';
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = 'dashboard_enabled';
		$apps[$x]['db'][$y]['fields'][$z]['type'] = 'boolean';
		$apps[$x]['db'][$y]['fields'][$z]['toggle'] = ['true','false'];
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = 'Enter the dashboard enabled.';
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = 'dashboard_description';
		$apps[$x]['db'][$y]['fields'][$z]['type'] = 'text';
		$apps[$x]['db'][$y]['fields'][$z]['search_by'] = '';
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = 'Enter the dashboard description.';
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "insert_date";
		$apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = 'timestamptz';
		$apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = 'date';
		$apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = 'date';
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "insert_user";
		$apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = "uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = "char(36)";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "update_date";
		$apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = 'timestamptz';
		$apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = 'date';
		$apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = 'date';
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "update_user";
		$apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = "uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = "char(36)";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";

	//dashboard groups
		$y = 5;
		$apps[$x]['db'][$y]['table']['name'] = 'v_dashboard_groups';
		$apps[$x]['db'][$y]['table']['parent'] = 'v_dashboard';
		$z = 0;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = 'dashboard_group_uuid';
		$apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = 'uuid';
		$apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = 'text';
		$apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = 'char(36)';
		$apps[$x]['db'][$y]['fields'][$z]['key']['type'] = 'primary';
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = 'dashboard_uuid';
		$apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = 'uuid';
		$apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = 'text';
		$apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = 'char(36)';
		$apps[$x]['db'][$y]['fields'][$z]['key']['type'] = 'foreign';
		$apps[$x]['db'][$y]['fields'][$z]['key']['reference']['table'] = 'v_dashboard';
		$apps[$x]['db'][$y]['fields'][$z]['key']['reference']['field'] = 'dashboard_uuid';
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = 'group_uuid';
		$apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = 'uuid';
		$apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = 'text';
		$apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = 'char(36)';
		$apps[$x]['db'][$y]['fields'][$z]['search_by'] = 'no';
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = 'Enter the group uuid.';
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "insert_date";
		$apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = 'timestamptz';
		$apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = 'date';
		$apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = 'date';
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "insert_user";
		$apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = "uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = "char(36)";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "update_date";
		$apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = 'timestamptz';
		$apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = 'date';
		$apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = 'date';
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "update_user";
		$apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = "uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = "char(36)";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";

	//default settings
		$y=0;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "d773dc8d-7af4-4a9b-bd58-18430d383d6a";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "theme";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "dashboard_chart_border_color";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "#fff";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "false";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "4fac6d6f-22cb-4d79-af66-d690cb9c8202";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "theme";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "dashboard_chart_border_width";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "1";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "false";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "";

?>
