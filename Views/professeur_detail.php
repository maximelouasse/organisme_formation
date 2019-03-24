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

		echo $professeur->getNom() . ' ' . $professeur->getPrenom() . ' est responsable de la formation <a href="./formation_detail.php?id_formation=' . $resultsFormation[0]->getId() . '">' . $resultsFormation[0]->getNom() . '</a>';


		$queryBuilderSessions = $entityManager->createQueryBuilder();

		$queryBuilderSessions->select('s')
			->from('Session', 's')
			->where('s.professeurs = :id_professeur')
			->setParameter('id_professeur', $_GET['id_professeur']);

		$querySessions = $queryBuilderSessions->getQuery();
		
		$resultsSessions = $querySessions->getResult();

		echo '<br>Liste des sessions : <br>';
		echo '<ul>';

		foreach($resultsSessions as $session)
		{
			$sessionDebut = $session->getDateDebut();
			$sessionFin = $session->getDateFin();

			echo '<li>';
			echo 'Session le ' . $sessionDebut->format('d/m/y') . ' de ' . $sessionDebut->format('H:m') . ' à ' . $sessionFin->format('H:m');
			echo '</li>';
		}

		echo '</ul>';

		$title = $professeur->getNom() . ' ' . $professeur->getPrenom();
	}

	$content = ob_get_clean();

	require 'template.php';