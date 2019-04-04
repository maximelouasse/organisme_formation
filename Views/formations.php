<?php

	require_once '../bootstrap.php';

	ob_start();

	$formations = $entityManager->getRepository('\Formation')->findAll();
	$title = 'Liste des formations';

	echo '<h3>Liste des formations :</h3>';

	?>

	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>Id formation</th>
				<th>Nom formation</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
		<?php if(empty($formations)){ ?>
				<tr>
					<td class="text-center" colspan ="6">
						Aucune formation
					</td>
				</tr>
			<?php }
			
			foreach($formations as $formation)
			{
				?>
				<td><?= $formation->getId(); ?></td>
						<td><?= ucfirst($formation->getNom()); ?></td>
						<td><a href="./formation_detail.php?id_formation=<?= $formation->getId(); ?>">Détail</a></td>
				</tr>
				<?php
			}

	$content = ob_get_clean();

	require 'template.php';