<?php
if (isset($_POST['emails'], $_POST['subject'], $_POST['content'])) {
	$emails = $_POST['emails'];
	$subject = $_POST['subject'];
    $content = $_POST['content'];

	mail($emails, $subject, $content);
} else {
	$msg = 'You need to provide your name and email address.';
}