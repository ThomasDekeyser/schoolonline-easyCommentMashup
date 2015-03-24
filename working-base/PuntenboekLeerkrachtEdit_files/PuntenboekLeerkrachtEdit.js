$(document).ready(function() {
	// Rapport commentaren per leerling ophalen en opslaan
	$('#RapportCommentaarLeerlingDialog').dialog({
		autoOpen: false,
		modal: true,
		height: 'auto',
		width: 950,
		resizable: false,
		draggable: false,
		buttons: {
			"Opslaan": OpslaanButton
		},
		close: function(event, ui) {
			window.location = '../PuntenboekLeerkracht/PuntenboekLeerkrachtEdit.php?SessionID='+SessionID;
		}
	});
	
	// openen in popup (voor rapportprinthistory)
	$('.OpenInPopup').click(function(event) {
		event.preventDefault();
		
		$.get(
			$(this).attr('href'),
			function(HTML) {
				var dialogPrintHistory = $('<div>'+HTML+'</div>').dialog({
					draggable: false,
					modal: true,
					width: 600,
					resizable: false
				});
				$('.DeleteRapportHistory').click(function(event) {
					event.preventDefault();
					var row = $(this).closest('tr');
					$.get(
						$(this).attr('href'),
						function() {
							row.remove();
						}
					);
				});
			}
		);
	});
	
	$('.CommentaarLeerling').click(function(event) {
		event.preventDefault();
		var LeerlingLoopbaanID = $(this).attr('rel');
		
		if(InputGewijzigd )
		{
			var dialog_del = $('<div></div>')
				.html("<span class=\"ui-icon ui-icon-alert\" style=\"float:left; margin:0 7px 2em 0;\"></span>Er werden gegevens ingegeven of gewijzigd. Als u doorgaat zullen deze verloren gaan. Bent u zeker?")
				.dialog({
					title: 'Opgelet',
					modal: true,
					resizable: false,
					draggable: false,
					buttons: {
						'Ik ben zeker': function() {
							$(this).dialog('close');
							getRapportCommentaar(LeerlingLoopbaanID);
						},
						'Annuleer': function() {
							$(this).dialog('close');
						}
					}
				});
		}
		else
		{
			getRapportCommentaar(LeerlingLoopbaanID);
		}
		
	});

	// max height instellen van dialoog frame, voor het scrollen
	var TempDialogHeight = $(window).height()-200;
	$('#RapportCommentaarLeerlingDialogFrame').css({maxHeight: TempDialogHeight+'px'});
	
	// waarschuwing voor verwijderen
	$('.VerwijderItem').click(function(event) {
		event.preventDefault();
		ShowConfirmDialog($(this).attr('href'), 'U staat op het punt gegevens te verwijderen. Bent u zeker?');
	});

	// evaluatiemoment verplaatsen
	$('#VerplaatsPopup').dialog({
		draggable: false,
		modal: true,
		width: 500,
		resizable: false,
		autoOpen: false
	});

	$('.VerplaatsEvaluatieMoment').click(function(event) {
		event.preventDefault(); // # vermijden
		$('#VerplaatsEvaluatieMomentID').val($(this).attr('rel'));

		var buttons = {
			'Verplaats': function() {
				var href = '../PuntenboekLeerkracht/PuntenboekLeerkrachtAjaxVerplaatsEvaluatieMoment.php?SessionID='+SessionID+'&'+$('#VerplaatsPopup form').serialize();
				window.location = href;
			},
			'Annuleer': function() {
				$(this).dialog('close');
			}
		};
		var title = 'Verplaats evaluatiemoment';
		
		
		$('#VerplaatsPopup').dialog("option", 'buttons', buttons);
		$('#VerplaatsPopup').dialog("option", 'title', title);
		$('#VerplaatsPopup').dialog("open");
		
		
	});
	// zien dat altijd de juiste periode ingevuld is
	PopulateEvaluatieMomentToPeriodeID();
	$('#EvaluatieMomentToVakLinkLeerkrachtKlasID').change(function() {
		PopulateEvaluatieMomentToPeriodeID();
	});
	
	// commentaar verplaatsen en kopiëren
	$('#CommentaarPopup').dialog({
		draggable: false,
		modal: true,
		width: 500,
		resizable: false,
		autoOpen: false
	});
	$('.CopyCommentaar, .MoveCommentaar, .CopyAttitude, .MoveAttitude').click(function(event) {
		event.preventDefault(); // # vermijden
		
		switch($(this).attr('class'))
		{
			case 'CopyCommentaar':
				var buttons = {
					'Kopiëer': function() {
						var href = '../PuntenboekLeerkracht/PuntenboekLeerkrachtAjaxKopieerCommentaar.php?SessionID='+SessionID+'&'+$('#CommentaarPopup form').serialize();
						window.location = href;
					},
					'Annuleer': function() {
						$(this).dialog('close');
					}
				};
				var title = 'Kopiëer commentaren';
			break;
			case 'MoveCommentaar':
				var buttons = {
					'Verplaats': function() {
						var href = '../PuntenboekLeerkracht/PuntenboekLeerkrachtAjaxVerplaatsCommentaar.php?SessionID='+SessionID+'&'+$('#CommentaarPopup form').serialize();
						window.location = href;
					},
					'Annuleer': function() {
						$(this).dialog('close');
					}
				};
				var title = 'Verplaats commentaren';
			break;
			case 'CopyAttitude':
				var buttons = {
					'Kopïeer': function() {
						var href = '../PuntenboekLeerkracht/PuntenboekLeerkrachtAjaxKopieerAttitude.php?SessionID='+SessionID+'&'+$('#CommentaarPopup form').serialize();
						window.location = href;
					},
					'Annuleer': function() {
						$(this).dialog('close');
					}
				};
				var title = 'Kopiëer attitude quotaties';
			break;
			case 'MoveAttitude':
				var buttons = {
					'Verplaats': function() {
						var href = '../PuntenboekLeerkracht/PuntenboekLeerkrachtAjaxVerplaatsAttitude.php?SessionID='+SessionID+'&'+$('#CommentaarPopup form').serialize();
						window.location = href;
					},
					'Annuleer': function() {
						$(this).dialog('close');
					}
				};
				var title = 'Verplaats attitude quotaties';
			break;
		}
		
		$('#CommentaarPopup').dialog("option", 'buttons', buttons);
		$('#CommentaarPopup').dialog("option", 'title', title);
	
		$('#CommentaarPopup').dialog("open");
		
	});


	// laad icoon toevoegen
	$('body').append('<img src="../Images/zoeken.gif" id="PuntenboekLoader" />');
	$('body').mousemove(function(e) {
		// als de mensen niet met hun muis bewegen na het klikken, zal de gif niet mooi naast hun cursor staan.
		// moest de pagina traag aanvoelen, dit terug uit commentaar halen om te testen of het iets verbetert.
		// if($('#PuntenboekLoader').is(':visible'))
		{
			var leftPos = e.pageX+15;
			var topPos = e.pageY+10;
			$('#PuntenboekLoader').css({left: leftPos+'px', top: topPos+'px'});
		}
	});
	
	// breder/smaller maken van commentaar inputs
	$('.grower').focus(function() {
		var IdPrefix = $(this).attr('id').substr(0, $(this).attr('id').indexOf('_')+1);
		$('input[id^="'+IdPrefix+'"]').css({width: '15em'});
		fixRowHeights();
	});
	$('.grower').blur(function() {
		var IdPrefix = $(this).attr('id').substr(0, $(this).attr('id').indexOf('_')+1);
		
		var width = $(this).hasClass('inputcommentaar') ? 5 : 2;
		
		$('input[id^="'+IdPrefix+'"]').css({width: width+'em'});
		fixRowHeights();
	});
	
	
	// laatste puntenveld
	var LaatstePuntenVeld  = '';
	$('.inputpunten').each(function () {
		LaatstePuntenVeld = $(this).attr('id');
	});
	
	// tab+enter opvangen
	$('#content input, #content select').keyup(function(event) {
		// left arrow key, if possible select previous image
			// console.log(event.keyCode);
			switch(event.keyCode)
			{ 
				case 13: // enter
					if($(this).attr('id') == LaatstePuntenVeld)
					{
						$('#PuntenboekLeerkrachtEdit').submit();
					}
					else
					{
						var tabIndex = parseFloat($(this).attr('tabindex'),10);
						if(tabIndex >= 100) 
						{
							var nextTabIndex = tabIndex+1;
							var selector = '*[tabindex="'+nextTabIndex+'"]';
							$(this).change();
							$(this).blur();
							$(selector).focus(); // eerst focus doen zodat <select> velden ook geselecteerd worden (select() daar niet op)
							$(selector).select(); // select() selecteert de tekst die er reeds in staat
						}
					}
				break;
			}
	});
	
	
	// omschrijving focussen
	$('#EvaluatieMomentName').focus();
	
	// opvangen vinkjes deeltoetsen
	$('#EvaluatieMomentIsParent').change(function() {
			// alert('change');
		if($(this).is(':checked'))
		{
			var puntenGevonden = false;
			$('.heeftInput .inputpunten').each(function() {
				if(parseFloat($(this).val()) > 0)
				{
					puntenGevonden = true;
				}
			});
			if(puntenGevonden)
			{
				if(confirm('Er zijn punten ingegeven, deze zullen gewist worden. Wenst u door te gaan?'))
				{
					$('.heeftInput .inputpunten').val('').attr('disabled', true);
					$('#EvaluatieMomentParentEvaluatieMomentID').val(0);
					$('#EvaluatieMomentParentEvaluatieMomentID').closest('td').hide();
				}
				else
				{
					$('#EvaluatieMomentIsParent').attr('checked', false);
				}
			}
			else
			{
				$('.heeftInput .inputpunten').val('').attr('disabled', true);
				$('#EvaluatieMomentParentEvaluatieMomentID').val(0);
				$('#EvaluatieMomentParentEvaluatieMomentID').closest('td').hide();
			}
		}
		else
		{
			$('.heeftInput .inputpunten').attr('disabled', false);
			$('#EvaluatieMomentParentEvaluatieMomentID').closest('td').show();
		}
	});
	
	$('#EvaluatieMomentParentEvaluatieMomentID').change(function() {
		// alert('test');
		if(parseFloat($(this).val(),10) > 0)
		{
			$('#EvaluatieMomentIsParent').attr('checked', false);
			$('#EvaluatieMomentIsParent').closest('td').hide();
			$('#EvaluatieMomentEvaluatieMomentTypeID').closest('td').hide();
			$('#EvaluatieMomentIsRapportpunt').closest('td').hide();
			$('#EvaluatieMomentName').closest('td').attr('colspan', 1);
			$('#EvaluatieMomentFileName').closest('td').attr('colspan', 1);
		}
		else
		{
			$('#EvaluatieMomentIsParent').closest('td').show();
			$('#EvaluatieMomentEvaluatieMomentTypeID').closest('td').show();
			$('#EvaluatieMomentIsRapportpunt').closest('td').show();
			$('#EvaluatieMomentName').closest('td').attr('colspan', 2);
			$('#EvaluatieMomentFileName').closest('td').attr('colspan', 2);
		}
	});
	
	var SendAlert = true;
	// waarschuwing voor punten meer dan max of minder dan nul
	$('.inputpunten').change(function(event) {
		if($(this).attr('id') != 'EvaluatieMomentOrigineelMaximumPunten' && $(this).attr('id') != 'EvaluatieMomentMaximumPunten' && SendAlert)
		{
			$(this).val(function(i, curValue){
				var maxValue = parseFloat($('#EvaluatieMomentOrigineelMaximumPunten').val(),10);
				var retValue = curValue;
				var BovenMaximum = $('#AllowPuntenBovenMaximum').val();
				var OnderNul = $('#AllowPuntenOnderNul').val();
				if(curValue > maxValue || curValue < 0)
				{
					if(curValue > maxValue)
					{
						if(BovenMaximum == '1')
						{
							var msg = 'U gaf punten hoger dan het maximum in.';
						}
						else
						{
							var msg = 'U gaf punten hoger dan het maximum in. Dit is niet toegelaten';
							retValue = maxValue;
						}
					}
					if(curValue < 0)
					{
						if(BovenMaximum == '1')
						{
							var msg = 'U gaf punten kleiner dan nul in.';
						}
						else
						{
							var msg = 'U gaf punten kleiner dan nul in. Dit is niet toegelaten';
							retValue = 0;
						}
					}
					
					alert(msg);
					SendAlert = false;
				}
				
				return retValue;
			});
			
		}
	});
	
	// code verplaatst naar PHP om bug in IE7 op te vangen
	// // De rapportcommentaren valideren op maximum lengte
	// $('.validate').keyup(function() {
		// var MaxLength = $(this).attr('rel').substr(9);
		// // console.log(MaxLength);
		// if($(this).val().length > MaxLength)
		// {
			// $(this).addClass('error');
			// if($(this).siblings('a').length == 0)
			// {
				// $(this).after($('<a class="lengthWarning" onmouseout="return nd();" onclick="return overlib(\'Maximum '+MaxLength+' karakters, door de beperkingen van de rapport layout.\');" href="javascript:void(0);" class="small_icon"><img src="../FWImages/icons/error.png" /></a>'));
			// }
			// fixRowHeights();
		// }
		// else
		// {
			// $(this).removeClass('error');
			// $(this).siblings('.lengthWarning').remove();
			// fixRowHeights();
		// }
	// });
	
	// attitude vinkjes opslaan
	$('.AttitudeVinkAan').live('click', function() {
		changeQuotatie(true, $(this).attr('rel'), $(this));
		return false;
	});
	$('.AttitudeVinkUit').live('click', function() {
		changeQuotatie(false, $(this).attr('rel'), $(this));
		return false;
	});
});


