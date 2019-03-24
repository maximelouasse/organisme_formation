<?php

	require_once '../bootstrap.php';

	ob_start();

	if(isset($_GET['id_professeur']))
	{
		$professeur = $entityManager->find('\Professeur', $_GET['id_professeur']);
	
		$queryBuilderFormation = $entityManager->createQueryBuilder();

		$queryBuilderFormation->select('f')
			->from('Formation', 'f')
			->where('f.professeurs = :id_professeur')
			->setParameter('id_professeur', $_GET['id_professeur']);

		$queryFormation = $queryBuilderFormation->getQuery();
		
		$resultsFormation = $queryFormation->getResult();

		echo $professeur->getNom() . ' ' . $professeur->getPrenom() . ' est responsable de la formation <a href="./formation.php?id_formation=' . $resultsFormation[0]->getId() . '">' . $resultsFormation[0]->getNom() . '</a>';
	}

	$content = ob_get_clean();

	require 'template.php';