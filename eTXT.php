<?php
/*
 * I had to use the Telecom eTXT service for a project and couldnt find any documentation
 * on sending via email without using an email client. Should have been simple using the
 * mail() function, but was failing without the Return Path and -f option.
 *
 * See http://docs.bulletinwireless.net/display/TNZ/Telecom+eTXT+-+User+Guide
 */

$cellphone = CELLPHONE_NUMBER; // Validate the number using your preferred method
$to = $cellphone .'@eTXT.co.nz';
$subject = '';

$sender = YOUR_EMAIL_ADDRESS; // This needs to be the email address that's enabled in the eTXT system
$headers = 'From: '. $sender .'\n';
$headers .= 'Return-Path: '. $sender;

$message = YOUR_MESSAGE; // No more than 160 characters

mail($to, $subject, $message, $headers, '-f '. $sender);
?>