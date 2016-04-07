<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * External functions and service definitions.
 *
 * @package    local_mobile
 * @copyright  2014 Juan Leyva <juan@moodle.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die;

$functions = array(
    'local_mobile_core_enrol_get_course_enrolment_methods' => array(
        'classname'   => 'local_mobile_external',
        'methodname'  => 'core_enrol_get_course_enrolment_methods',
        'classpath'   => 'local/mobile/externallib.php',
        'description' => 'Get the list of course enrolment methods',
        'type'        => 'read',
    ),
    'local_mobile_enrol_guest_get_instance_info' => array(
        'classname'   => 'local_mobile_external',
        'methodname'  => 'enrol_guest_get_instance_info',
        'classpath'   => 'local/mobile/externallib.php',
        'description' => 'Return guest enrolment instance information.',
        'type'        => 'read'
    ),
    'local_mobile_get_plugin_settings' => array(
        'classname'   => 'local_mobile_external',
        'methodname'  => 'get_plugin_settings',
        'classpath'   => 'local/mobile/externallib.php',
        'description' => 'Retrieve the plugin settings.',
        'type'        => 'read',
    ),

    'local_mobile_mod_forum_can_add_discussion' => array(
        'classname' => 'local_mobile_external',
        'methodname' => 'mod_forum_can_add_discussion',
        'classpath'   => 'local/mobile/externallib.php',
        'description' => 'Check if the current user can add discussions in the given forum (and optionally for the given group).',
        'type' => 'read'
    ),

    'local_mobile_mod_glossary_get_glossaries_by_courses' => array(
        'classname'     => 'local_mobile_external',
        'methodname'    => 'mod_glossary_get_glossaries_by_courses',
        'description'   => 'Retrieve a list of glossaries from several courses.',
        'type'          => 'read',
        'classpath'     => 'local/mobile/externallib.php',
        'capabilities'  => 'mod/glossary:view'
    ),

    'local_mobile_mod_glossary_view_glossary' => array(
        'classname'     => 'local_mobile_external',
        'methodname'    => 'mod_glossary_view_glossary',
        'description'   => 'Notify the glossary as being viewed.',
        'type'          => 'write',
        'classpath'     => 'local/mobile/externallib.php',
        'capabilities'  => 'mod/glossary:view'
    ),

    'local_mobile_mod_glossary_view_entry' => array(
        'classname'     => 'local_mobile_external',
        'methodname'    => 'mod_glossary_view_entry',
        'description'   => 'Notify a glossary entry as being viewed.',
        'type'          => 'write',
        'classpath'     => 'local/mobile/externallib.php',
        'capabilities'  => 'mod/glossary:view'
    ),

    'local_mobile_mod_glossary_get_entries_by_letter' => array(
        'classname'     => 'local_mobile_external',
        'methodname'    => 'mod_glossary_get_entries_by_letter',
        'description'   => 'Browse entries by letter.',
        'type'          => 'read',
        'classpath'     => 'local/mobile/externallib.php',
        'capabilities'  => 'mod/glossary:view'
    ),

    'local_mobile_mod_glossary_get_entries_by_date' => array(
        'classname'     => 'local_mobile_external',
        'methodname'    => 'mod_glossary_get_entries_by_date',
        'description'   => 'Browse entries by date.',
        'type'          => 'read',
        'classpath'     => 'local/mobile/externallib.php',
        'capabilities'  => 'mod/glossary:view'
    ),

    'local_mobile_mod_glossary_get_categories' => array(
        'classname'     => 'local_mobile_external',
        'methodname'    => 'mod_glossary_get_categories',
        'description'   => 'Get the categories.',
        'type'          => 'read',
        'classpath'     => 'local/mobile/externallib.php',
        'capabilities'  => 'mod/glossary:view'
    ),

    'local_mobile_mod_glossary_get_entries_by_category' => array(
        'classname'     => 'local_mobile_external',
        'methodname'    => 'mod_glossary_get_entries_by_category',
        'description'   => 'Browse entries by category.',
        'type'          => 'read',
        'classpath'     => 'local/mobile/externallib.php',
        'capabilities'  => 'mod/glossary:view'
    ),

    'local_mobile_mod_glossary_get_authors' => array(
        'classname'     => 'local_mobile_external',
        'methodname'    => 'mod_glossary_get_authors',
        'description'   => 'Get the authors.',
        'type'          => 'read',
        'classpath'     => 'local/mobile/externallib.php',
        'capabilities'  => 'mod/glossary:view'
    ),

    'local_mobile_mod_glossary_get_entries_by_author' => array(
        'classname'     => 'local_mobile_external',
        'methodname'    => 'mod_glossary_get_entries_by_author',
        'description'   => 'Browse entries by author.',
        'type'          => 'read',
        'classpath'     => 'local/mobile/externallib.php',
        'capabilities'  => 'mod/glossary:view'
    ),

    'local_mobile_mod_glossary_get_entries_by_author_id' => array(
        'classname'     => 'local_mobile_external',
        'methodname'    => 'mod_glossary_get_entries_by_author_id',
        'description'   => 'Browse entries by author ID.',
        'type'          => 'read',
        'classpath'     => 'local/mobile/externallib.php',
        'capabilities'  => 'mod/glossary:view'
    ),

    'local_mobile_mod_glossary_get_entries_by_search' => array(
        'classname'     => 'local_mobile_external',
        'methodname'    => 'mod_glossary_get_entries_by_search',
        'description'   => 'Browse entries by search query.',
        'type'          => 'read',
        'classpath'     => 'local/mobile/externallib.php',
        'capabilities'  => 'mod/glossary:view'
    ),

    'local_mobile_mod_glossary_get_entries_by_term' => array(
        'classname'     => 'local_mobile_external',
        'methodname'    => 'mod_glossary_get_entries_by_term',
        'description'   => 'Browse entries by term (concept or alias).',
        'type'          => 'read',
        'classpath'     => 'local/mobile/externallib.php',
        'capabilities'  => 'mod/glossary:view'
    ),

    'local_mobile_mod_glossary_get_entries_to_approve' => array(
        'classname'     => 'local_mobile_external',
        'methodname'    => 'mod_glossary_get_entries_to_approve',
        'description'   => 'Browse entries to be approved.',
        'type'          => 'read',
        'classpath'     => 'local/mobile/externallib.php',
        'capabilities'  => 'mod/glossary:approve'
    ),

    'local_mobile_mod_glossary_get_entry_by_id' => array(
        'classname'     => 'local_mobile_external',
        'methodname'    => 'mod_glossary_get_entry_by_id',
        'description'   => 'Get an entry by ID',
        'type'          => 'read',
        'classpath'     => 'local/mobile/externallib.php',
        'capabilities'  => 'mod/glossary:view'
    ),

    'local_mobile_mod_wiki_get_wikis_by_courses' => array(
        'classname'     => 'local_mobile_external',
        'methodname'    => 'mod_wiki_get_wikis_by_courses',
        'description'   => 'Returns a list of wiki instances in a provided set of courses, if ' .
                           'no courses are provided then all the wiki instances the user has access to will be returned.',
        'type'          => 'read',
        'capabilities'  => 'mod/wiki:viewpage',
        'classpath'     => 'local/mobile/externallib.php',
    ),

    'local_mobile_mod_wiki_view_wiki' => array(
        'classname'     => 'local_mobile_external',
        'methodname'    => 'mod_wiki_view_wiki',
        'description'   => 'Trigger the course module viewed event and update the module completion status.',
        'type'          => 'write',
        'capabilities'  => 'mod/wiki:viewpage',
        'classpath'     => 'local/mobile/externallib.php',
    ),

    'local_mobile_mod_wiki_view_page' => array(
        'classname'     => 'local_mobile_external',
        'methodname'    => 'mod_wiki_view_page',
        'description'   => 'Trigger the page viewed event and update the module completion status.',
        'type'          => 'write',
        'capabilities'  => 'mod/wiki:viewpage',
        'classpath'     => 'local/mobile/externallib.php',
    ),

    'local_mobile_mod_wiki_get_subwikis' => array(
        'classname'     => 'local_mobile_external',
        'methodname'    => 'mod_wiki_get_subwikis',
        'description'   => 'Returns the list of subwikis the user can see in a specific wiki.',
        'type'          => 'read',
        'capabilities'  => 'mod/wiki:viewpage',
        'classpath'     => 'local/mobile/externallib.php',
    ),
    'local_mobile_mod_wiki_get_subwiki_pages' => array(
        'classname'     => 'local_mobile_external',
        'methodname'    => 'mod_wiki_get_subwiki_pages',
        'description'   => 'Returns the list of pages for a specific subwiki.',
        'type'          => 'read',
        'capabilities'  => 'mod/wiki:viewpage',
        'classpath'     => 'local/mobile/externallib.php',
    ),

    'local_mobile_mod_wiki_get_page_contents' => array(
        'classname'     => 'local_mobile_external',
        'methodname'    => 'mod_wiki_get_page_contents',
        'description'   => 'Returns the contents of a page.',
        'type'          => 'read',
        'capabilities'  => 'mod/wiki:viewpage',
        'classpath'     => 'local/mobile/externallib.php',
    ),

    'local_mobile_mod_wiki_get_subwiki_files' => array(
        'classname'     => 'local_mobile_external',
        'methodname'    => 'mod_wiki_get_subwiki_files',
        'description'   => 'Returns the list of files for a specific subwiki.',
        'type'          => 'read',
        'capabilities'  => 'mod/wiki:viewpage',
        'classpath'     => 'local/mobile/externallib.php',
    ),
);

