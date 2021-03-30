<?php

	$form_inscription = new Form('formulaire_inscription');
	$form_inscription->method('POST');

	$form_inscription->add('Text', 'nom')
					 ->label("Votre nom");
	
	$form_inscription->add('Text', 'prenom')
					 ->label("Votre prénom");

	$form_inscription->add('Password', 'mdp')
					 ->label("Votre mot de passe");
	
	$form_inscription->add('Email', 'adresse_email')
					 ->label("Votre adresse email");

	$form_inscription->add('Nombre personnes', 'nbrpersfoyer')
					 ->label("Le nombre de personne dans le foyer");

    $form_inscription->add('Submit', 'submit')
					 ->value("S'inscrire");