var OpslaanButton = function() {
	RapportCommentaarOpslaan(0);
}

function PopulateEvaluatieMomentToPeriodeID() {
	$('#EvaluatieMomentToPeriodeID').html('');
	if (ArrayPeriodesPerVVLK.length > 0)
	{
		$.each(ArrayPeriodesPerVVLK[''+$('#EvaluatieMomentToVakLinkLeerkrachtKlasID').val()], function(Key, Val) {
			// console.log(Key+' => '+Val);
			if (typeof Val !== 'undefined')
			{
				var selected = ViewState.PuntenboekLeerkrachtViewStatePeriodeID == Key ? 'selected="selected"' : '';
				var ValAppendix = ViewState.PuntenboekLeerkrachtViewStatePeriodeID == Key ? ' (*)' : '';
				$('#EvaluatieMomentToPeriodeID').append($('<option value="'+Key+'" '+selected+'>'+Val+ValAppendix+'</option>'));
			}
		});
	}
}


// var PuntenboekTableRows = {};
// function getPuntenboekTableRows()
// {
	// var i = 0;
	// $('#PuntenKop tr').each(function() {
		// var trIndex = $(this).index() + 1; // index + 1, for use with nth-child(n)
		// var KopTr = $(this);
		// var PuntTr = $('#PuntenOverzicht tr:nth-child('+trIndex+')');
		// PuntenboekTableRows[i] = {};
		// PuntenboekTableRows[i].KopTr = KopTr;
		// PuntenboekTableRows[i].PuntTr = PuntTr;
		// i++;
	// });
