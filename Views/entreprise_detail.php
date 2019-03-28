<?php

	require_once '../bootstrap.php';

    ob_start();
    
	if(isset($_GET['id_entreprise']))
	{
        $entreprise = $entityManager->find('\Entreprise', $_GET['id_entreprise']);

        $title = $entreprise->getNom();
        
        $queryBuilder = $entityManager->createQueryBuilder();

        $queryBuilder->select('s')
			->from('Salarie', 's')
			->where('s.entreprises = :id_entreprise')
			->setParameter('id_entreprise', $_GET['id_entreprise']);

		$query = $queryBuilder->getQuery();
		
        $results = $query->getResult();

        echo '<h1 class="display-4">' . $entreprise->getNom() . '</h1>';
        
        echo '<h3>Liste des salariés :</h3>';

        ?>
		
		<table class="table table-striped table-bordered">
			<thead>
				<tr>
					<th>Id salarié</th>
					<th>Nom salarié</th>
                    <th>Prenom salarié</th>
                    <th>Poste salarié</th>
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

                foreach($results as $salarie)
                {
                    $salarieId = $salarie->getId();
                    $nom = $salarie->getNom();
                    $prenom = $salarie->getPrenom();
                    $poste = $salarie->getPoste();
                    ?>
                    <tr>
                        <td><?= $salarieId; ?></td>
                        <td><?= $nom; ?></td>
                        <td><?= $prenom; ?></td>
                        <td><?= $poste; ?></td>
                        <td><a href="./salarie_detail.php?id_salarie=<?= $salarieId; ?>">Détail</a></td>
                    </tr>
                    <?php
                } ?>
            </tbody>
	    </table>
        <?php
    
    }

    $content = ob_get_clean();

    require 'template.php';