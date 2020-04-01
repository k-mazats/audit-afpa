$(document).ready(function() {
	let nom, prenom, mail, message, retour, retourType;
	$("#mailForm").on("submit", function(e) {
		e.preventDefault();
		nom = $("#lastName");
		prenom = $("#firstName");
		mail = $("#replyMail");
		message = $("#contentMail");
		retour = $("#alert");
		retourType = "";
		if (
			$(nom).val() === "" ||
			$(prenom).val() === "" ||
			$(mail).val() === "" ||
			$(message).val() === ""
		) {
			retour.html("Tous les champs sont obligatoires ! Merci.");
			retour.removeClass("valid");
			retour.addClass("invalid");
		} else if (
			$(mail)
				.val()
				.match(
					/[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?/g
				) === null
		) {
			retour.html("Votre adresse email n’est pas formaté correctement !");
			retour.removeClass("valid");
			retour.addClass("invalid");
		} else {
			$.ajax({
				type: "POST",
				url: "../audit/php/mailForm.php",
				data: $(this).serialize(),
				dataType: "html",
				success: function(response) {
					retour.html(response);
					retourType = response.substr(0, 1);
					retourType === "V"
						? (retour.removeClass("invalid"), retour.addClass("valid"))
						: (retour.removeClass("valid"), retour.addClass("invalid"));
				}
			});
		}
	});
});