// }

// function fixRowHeights()
// {
	// // console.time('fixRowHeights');
	// if(jQuery.isEmptyObject(PuntenboekTableRows))
	// {
		// getPuntenboekTableRows();
	// }

	// // console.log(PuntenboekTableRows);
	
	// for(row in PuntenboekTableRows)
	// {
		// var tempHeight = Math.max(PuntenboekTableRows[row].KopTr.find('th,td').outerHeight(), PuntenboekTableRows[row].PuntTr.find('th,td').outerHeight());
		// PuntenboekTableRows[row].PuntTr.height(tempHeight);
		// PuntenboekTableRows[row].KopTr.height(tempHeight);
	// }
	// // console.timeEnd('fixRowHeights');
// }



function RapportCommentaarOpslaan(NextLeerlingLoopbaanID)
{
	// console.log(NextLeerlingLoopbaanID);
	var dataString = $('#RapportCommentaar').serialize();
	if(NextLeerlingLoopbaanID != 0)
	{
		dataString = dataString+'&NextLeerlingLoopbaanID='+NextLeerlingLoopbaanID;
	}
	$('#PuntenboekLoader').show();
	$.ajax({
		url: '../PuntenboekLeerkracht/PuntenboekLeerkrachtAjaxSaveRapportCommentaar.php?SessionID='+SessionID,
		data: dataString,
		type: 'POST',
		success: function(json) {
			if(NextLeerlingLoopbaanID == 0)
			{
				window.location = '../PuntenboekLeerkracht/PuntenboekLeerkrachtEdit.php?SessionID='+SessionID;
			}
			else
			{
				$('#PuntenboekLoader').hide();
				SetDialog(json);
			}
		}
	});
}

