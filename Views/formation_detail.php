<?php

	require_once '../bootstrap.php';

	ob_start();

	if(isset($_GET['id_formation']))
	{
		$formation = $entityManager->find('\Formation', $_GET['id_formation']);

		$title = $formation->getNom();

		$queryBuilder = $entityManager->createQueryBuilder();

		$queryBuilder->select('s')
			->from('Session', 's')
			->where('s.formations = :id_formation')
			->setParameter('id_formation', $_GET['id_formation']);

		$query = $queryBuilder->getQuery();
		
		$results = $query->getResult();

		foreach($results as $session)
		{
			$professeurId = $session->getProfesseurs()->getId();
			$professeur = $entityManager->find('\Professeur', $professeurId);

			echo '<a href="./professeur_detail.php?id_professeur=' . $professeurId . '">' . $professeur->getNom() . ' ' . $professeur->getPrenom() . '</a><br>';
		}
	}

	$content = ob_get_clean();

	require 'template.php';