<?php

$lang = array_merge($lang, array (
  'l_page_title' => 'Anti-Spam log',
  'r_type_newuser' => 'Registration',
  'r_type_message' => 'Post',
  'r_type_contact' => 'Contact form data',
  'r_type_order'   => 'Order',
  'r_type_unknown' => 'Unknown',
  'ints' =>
  array (
    'today' => 'Today',
    'yesterday' => 'Yesterday',
    'week' => 'Last week',
    'custom' => 'Custom dates',
  ),
  'l_requests_total' => 'Requests total',
  'l_allowed' => 'Allowed',
  'l_denied' => 'Denied',
  'l_request_text' => 'Text',
  'l_no_requests' => 'No requests yet!',
  'l_request_type' => 'Request type',
  'l_response_comment' => 'API comment',
  'l_javascript_title' => 'Visitor without JavaScript support',
  'l_offtop_title' => 'Offtop',
  'l_blacklist_title' => 'Visitor in blacklists',
  'l_fastsubmit_title' => 'To fast form submission',
  'l_filter' => 'Filter',
  'l_allow_denied' => 'Allowed and denied',
  'l_allow' => 'Allowed',
  'l_message_newuser' => 'Posts and registrations',
  'l_message' => 'Posts',
  'l_newuser' => 'Registrations',
  'l_sender' => 'Sender',
  'l_service_num' => 'Service #',
  'l_ip' => 'IP',
  'l_ip_hint' => 'IP address of the site visitor',
  'l_nickname' => 'Username',
  'l_this_is_spam' => 'Report SPAM & blacklist',
  'l_this_is_not_spam' => 'Report not SPAM & whitelist',
  'l_this_is_spam_hint' => 'Blacklist the sender of comment/registration!',
  'l_spam' => 'Spam',
  'l_not_spam' => 'Not spam',
  'l_sender_blacklisted' => 'Change made. This will take effect in 5-10 minutes.',
  'l_sender_blacklisted_removed' => 'Change made. This will take effect in 5-10 minutes.',
  'l_request_marked' => 'The has sender been blacklisted, changes will take effect within 5-10 minutes.%s Thanks for feedback.&nbsp;<a href="#/" data-rq="%s" class="red" data-toggle="modal" data-target="#notice_modal">Add notice</a>',
  'l_request_marked0' => 'The has sender been blacklisted, changes will take effect within 5-10 minutes.%s Thanks for feedback.',
  'l_request_marked1' => 'The has sender been whitelisted, changes will take effect within 5-10 minutes.%s Thanks for feedback.',
  'l_request_marked_email' => ' Also you will get to %s a copy of this record in a few minutes.',
  'l_notice_1' => 'Leave a notice for the feedback',
  'l_notice_2' => 'Leave a notice about this issue to help us resolve it faster.',
  'l_thanks_notice' => 'Thanks for your notice!!',
  'l_sender_blacklisted_short' => 'Sender blacklisted!',
  'l_feedback_result_message_0' => 'Reported as SPAM!',
  'l_feedback_result_message_1' => 'Reported as not SPAM!',
  'l_feedback_title' => 'Contact us if you have spam bots or wrong filtration!',
  'stat_ints' =>
  array (
    'week' => 'PAST WEEK',
    'month' => 'PAST MONTH',
    'alltime' => 'ALL TIME',
  ),
  'l_spam_blocked' => 'SPAM BLOCKED',
  'l_legitimate_stat' => 'LEGITIMATE',
  'l_stat_title' => '%s antispam analytics',
  'l_sfw_title' => '%s SpamFireWall analytics',
  'l_go_to_messages' => 'Page URL',
  'l_share_title' => 'My Anti-Spam protection stat',
  'l_share_desc' => 'All time %s spam blocked',
  'l_share_aa_link' => 'Here is your unique link to this page',
  'l_share_aa_buttons' => 'Use these buttons to share results with friends',
  'l_submitted_on' => 'Submitted on',
  'l_records_found' => 'Records found %s.',
  'l_records_found_pv' => '%s - %s records of %s.',
  'l_table_date' => 'Date',
  'l_table_date_hint' => 'Date and time of the request',
  'l_table_status' => 'Status',
  'l_table_status_hint' => 'The result of the request processing (denied/approved)',
  'l_table_frequency' => 'Spam attacks',
  'l_table_frequency_hint' => 'The total number of attacks with these IP and email and a separate number by types of addresses',
  'l_table_author' => 'Author, Email, IP',
  'l_table_author_hint' => 'User data (nickname, IP address, e-mail address) and details of the request',
  'l_feedback_skipped_test_email' => 'Test email %s. Feedback requests skiped.',
  'l_tools' => 'Tools',
  'l_ipemailnick' => 'IP, Email, Nickname',
  'l_confirm_deletion' => 'Delete this record from anti-spam log?',
  'l_delete_all_approved' => 'Delete all approved records',
  'l_confirm_deletion_bulk' => 'Delete all approved records from anti-spam log?',
  'l_delete_all_approved_hint' => 'Will be deleted all approved records for selected website.',
  'l_hits_total' => 'Hits',
  'l_hits_total_hint' => 'Total number of sessions requested with this IP address',
  'l_hits_allow' => 'Passed',
  'l_hits_allow_hint' => 'The number of allowed sessions for this IP address',
  'l_total' => 'Total: ',
  'l_log' => 'Log',
  'l_sfw_no_records' => 'No records in log',
  'l_log_updated' => 'Log is being updated every 1 hour.',
  'l_session_begin' => 'Session beginning',
  'l_session_begin_hint' => 'Date and time of the beginning of the session with this IP address',
  'l_session_end' => 'Session end',
  'l_choose_period' => 'Choose period',
  'l_choose_site' => 'All sites',
  'l_choose_country' => '---choose country---',
  'l_search_ip' => 'Search by IP',
  'l_tooltip_text' => "If you mark the request as Spam these IP/Email will be added to your personal Blacklist. If you mark request as Not Spam, the messages from these IP/Emails will not be processed.",
  'l_stat_begin' => 'Begin',
  'l_stat_end' => 'End',
  'l_stat_show' => 'Show',
  'l_date_days' => 'days',
  'l_sfw_country' => 'Country',
  'l_sfw_country_hint' => 'Country to which this IP address belongs',
  'l_sfw_ipowner' => 'IP owner',
  'l_sfw_ipowner_hint' => 'Registered owner of this IP address',
  'l_choose_status' => 'Status',
  'l_allow' => 'Whitelist',
  'l_deny' => 'Blacklist',
  'l_save' => 'Save',
  'l_record' => 'Record',
  'l_record_hint' => 'What exactly are we blocking/allowing',
  'l_created' => 'Created',
  'l_created_hint' => 'Date of record creation',
  'l_updated' => 'Updated',
  'l_status' => 'Status',
  'l_status_hint' => 'The rule for processing a record',
  'l_delete_record' => 'Delete record',
  'l_delete_record_hint' => 'Deleting the entry from the lists',
  'l_delete' => 'Delete',
  'l_add_record' => 'Add records',
  'l_personal_blacklists' => 'To Personal black & white lists',
  'l_private_hint' => 'Whitelist IP/email and CleanTalk will not check it or
                       blacklist IP/email and CleanTalk always will be blocking it',
  'l_addrecord_hint' => 'Examples: 1.2.3.4, mail@example.com, example.com, com.',
  'l_addrecord_hint_spamfirewall' => 'Examples: 192.168.0.1/32, 192.168.0.0/24, 0.0.0.0/0.',
  'l_private_text' => 'Using this interface you can manage your personal black/white lists, 
                       view records, change status of record or delete it from the list. Changes will be applied within 2-3 minutes.<br /',
  'l_search' => 'Search',
  'l_search_record' => 'Search IP/email',
  'l_logs_status' => 'Any status',
  'l_logs_websites' => 'All websites',
  'l_logs_countries' => 'All countries',
  'l_service_disabled' => 'Service disabled',
  'l_export_data' => 'Export data CSV format',
  'l_export_data_hint' => 'Stop-word records are exported with prefix =',
  'l_format_desc' => 'Import CSV',
  'l_delete_selected' => 'Delete selected records',
  'l_7_hits' => '7 days hits',
  'l_7_hits_hint' => 'The number of blocked/approved requests for this entry for the last 7 days',
  'l_log_updated' => 'Log is being updated every 1 hour.',
  'l_country' => 'Country',
  'l_add_instruction' => 'Allowed division addresses with "," and ";".',
  'l_add_country' => 'Add a country',
  'l_private_norecords' => 'No records',
  'l_antispam_analytics' => 'AntiSpam Analytics',
  'l_sfw_analytics' => 'SpamFireWall Analytics',
  'l_choose_type' => '--choose type--',
  'l_countries_stop_list_notice' => 'Please purchase extra package to filter spam by countries.<br />%s',
  'l_record_service_antispam' => 'AntiSpam',
  'l_record_service_spamfirewall' => 'SpamFireWall',
  'l_record_service_securityfirewall' => 'Security FireWall',
  'l_service_type_hint' => 'AntiSpam - a service to protect against spam any forms on the website. For example - comments, registrations, contact, orders forms and etc. SpamFireWall - a service to protect the website against crawling (reading) by spam bots.',
  'l_records_added' => '%s record(s) were successfully added.',
  'l_records_exist' => '%s record(s) already exist.',
  'l_records_wrong' => '%s record(s) have the wrong format.',
  'l_addedas_appendix' => 'The changes will take effect within 2-3 minutes.',
  'l_addedsfw_appendix' => ' Turn off, then turn on SpamFireWall in plugin settings to apply changes immediately. Otherwise changes will be applied within 2-3 minutes.',
  'l_deleted_recs_text' => ' record(s) was(were) successfully deleted.',
  'l_add_allsites' => 'Add for all sites',
  'l_ufbtext' => 'If you see filtration mistake in your log mark it as Spam/Not spam
                        and we will add +1 day for every IP/email. Be cautious - IP/email will be added
                        to your Black & White lists and will be always blocked.',
  'l_feedback_write_failed' => 'Feedback write failed',
  'l_granted_services' => 'Delegated sites',
  'l_select_all_countries' => 'Select all countries',
  'l_antispam_option' => 'Spam and legitimate hits',
  'l_top20_option' => 'TOP20 ratings for past 7 days',
  'l_top20_ips' => 'TOP20 spam IPs',
  'l_top20_emails' => 'TOP20 spam Emails',
  'l_top20_countries' => 'TOP20 spam Countries',
  'l_top20_record' => 'Record',
  'l_top20_hits' => 'Hits',
  'l_top20_blacklist' => 'In Personal BlackLists',
  'l_top20_bl' => 'blacklists',
  'l_top20_yes' => 'Yes',
  'l_top20_no' => 'No',
  'l_top20_caution' => 'Be cautious - all records will be added to all your sites in personal Blacklists.',
  'l_top20_message' => 'Records successfully added to <a href="/my/show_private">Blacklists</a>.',
  'l_top20_button' => 'Add to Blacklists',

    'l_keep_history' => 'Keep history %s days',
    'l_keep_history_hint' => 'The service keeps Anti-Spam log for the last 7 days. Buy the Extra Package to keep the Log for the last 45 days.',
    'l_keep_history_45' => '45 Days Log',

    'l_app_notification' => '<p><strong>Thank you for the feedback!</strong></p><p>You use old plugin version! It can affect the accuracy of the definition of spam.</p><p>Please, update your anti-spam app for <a href="/update?platform=%s" class="alert-link">the latest version</a></p>',

    'l_personal_lists' => 'Personal lists',
    'l_note' => 'Note',
    'l_note_hint_private' => 'Arbitrary text for individual description',
    'l_note_hint' => 'A note about records (optional)',
    'l_cancel' => 'Cancel',
    'l_add' => 'Add',
    'l_deny_except' => 'Blacklist all countries except selected',    
    'l_allow_except' => 'Whitelist all countries except selected',
    'l_add_new_records' => 'Add new records',
    'l_site' => 'Site',
    'l_site_hint' => 'Site for which the rule is applied',
    'l_page' => 'Page',
    'l_of' => 'of',
    'l_items_per_page' => 'Items per page:',
    'l_countries_form_title' => 'Select the countries you want to allow access to or block from visiting your website',
    'l_record_form_title' => 'Enter IP or e-mail you want to permanently block or permanently allow',
    'l_filter_title' => 'Display records for',
    'l_delete_confirm' => 'Are you sure you want to delete selected records?',
    'l_clear' => 'Clear',
    'l_browse' => 'Browse',
    'l_change' => 'Change',
    'l_log_no_data' => 'No data',
    'l_result' => 'Result',
    'l_total_files' => 'Total files',
    'l_choose_record_type' => 'All records type',
    'l_record_type' => 'Record type',
    'l_record_type_hint' => 'Type of blocked/allowed recording',
    'l_record_type_ip' => 'IP address',
    'l_record_type_email' => 'E-mail',
    'l_record_type_country' => 'Country',
    'l_record_type_domain' => 'Domain',
    'l_record_type_network' => 'IP network',
    'l_record_type_stop_word' => 'Stop word',
    'l_record_type_language' => 'Language',
    'l_select_record_type' => 'Select filter type',
    'l_add_hint' => 'You can add multiple entries separated by commas.',
    'l_add_new_filter' => 'Add new filter',
    
    'l_stop_list_purchase_hint' => 'Please purchase extra package to filter comments with the stop list.',
    'l_use_list' => 'Use CleanTalk’s common stop-list',
    'l_list' => 'CleanTalk’s common stop-list',
    'l_antispam_description' => 'Anti-Spam list is available on the <b>Anti-Spam plugin</b> and allows you to block comments/messages by parameters that you want to use IP/Email and etc.',
    'l_spamfirewall_description' => 'SpamFireWall this is the option in the <b>Anti-Spam plugin</b> that allows blocking IPs with the most spam activity. SWF doesn\'t block full access to your website and legitimate visitors can skip it.',
    'l_securityfirewall_description' => 'Security FireWall this is the option in the <b>Security plugin</b> and allows you to totally block access to your website for IPs from your BlackLists.',
    'r_type_newuser_denied' => 'Registration denied',
    'r_type_message_denied' => 'Post denied',
    'r_type_contact_denied' => 'Contact form data denied',
    'r_type_order_denied'   => 'Order denied',
    'r_type_unknown_denied' => 'Denied',
    'r_type_newuser_approved' => 'Registration approved',
    'r_type_message_approved' => 'Post approved',
    'r_type_contact_approved' => 'Contact form data approved',
    'r_type_order_approved'   => 'Order approved',
    'r_type_unknown_approved' => 'Approved',
    'l_adding_filters' => 'Adding filters',
    'l_add_selected' => 'Add selected',
));
