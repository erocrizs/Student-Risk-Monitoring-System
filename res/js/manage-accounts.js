$(document).ready( function() {

	$('.delete-account-dim-screen').hide();
	$("#cancel-delete").click(function() {
		$(".delete-account-dim-screen").fadeOut();
		$('.deleteAccount').removeAttr('id');
	});

	$('.verify-changes-dim-screen').hide();
	$("#cancel-verify").click( function() {
		$('.verify-changes-dim-screen').fadeOut();
	} );

	var characterChoices = "QWERTYUIOPASDFGHJKLZXCVBNMqwertyuiopasdfghjklzxcvbnm1234567890";
	function genPass() {
		var ret = "";
		var length = 6 + ( Math.random() * 5 );

		for(var i = 0; i < length; i++)
			ret += characterChoices.charAt( Math.floor( Math.random() * characterChoices.length ) );

		return ret;
	}

	var accounts = [];

	var accountBoxes = $('.account-box');
	for(var i=0; i<accountBoxes.length; i++)
	{
		var currBox = $(accountBoxes[i]);

		var formId = currBox.find('form').attr('id');
		var accountId = formId.split('-')[2];

		var accountNameInput = currBox.find('#account-name');
		var accountTypeInput = currBox.find('#account-type');
		var defaultPasswordInput = currBox.find('#default-password');
		var defPassRandom = currBox.find('#def-pass-random')
		var defPassVisibilityToggle = currBox.find('#def-pass-visible');
		var doResetPasswordToggle = currBox.find('#do-reset-password');
		var dontResetPasswordToggle = currBox.find('#dont-reset-password');
		var resetChangesButton = currBox.find("#reset");

		var submitChangesButton = currBox.find("#save");
		var deleteTrigger = currBox.find("#delete-trigger");

		var currAccount = {
			accountId: +accountId,
			accountName: accountNameInput.val(),
			accountType: accountTypeInput.val()
		};

		accounts.push(currAccount);

		defPassVisibilityToggle.click( function() {
			if(defPassVisibilityToggle.hasClass("active"))
			{
				defPassVisibilityToggle.removeClass("active");
				defaultPasswordInput.attr("type", "password");
			}
			else
			{
				defPassVisibilityToggle.addClass("active");
				defaultPasswordInput.attr("type", "text");
			}
		} )

		defaultPasswordInput.val( genPass() );
		defPassRandom.click( function() {
			defaultPasswordInput.val( genPass() );
		} );

		resetChangesButton.click( function() {
			accountNameInput.val( currAccount.accountName );
			accountTypeInput.val( currAccount.accountType );
			currBox.find('#do-reset-password-label').removeClass("active");
			currBox.find('#dont-reset-password-label').addClass("active");
			console.log(currBox.find('#dont-reset-password-label'));
			doResetPasswordToggle[0].checked = false;
			dontResetPasswordToggle[0].checked = true;
		} );

		deleteTrigger.click( function() {
			$('.deleteAccount').attr('id', 'account-'+accountId);
			$('.admin-password-delete').attr('form', 'account-'+accountId);
			$('#delete-account').attr('form', 'account-'+accountId);
			$('#to-be-deleted').html( currAccount.accountName );
			$('.delete-account-dim-screen').fadeIn();
		});

		submitChangesButton.click( function() {
			$('#verify-change-account').attr('form', formId );
			$('.admin-password-verify').attr('form', formId );
			$('.verify-change-account').attr('form', formId );
			$('#to-be-changed').html( currAccount.accountName );
			$('.verify-changes-dim-screen').fadeIn();
		} );
	}

	// new account
	var passVisibility = $("#add-account #def-pass-visible");
	passVisibility.click( function() {
		if(passVisibility.hasClass("active"))
		{
			passVisibility.removeClass("active");
			$("#add-account #password").attr("type", "password");
		}
		else
		{
			passVisibility.addClass("active");
			$("#add-account #password").attr("type", "text");
		}
	} );
	
});