function getRapportCommentaar(LeerlingLoopbaanID)
{
	var getData = {};
	$.each(ViewState, function(Key, Value) {
		getData[Key] = Value;
	});
	getData.LeerlingLoopbaanID = LeerlingLoopbaanID;

	$('#PuntenboekLoader').show();
	$.ajax({
		url: '../PuntenboekLeerkracht/PuntenboekLeerkrachtAjaxGetRapportCommentaar.php?SessionID='+SessionID,
		data: getData,
		success: function(json) {
			$('#PuntenboekLoader').hide();
			SetDialog(json);
			ShowHideEvaluatieMomentInfo();
			$('#RapportCommentaarLeerlingDialog').dialog("open");
		}
	});
}

function SetDialog(json)
{
	$('#RapportCommentaarLeerlingDialogFrame').html(json.html);
	WatchRapportCommentaarVoorbeelden('PeriodeCommentaarLeerlingCommentaar');
	WatchRapportCommentaarVoorbeelden('PeriodeCommentaarLeerlingCommentaarAttitude');
	ShowHideEvaluatieMomentInfo();
	
	$('#RapportCommentaarLeerlingDialog').dialog("option", "title", json.titel);
	var buttons = new Object();
	if(json.PrevID != 0)
	{
		buttons.Vorige = function() { RapportCommentaarOpslaan(json.PrevID); };
	}
	buttons.Opslaan = OpslaanButton
	if(json.NextID != 0)
	{
		buttons.Volgende = function() { RapportCommentaarOpslaan(json.NextID); };
	}
	$('#RapportCommentaarLeerlingDialog').dialog("option", "buttons", buttons);
}



