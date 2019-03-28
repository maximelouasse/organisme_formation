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

		echo '<h1 class="display-4">' . $session->getFormations()->getNom() . ' - #' . $session->getId() . '</h1>';

		echo '<p>';
		echo 'Date de début : ' . $dateDebut->format('d/m/Y') . '<br>';
		echo 'Date de fin : ' . $dateFin->format('d/m/Y') . '<br>';
		echo 'Responsable de la formation : <a href="./professeur_detail.php?id_professeur=' . $session->getProfesseurs()->getId(). '">' . $session->getProfesseurs()->getPrenom() . ' '. $session->getProfesseurs()->getNom()  .' </a><br>';
		echo 'Numero de salle : ' . $session->getSalles()->getId() . ' <br>';
		echo '</p>';

		echo '<h3>Liste des compte rendus :</h3>';

		?>
		
		<table class="table table-striped table-bordered">
			<thead>
				<tr>
					<th>Id compte rendus</th>
                    <th>Professeur</th>
					<th>Commentaire</th>
				</tr>
			</thead>
			<tbody>
				<?php if(empty($results)){ ?>
					<tr>
						<td class="text-center" colspan ="6">
							Aucune session
						</td>
					</tr>
				<?php }

		foreach($results as $compte_rendus)
		{
			$compte_rendusId = $compte_rendus->getId();
			$professeurId = $compte_rendus->getProfesseurs()->getId();
			$professeur = $entityManager->find('\Professeur', $professeurId);
			$commentaire = $compte_rendus->getCommentaire();
			?>

			<tr>
				<td><?= $compte_rendusId; ?></td>
				<td><a href="./professeur_detail.php?id_professeur=<?= $professeurId ?>"><?= $professeur->getNom() . ' ' . $professeur->getPrenom(); ?></a></td>
				<td><?= $commentaire; ?></td>
			</tr>

			<?php
		}
		?>
			</tbody>
		</table>
		<?php
	}

	$content = ob_get_clean();

	require 'template.php';