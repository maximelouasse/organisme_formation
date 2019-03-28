<?php

	require_once '../bootstrap.php';

	ob_start();

	if(isset($_GET['id_session']))
	{
		$session = $entityManager->find('\Session', $_GET['id_session']);

		$title = 'Session n°'.$session->GetId();

		$queryBuilder = $entityManager->createQueryBuilder();

		$queryBuilder->select('c')
			->from('CompteRendu', 'c')
			->where('c.sessions = :id_session')
			->setParameter('id_session', $_GET['id_session']);
        
		$query = $queryBuilder->getQuery();
		
		$results = $query->getResult();

		$session = $entityManager->find('\Session', $_GET['id_session']);
		$dateDebut = $session->getDateDebut();
		$dateFin = $session->getDateFin();

		echo '<p>';
		echo 'Numero session : ' . $session->GetId() . '<br>';
		echo 'Date de début : ' . $dateDebut->format('d/m/Y') . '<br>';
		echo 'Date de fin : ' . $dateFin->format('d/m/Y') . '<br>';
		echo 'Nom formation : ' . $session->getFormations()->getNom() . ' <br>';
		echo 'Nom professeur : ' . $session->getProfesseurs()->getPrenom() . ' '. $session->getProfesseurs()->getNom()  .' <br>';
		echo 'Numero de salle : ' . $session->getSalles()->getId() . ' <br>';
		echo '</p>';

		echo 'Liste des compte rendus : <br>';
		echo '<ul>';

		foreach($results as $compte_rendus)
		{
			$compte_rendusId = $compte_rendus->getId();
			$professeurId = $compte_rendus->getProfesseurs()->getId();
			$professeur = $entityManager->find('\Professeur', $professeurId);

			echo '<li>';
			echo 'Compte Rendu numero ' . $compte_rendusId;
			echo '<a href="./compterendu_detail.php?id_compterendu=' . $compte_rendusId . '"> (détail du compte rendu)</a>';
			echo ' pris en note par <a href="./professeur_detail.php?id_professeur=' . $professeurId . '">' . $professeur->getNom() . ' ' . $professeur->getPrenom() . '</a><br>';
			echo '</li>';
		}

		echo '</ul>';
	}

	$content = ob_get_clean();

	require 'template.php';