$services = array(
   'Moodle Mobile additional features service'  => array(
        'functions' => array (
            'core_calendar_get_calendar_events',
            'core_comment_get_comments',
            'core_completion_get_activities_completion_status',
            'core_completion_get_course_completion_status',
            'core_completion_mark_course_self_completed',
            'core_completion_update_activity_completion_status_manually',
            'core_course_get_contents',
            'core_course_get_course_module',
            'core_course_get_course_module_by_instance',
            'core_course_get_courses',
            'core_course_search_courses',
            'core_course_view_course',
            'core_enrol_get_enrolled_users',
            'core_enrol_get_users_courses',
            'core_get_component_strings',   // Don't remove this, the app relies on this to check the min version.
            'core_group_get_activity_allowed_groups',
            'core_group_get_activity_groupmode',
            'core_group_get_course_user_groups',
            'core_files_get_files',
            'core_message_block_contacts',
            'core_message_create_contacts',
            'core_message_delete_contacts',
            'core_message_get_blocked_users',
            'core_message_get_contacts',
            'core_message_get_messages',
            'core_message_mark_message_read',
            'core_message_search_contacts',
            'core_notes_delete_notes',
            'core_message_send_instant_messages',
            'core_message_unblock_contacts',
            'core_notes_create_notes',
            'core_notes_get_course_notes',
            'core_notes_view_notes',
            'core_rating_get_item_ratings',
            'core_user_add_user_device',
            'core_user_add_user_private_files',
            'core_user_get_course_user_profiles',
            'core_user_get_users_by_field',
            'core_user_get_users_by_id',
            'core_user_remove_user_device',
            'core_user_view_user_list',
            'core_user_view_user_profile',
            'core_webservice_get_site_info',
            'enrol_self_enrol_user',
            'enrol_self_get_instance_info',
            'gradereport_user_get_grades_table',
            'gradereport_user_view_grade_report',
            'message_airnotifier_are_notification_preferences_configured',
            'message_airnotifier_is_system_configured',
            'mod_assign_get_assignments',
            'mod_assign_get_submissions',
            'mod_assign_view_grading_table',
            'mod_book_view_book',
            'mod_chat_get_chat_latest_messages',
            'mod_chat_get_chat_users',
            'mod_chat_get_chats_by_courses',
            'mod_chat_login_user',
            'mod_chat_send_chat_message',
            'mod_chat_view_chat',
            'mod_choice_delete_choice_responses',
            'mod_choice_get_choice_options',
            'mod_choice_get_choice_results',
            'mod_choice_get_choices_by_courses',
            'mod_choice_submit_choice_response',
            'mod_choice_view_choice',
            'mod_data_get_databases_by_courses',
            'mod_folder_view_folder',
            'mod_forum_add_discussion',
            'mod_forum_add_discussion_post',
            'mod_forum_get_forums_by_courses',
            'mod_forum_get_forum_discussions_paginated',
            'mod_forum_get_forum_discussion_posts',
            'mod_forum_view_forum',
            'mod_forum_view_forum_discussion',
            'mod_imscp_view_imscp',
            'mod_lti_get_ltis_by_courses',
            'mod_lti_get_tool_launch_data',
            'mod_lti_view_lti',
            'mod_page_view_page',
            'mod_resource_view_resource',
            'mod_scorm_get_scorm_attempt_count',
            'mod_scorm_get_scorm_sco_tracks',
            'mod_scorm_get_scorm_scoes',
            'mod_scorm_get_scorm_user_data',
            'mod_scorm_get_scorms_by_courses',
            'mod_scorm_insert_scorm_tracks',
            'mod_scorm_view_scorm',
            'mod_survey_get_questions',
            'mod_survey_get_surveys_by_courses',
            'mod_survey_submit_answers',
            'mod_survey_view_survey',
            'mod_url_view_url',
            'local_mobile_core_enrol_get_course_enrolment_methods',
            'local_mobile_enrol_guest_get_instance_info',
            'local_mobile_get_plugin_settings',
            'local_mobile_mod_forum_can_add_discussion',
            'local_mobile_mod_glossary_get_glossaries_by_courses',
            'local_mobile_mod_glossary_view_glossary',
            'local_mobile_mod_glossary_view_entry',
            'local_mobile_mod_glossary_get_entries_by_letter',
            'local_mobile_mod_glossary_get_entries_by_date',
            'local_mobile_mod_glossary_get_categories',
            'local_mobile_mod_glossary_get_entries_by_category',
            'local_mobile_mod_glossary_get_authors',
            'local_mobile_mod_glossary_get_entries_by_author',
            'local_mobile_mod_glossary_get_entries_by_author_id',
            'local_mobile_mod_glossary_get_entries_by_search',
            'local_mobile_mod_glossary_get_entries_by_term',
            'local_mobile_mod_glossary_get_entries_to_approve',
            'local_mobile_mod_glossary_get_entry_by_id',
            'local_mobile_mod_wiki_get_wikis_by_courses',
            'local_mobile_mod_wiki_view_wiki',
            'local_mobile_mod_wiki_view_page',
            'local_mobile_mod_wiki_get_subwikis',
            'local_mobile_mod_wiki_get_subwiki_pages',
            'local_mobile_mod_wiki_get_page_contents',
            'local_mobile_mod_wiki_get_subwiki_files',
        ),
        'enabled' => 0,
        'restrictedusers' => 0,
        'shortname' => 'local_mobile',
        'downloadfiles' => 1,
        'uploadfiles' => 1
    ),
);