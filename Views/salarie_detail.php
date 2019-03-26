<?php

	require_once '../bootstrap.php';

	ob_start();

	if(isset($_GET['id_salarie']))
	{
		$salarie = $entityManager->find('\Salarie', $_GET['id_salarie']);
		
		$title = $salarie->getNom() . ' ' . $salarie->getPrenom();;

		$queryBuilder = $entityManager->createQueryBuilder();

		$queryBuilder->select('n')
			->from('Note', 'n')
			->where('n.salaries = :id_salarie')
			->setParameter('id_salarie', $_GET['id_salarie']);

		$query = $queryBuilder->getQuery();
		
		$results = $query->getResult();

		echo 'Liste des formations : <br>';
		echo '<ul>';

		foreach($results as $inscription)
		{
			$formation = $inscription->getFormations();

			echo '<li>';
			echo '<a href="./formation_detail.php?id_formation=' . $formation->getId() . '">' . $formation->getNom() . '</a> : ';
			echo $inscription->getNote() . '/20<br>';
			echo '</li>';
		}

		echo '</ul>';

	}
	
	$content = ob_get_clean();

	require 'template.php';