<?php
	if (isset($_POST['demo'])) {

		$demo=$_POST['demo'];
	
		$ayarkaydet=$db->prepare("INSERT INTO demo SET
			demo=:demo
			");
		$insert=$ayarkaydet->execute(array(
			'demo' => $_POST['demo']
		));
	
	
	}
