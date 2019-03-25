<?php

require_once '../bootstrap.php';

	ob_start();

	$entreprises = $entityManager->getRepository('\Entreprise')->findAll();
	$title = 'Liste des entreprises';

	foreach($entreprises as $entreprise)
	{
		echo '<a href="./entreprise_detail.php?id_entreprise=' . $entreprise->getId() . '">' . $entreprise->getNom() . '</a><br>';
	}

	$content = ob_get_clean();

	require 'template.php';