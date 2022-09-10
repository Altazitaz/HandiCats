<?php

$affichage="";// ceci est la variable pour indiquer si oui ou non on  a reussi le formulaire elle sera appelé en fonction de l'action de l'utilisateur m^me système que $titre dans handicats on doit la retrouver dans le html

if (isset($_POST['validation'])) //ce sont des conditions à respecter pour voir apparaitre le message
{
//verification du prenom empty() permet de vérifier si l'élément est vide
//-----------------------------verification du prenom

	if (empty(trim($_POST['prenom']))) //trim() permet de supprimer les espace pour eviter de les compter en tant que caracteres
	{
		$affichage .= '<div class="erreur"> Attention le champ prénom est vide.</div>';
	}
	else // si le champ est rempli cela donnera ceci
	{
		//on verifie le nombre de caractere il faut qu'il soit entre 2 et 30 lettre
		if ((iconv_strlen($_POST['prenom'])) < 2 OR (iconv_strlen($_POST['prenom']) >30))
		{
			$affichage .= '<div class="erreur"> Attention votre prénom doit contenir entre 2 et 30 caractères.</div>';
		}
	}

//-------------------------------verification du nom
	if (empty(trim($_POST['nom'])))
	{
		$affichage .= '<div class="erreur"> Attention le champ nom est vide.</div>';
	}
	else // si le champ est rempli cela donnera ceci
	{
		//on verifie le nombre de caractere il faut qu'il soit entre 2 et 30 lettre
		if ((iconv_strlen($_POST['nom'])) < 2 OR (iconv_strlen($_POST['nom']) >30))
		{
			$affichage .= '<div class="erreur"> Attention votre nom doit contenir entre 2 et 30 caractères.</div>';
		}
	}

//---------------------------------verification du mail
	if (empty(trim($_POST['mail'])))
	{
		$affichage .= '<div class="erreur"> Attention le champ mail est vide.</div>';
	}
	else // si le champ est rempli cela donnera ceci
	{
		if (!filter_var($_POST['mail'] , FILTER_VALIDATE_EMAIL)) //filter_var va verifier le format du texte tappé en l'occurence ici avec filter_validate_email il va valider le format @ .fr .com...$_COOKIE
		{
			$affichage .= '<div class="erreur"> Attention le format de votre email est incorrect.</div>';
		}
	}

//-----------------------------------verification du commentaire
	if (empty(trim($_POST['com'])))
	{
		$affichage .= '<div class="erreur"> Attention le champ message est vide.</div>';
	}
	else // si le champ est rempli cela donnera ceci
	{
		//on verifie le nombre de caractere il faut qu'il soit entre 50 et 500 lettre
		if ((iconv_strlen($_POST['com'])) < 10 OR (iconv_strlen($_POST['com']) >400))
		{
			$affichage .= '<div class="erreur"> Attention votre message doit contenir entre 10 et 400 caractères.</div>';

		}
	}

	// Recupérer le champs dans le formulaire
	if (empty($affichage))
	{
		// Header mail personnalisé
		// From = qui l'envoie
		$headers= 'From: <' . $_POST['prenom'] . ' ' . $_POST['nom'] .'>' . PHP_EOL;
		// A quelle adresse email répondre (quand on utilise le bonton "répondre" ou "répondre à tous")
		$headers.= 'Reply-To: ' . $_POST['mail'] . PHP_EOL;
		// Header standard pour les emails.
		$headers.= "MIME-version: 1.0" . PHP_EOL;
		$headers.= "Content-type:text/html;charset=UTF-8" . PHP_EOL;

		// Si le champ est adoption
		if ($_POST['objet'] == "adoption")
		{
			// L'adresse email du destinataire
			$email_destinataire = "handicats.adoptions@gmail.com";
			// Sujet du mail
			$email_suject = "Je souhaite adopter un animal";
		}

		elseif ($_POST['objet'] == "autre")
		{
			$email_destinataire = "vivetalexandra@gmail.com";
			$email_suject = "Autre...";
		}

		elseif ($_POST['objet'] == "famille")
		{
			$email_destinataire = "famille.accueil.handicats@gmail.com";
			$email_suject = "Je souhaite devenir famille d'accueil";
		}

		elseif ($_POST['objet'] == "parrainage")
		{
			$email_destinataire = "handicats27@gmail.com";
			$email_suject = "Je souhaite parrainer un de vos protégés";
		}			

		elseif ($_POST['objet'] == "don")
		{
			$email_destinataire = "handicats27@gmail.com";
			$email_suject = "Je souhaite faire un don";
		}

		elseif ($_POST['objet'] == "boutique")
		{
			$email_destinataire = "boutique.handicats@gmail.com";
			$email_suject = "Je souhaite avoir des renseignements concernant votre boutique";
		}
	}

// ------------------------------Message d'envoi correct
	if (mail($email_destinataire, $email_suject, $_POST['com'], $headers)) // Envoi d'un email
	{
	   // Si l'email est envoyé correctement
		$affichage .= '<div class="success">Votre message a correctement été envoyé. Nous vous recontacterons prochainement!</div>';
	}
	else
	{
		// Si l'envoie d'email à échoué
		$affichage .= '<div class="erreur">Erreur lors de l\'envoi du message</div>';
	}
}
?>


	<section id="partie-contact" class="contenerContact">
	<?php echo $affichage; ?>
		<h2>Contactez-nous</h2>
		<hr>

		<div class="sous-legende contact">
			<p style="text-align: center">N’hésitez pas à nous contacter pour nous demander de plus amples informations via ce formulaire. Nous mettrons tout en oeuvre pour y répondre.</p>
		</div>

		<form method="post" action="#partie-contact">
			<section class="columnFormulaire">
				<div class="columnForm1">
					<label for="nom">Nom : </label>
					<input type="text" name="nom" id="nom" placeholder="Votre nom ..." value="<?php if(isset($_POST['nom'])){ echo $_POST['nom']; } else { null;}?>">
					<label for="prenom">Prénom : </label>
					<input type="text" name="prenom" id="prenom" placeholder="Votre  prénom ..." value="<?php if(isset($_POST['prenom'])){ echo $_POST['prenom']; } else { null;}?>">
					<label for="mail">Adresse mail : </label>
					<input type="text" name="mail" id="mail" placeholder="Votre e-mail ..." value="<?php if(isset($_POST['mail'])){ echo $_POST['mail']; } else { null;}?>">
				</div>

				<div class="columnForm2">
					<label for="objet">Objet du message:</label>
					<select name="objet">
						<option value="adoption">Adoption</option>
						<option value="famille">Devenir famille d'accueil</option>
						<option value="parrainage">Parrainer un animal</option>
						<option value="don">Faire un don</option>
						<option value="boutique">Boutique</option>
						<option value="autre">Autre</option>
					</select>
					
					<div>	
						<label for="Com">Commentaires</label>
						<textarea id="Com" name="com" placeholder="Votre message ..."><?php if(isset($_POST['com'])){ echo $_POST['com']; } else { null;}?></textarea>
					</div>	
				</div>
			</section>	

			<div class="validation">
				<input type="submit" name="validation" value="Envoyer">
				<input type="reset" name="reset" value="Recommencer">
			</div>
		</form>

		
	</section>

