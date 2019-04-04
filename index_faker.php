<?php

	require_once 'bootstrap.php';
	require __DIR__ .'/vendor/autoload.php';

	//Create your Faker generator
	$generator = Faker\Factory::create('fr_FR');

	/* Give the Faker populator the EntityManager object from 
	* Doctrine, as well as the Faker Generator
	*/

	$populator = new Faker\ORM\Doctrine\Populator($generator, $entityManager);
	
	$generator->addProvider(new CompanyNameGenerator\FakerProvider($generator));

	$populator->addEntity('\Professeur', 10, array(
		'nom' => function() use ($generator) { return $generator->lastname(); },
		'prenom' => function() use ($generator) { return $generator->firstname(); }
	));

	$populator->addEntity('\Formation', 20, array(
		'nom' => function() use ($generator) { return $generator->word(); },
		'dateDebut' => function() use ($generator) { return $generator->dateTimeBetween('+0 years', '+30 days', 'Europe/Paris'); },
		'dateFin' => function() use ($generator) { return $generator->dateTimeBetween('+40 days', '+50 days', 'Europe/Paris'); },
		'cout' => function() use ($generator) { return $generator->numberBetween(500, 10000); }
	));

	$populator->addEntity('\Entreprise', 20, array(
		'nom' => function() use ($generator) { return $generator->companyName; },
	));
	
	$populator->addEntity('\Salarie', 100, array(
		'nom' => function() use ($generator) { return $generator->lastname(); },
		'prenom' => function() use ($generator) { return $generator->firstname(); }
	));

	$populator->addEntity('\Note', 100, array(
		'note' => function() use ($generator) { return $generator->numberBetween(0, 20); }
	));

	$populator->addEntity('\Salle', 5, array(
		'nom' => function() use ($generator) { return $generator->numberBetween(0, 10); }
	));

	$populator->addEntity('\Session', 100, array(
		'dateDebut' => function() use ($generator) { return $generator->dateTimeBetween('+0 years', '+ 4 hours', 'Europe/Paris'); },
		'dateFin' => function() use ($generator) { return $generator->dateTimeBetween('+0 hours', '+ 4 hours', 'Europe/Paris'); }
	));

	$populator->addEntity('\CompteRendu', 100, array(
		'commentaire' => function() use ($generator) { return $generator->sentence(rand(5, 10), true); }
	));

	$insertedFakeData = $populator->execute();