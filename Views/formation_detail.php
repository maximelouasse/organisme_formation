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

		$formation = $entityManager->find('\Formation', $_GET['id_formation']);
		$dateDebut = $formation->getDateDebut();
		$dateFin = $formation->getDateFin();

		echo '<p>';
		echo 'Nom de la formation : ' . $formation->getNom() . '<br>';
		echo 'Date de début : ' . $dateDebut->format('d/m/Y') . '<br>';
		echo 'Date de fin : ' . $dateFin->format('d/m/Y') . '<br>';
		echo 'Coût de la formation : ' . $formation->getCout() . ' €<br>';
		echo '</p>';

		echo 'Liste des sessions : <br>';
		echo '<ul>';

		foreach($results as $session)
		{
			$sessionId = $session->getId();
			$professeurId = $session->getProfesseurs()->getId();
			$professeur = $entityManager->find('\Professeur', $professeurId);
			$sessionDebut = $session->getDateDebut();
			$sessionFin = $session->getDateFin();

			echo '<li>';
			echo 'Session le ' . $sessionDebut->format('d/m/y') . ' de ' . $sessionDebut->format('H:m') . ' à ' . $sessionFin->format('H:m');
			echo '<a href="./session_detail.php?id_session=' . $sessionId . '"> (détail de la session)</a>';
			echo ' avec <a href="./professeur_detail.php?id_professeur=' . $professeurId . '">' . $professeur->getNom() . ' ' . $professeur->getPrenom() . '</a><br>';
			echo '</li>';
		}

		echo '</ul>';
	}

	$content = ob_get_clean();

	require 'template.php';