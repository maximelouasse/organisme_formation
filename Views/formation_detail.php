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

		echo '<h1 class="display-4">' . $formation->getNom() . '</h1>';

		echo '<p>';
		echo 'Date de début : ' . $dateDebut->format('d/m/Y') . '<br>';
		echo 'Date de fin : ' . $dateFin->format('d/m/Y') . '<br>';
		echo 'Coût de la formation : ' . $formation->getCout() . ' €<br>';
		echo '</p>';

		echo '<h3>Liste des sessions :</h3>';

		?>
		
		<table class="table table-striped table-bordered">
			<thead>
				<tr>
					<th>Id session</th>
					<th>Date session</th>
					<th>Heure début</th>
					<th>Heure fin</th>
					<th>Professeur</th>
					<th></th>
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
				
				foreach($results as $session)
				{
					$sessionId = $session->getId();
					$professeurId = $session->getProfesseurs()->getId();
					$professeur = $entityManager->find('\Professeur', $professeurId);
					$sessionDebut = $session->getDateDebut();
					$sessionFin = $session->getDateFin();
					?>
					<tr>
						<td><?= $sessionId; ?></td>
						<td><?= $sessionDebut->format('d/m/y'); ?></td>
						<td><?= $sessionDebut->format('H:m'); ?></td>
						<td><?= $sessionFin->format('H:m'); ?></td>
						<td><a href="./professeur_detail.php?id_professeur=<?= $professeurId; ?>"><?= $professeur->getNom() . ' ' . $professeur->getPrenom(); ?></a></td>
						<td><a href="./session_detail.php?id_session=<?= $sessionId; ?>">Détail</a></td>
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