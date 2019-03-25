<?php

	require_once '../bootstrap.php';

    ob_start();
    
    if(isset($_GET['id_entreprise'])){

        $entreprise = $entityManager->find('\Entreprise', $_GET['id_entreprise']);

        $title = $entreprise->getNom();
        
        $queryBuilder = $entityManager->createQueryBuilder();

        $queryBuilder->select('s')
			->from('Salarie', 's')
			->where('s.entreprises = :id_entreprise')
			->setParameter('id_entreprise', $_GET['id_entreprise']);

		$query = $queryBuilder->getQuery();
		
        $results = $query->getResult();

        echo '<p>';
        echo 'Nom de l\'entreprise : ' . $entreprise->getNom() . '<br>';
        
        echo 'Liste des Salariés : <br>';
        echo '<ul>';

        foreach($results as $salarie)
		{
			$salarieId = $salarie->getId();
			$nom = $salarie->getNom();
			$prenom = $salarie->getPrenom();
			$poste = $salarie->getPoste();

			echo '<li>';
            echo 'Nom : ' . $nom . ' <br> ';
            echo 'Prenom : ' . $prenom . ' <br> ';
            echo 'Poste : ' . $poste . ' <br> ';
            echo '<a href="./salarie_detail.php?id_salarie=' . $salarieId . '"> Voir le detail de l\'utilisateur </a>';
			echo '</li>';
        }
        
        echo '</ul>';
    
    }

    $content = ob_get_clean();

    require 'template.php';