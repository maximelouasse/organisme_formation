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

		echo '<h1 class="display-4">' . $professeur->getNom() . ' ' . $professeur->getPrenom() . '</h1>';

		echo '<p> Responsable de la formation : <a href="./formation_detail.php?id_formation=' . $resultsFormation[0]->getId() . '">' . $resultsFormation[0]->getNom() . '</a></p>';

		$queryBuilderSessions = $entityManager->createQueryBuilder();

		$queryBuilderSessions->select('s')
			->from('Session', 's')
			->where('s.professeurs = :id_professeur')
			->setParameter('id_professeur', $_GET['id_professeur']);

		$querySessions = $queryBuilderSessions->getQuery();
		
		$resultsSessions = $querySessions->getResult();

		echo '<h3>Liste des sessions :</h3>';

		?>
		
		<table class="table table-striped table-bordered">
			<thead>
				<tr>
					<th>Id session</th>
					<th>Date session</th>
                    <th>Heure début</th>
                    <th>Heure fin</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				<?php if(empty($resultsSessions)){ ?>
					<tr>
						<td class="text-center" colspan ="6">
							Aucune session
						</td>
					</tr>
				<?php }

				foreach($resultsSessions as $session)
				{
					$sessionId = $session->getId();
					$sessionDebut = $session->getDateDebut();
					$sessionFin = $session->getDateFin();

					?>

					<tr>
						<td><?= $sessionId; ?></td>
						<td><?= $sessionDebut->format('d/m/y'); ?></td>
						<td><?= $sessionDebut->format('H:m'); ?></td>
						<td><?= $sessionFin->format('H:m'); ?></td>
						<td><a href="./session_detail.php?id_session=<?= $sessionId; ?>">Détail</a></td>
					</tr>

					<?php
				}
				?>
			</tbody>
		</table>
		<?php

		$title = $professeur->getNom() . ' ' . $professeur->getPrenom();
	}

	$content = ob_get_clean();

	require 'template.php';