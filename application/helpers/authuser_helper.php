<?php
function userlogin()
{
	$log = &get_instance();
	$user_session = $log->session->userdata('id');
	if ($user_session) {
		redirect('home');
	}
}
function not_login()
{
	$log = &get_instance();
	$user_session = $log->session->userdata('id');
	if (!$user_session) {
		redirect('login');
	}
}
