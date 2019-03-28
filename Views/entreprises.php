<?php

require_once '../bootstrap.php';

	ob_start();

	$entreprises = $entityManager->getRepository('\Entreprise')->findAll();
	$title = 'Liste des entreprises';

	echo '<h3>Liste des entreprises :</h3>';

	?>
		
		<table class="table table-striped table-bordered">
			<thead>
				<tr>
					<th>Id entreprise</th>
					<th>Nom entreprise</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				<?php if(empty($entreprises)){ ?>
					<tr>
						<td class="text-center" colspan ="6">
							Aucune session
						</td>
					</tr>
				<?php }

				foreach($entreprises as $entreprise)
				{
					?>
					<tr>
						<td><?= $entreprise->getId(); ?></td>
						<td><?= $entreprise->getNom(); ?></td>
						<td><a href="./entreprise_detail.php?id_entreprise=<?= $entreprise->getId(); ?>">Détail</a></td>
					</tr>
					<?php
				}

	$content = ob_get_clean();

	require 'template.php';