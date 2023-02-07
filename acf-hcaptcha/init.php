<?php
/**
 * Registration logic for the new ACF field type.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

add_action( 'init', 'company_or_project_name_include_acf_field_hcaptcha' );
/**
 * Registers the ACF field type.
 */
function company_or_project_name_include_acf_field_hcaptcha() {
	if ( ! function_exists( 'acf_register_field_type' ) ) {
		return;
	}

	require_once __DIR__ . '/class-company-or-project-name-acf-field-hcaptcha.php';

	acf_register_field_type( 'company_or_project_name_acf_field_hcaptcha' );
}
