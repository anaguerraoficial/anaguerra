<?php 
/* 	
If you see this text in your browser, PHP is not configured correctly on this hosting provider. 
Contact your hosting provider regarding PHP configuration for your site.

PHP file generated by Adobe Muse CC 2017.0.0.363
*/

require_once('form_process.php');

$form = array(
	'subject' => 'Formulario Tienda Submission',
	'heading' => 'New Form Submission',
	'success_redirect' => '',
	'resources' => array(
		'checkbox_checked' => 'Checked',
		'checkbox_unchecked' => 'Unchecked',
		'submitted_from' => 'Form submitted from website: %s',
		'submitted_by' => 'Visitor IP address: %s',
		'too_many_submissions' => 'Too many recent submissions from this IP',
		'failed_to_send_email' => 'Failed to send email',
		'invalid_reCAPTCHA_private_key' => 'Invalid reCAPTCHA private key.',
		'invalid_reCAPTCHA2_private_key' => 'Invalid reCAPTCHA 2.0 private key.',
		'invalid_reCAPTCHA2_server_response' => 'Invalid reCAPTCHA 2.0 server response.',
		'invalid_field_type' => 'Unknown field type \'%s\'.',
		'invalid_form_config' => 'Field \'%s\' has an invalid configuration.',
		'unknown_method' => 'Unknown server request method'
	),
	'email' => array(
		'from' => 'anaguerraweb@hotmail.com',
		'to' => 'anaguerraweb@hotmail.com'
	),
	'fields' => array(
		'custom_U9862' => array(
			'order' => 1,
			'type' => 'string',
			'label' => 'Nombre',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'Nombre\' is required.'
			)
		),
		'Email' => array(
			'order' => 2,
			'type' => 'email',
			'label' => 'Email',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'Email\' is required.',
				'format' => 'Field \'Email\' has an invalid email.'
			)
		),
		'custom_U9858' => array(
			'order' => 3,
			'type' => 'string',
			'label' => 'Mensaje',
			'required' => false,
			'errors' => array(
			)
		),
		'custom_U9902' => array(
			'order' => 4,
			'type' => 'string',
			'label' => 'Dirección',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'Dirección\' is required.'
			)
		),
		'custom_U9919' => array(
			'order' => 5,
			'type' => 'string',
			'label' => 'Ciudad',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'Ciudad\' is required.'
			)
		),
		'custom_U9951' => array(
			'order' => 6,
			'type' => 'string',
			'label' => 'Código postal',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'Código postal\' is required.'
			)
		),
		'custom_U9967' => array(
			'order' => 7,
			'type' => 'string',
			'label' => 'País',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'País\' is required.'
			)
		)
	)
);

process_form($form);
?>
