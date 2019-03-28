<?php

	require_once '../bootstrap.php';

	ob_start();

	if(isset($_GET['id_salarie']))
	{
		$salarie = $entityManager->find('\Salarie', $_GET['id_salarie']);
		
		$title = $salarie->getNom() . ' ' . $salarie->getPrenom();

		$queryBuilder = $entityManager->createQueryBuilder();

		$queryBuilder->select('n')
			->from('Note', 'n')
			->where('n.salaries = :id_salarie')
			->setParameter('id_salarie', $_GET['id_salarie']);

		$query = $queryBuilder->getQuery();
		
		$results = $query->getResult();

		echo '<h1 class="display-4">' .$salarie->getNom() . ' ' . $salarie->getPrenom() . '</h1>';
		echo '<p>';
		echo 'Poste : ' . $salarie->GetPoste() . '<br>';
		echo 'Entreprise : ' . $salarie->getEntreprises()->getNom() . ' <br>';
		echo '</p>';

		echo '<h3>Liste des formations :</h3>';
		?>
		
		<table class="table table-striped table-bordered">
			<thead>
				<tr>
					<th>Nom formation</th>
					<th>Note /20</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
			<?php if(empty($results)){ ?>
				<tr>
					<td class="text-center" colspan ="6">
						Aucune formation
					</td>
				</tr>
			<?php }
				foreach($results as $inscription)
				{
					$formation = $inscription->getFormations();
					$formationId = $formation->getId();
					
					?>
					<tr>
						<td><?= $formation->getNom(); ?></td>
						<td><?= $inscription->getNote(). '/20'; ?></td>
						<td><a href="./formation_detail.php?id_formation=<?= $formationId; ?>">Détail</a></td>
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