function insert_text(element, ID)
{
	var text = element.val();
	if(text == '[wissen]') 
	{ 
		text = '';
	}
	$('#'+ID).val(text);
}

function processPaste(element)
{
	if(element.val().indexOf(' ') != -1)
	{
		var PasteInput = element.val().split(' ');
		var i = 0;
		$('.inputpunten:not(#EvaluatieMomentMaximumPunten)').each(function() {
			var tempVal = PasteInput[i] || '';
			$(this).val(tempVal.replace(' ', ''));
			i++;
			if(i == $('.inputpunten').length && $('.inputpunten').length == PasteInput.length) {
				document.PuntenboekLeerkracht.submit();
			}
		});
	}
}

function WatchRapportCommentaarVoorbeelden(VeldNaam)
{
	var Commentaar = $('#'+VeldNaam).val() || '';
	if(Commentaar.length > 40)
	{
		$('#Voorbeeld'+VeldNaam).show().children('em').text(Commentaar);
	}
	$('#'+VeldNaam).keyup(function() {
		var Commentaar = $('#'+VeldNaam).val() || '';
		if(Commentaar.length > 40)
		{
			$('#Voorbeeld'+VeldNaam).show().children('em').text(Commentaar);
		}
	});
}

// niet meer in gebruik 
// function changeQuotatie(aan, rel, element)
// {
	// var data = rel.split('_');
	// var LeerlingLoopbaanID = data[0];
	// var PeriodeCommentaarAttitudeLeerlingID = data[1];
	// var PeriodeCommentaarAttitudeQuotatieID = data[2];
	// var dataString = 'LeerlingLoopbaanID='+LeerlingLoopbaanID+'&PeriodeCommentaarAttitudeLeerlingID='+PeriodeCommentaarAttitudeLeerlingID+'&PeriodeCommentaarAttitudeQuotatieID='+PeriodeCommentaarAttitudeQuotatieID;
	// if(aan)
	// {
		// dataString = dataString+'&Aanvinken=1';
	// }
	// $.ajax({
		// url: '../PuntenboekLeerkracht/PuntenboekLeerkrachtSavePeriodeCommentaarAttitudeLeerling.php?SessionID='+SessionID,
		// data: dataString,
		// success: function(json) {
			// element.attr('class', json.class);
			// element.children('img').attr('src', json.img_src).attr('title', json.title);
		// }
	// });
	
// }
