<?php

	require_once 'bootstrap.php';

	ob_start();

	$formations = $entityManager->getRepository('\Formation')->findAll();
	$title = 'Liste des formations';

	foreach($formations as $formation)
	{
		echo '<a href="./Views/formation_detail.php?id_formation=' . $formation->getId() . '">' . $formation->getNom() . '</a><br>';
	}

	$content = ob_get_clean();

	require 'template.php';