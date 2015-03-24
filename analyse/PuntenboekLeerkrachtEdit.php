<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
	<meta name='robots' content='noindex,nofollow'/>
	<meta name='description' content='Pronoia BVBA'/>
	<meta http-equiv='CACHE-CONTROL' content='NO-CACHE'/>
	<link rel='stylesheet' href='../FWStyles/StyleV20General.css?d=1358641009' type='text/css'/>
	<link rel='stylesheet' href='../FWStyles/ui-lightness/jquery-ui-1.8.9.custom.css?d=1358641009' type='text/css'/>
	<link rel='stylesheet' href='../FWJS/jquery-tooltip/jquery.tooltip.css?d=1358849130' type='text/css'/>
	<!--[if IE]>
		<link rel='stylesheet' type='text/css' href='../FWStyles/StyleV20IE.css?d=1' />
	<![endif]-->
	<script type='text/javascript' src='../FWJS/jquery.js?d=1358849130'></script>
	<script type='text/javascript' src='../FWJS/jquery.ui.datepicker-nl.js?d=1358849130'></script>
	<script type='text/javascript' src='../FWJS/jquery.ui.js?d=1358849130'></script>
	<script type='text/javascript' src='../FWJS/jquery.timepicker.min.js?d=1358849130'></script>
	<script type='text/javascript' src='../FWJS/jquery-tooltip/jquery.tooltip.js?d=1358849130'></script>
	<script type='text/javascript' src='../FWJS/Overlib/overlib.js?d=1358849130'></script>
	<script type='text/javascript' src='../FWJS/actions.js?d=1358849130'></script>
	<script type='text/javascript' src='../FWJS/jscolor/jscolor.js?d=1358849130'></script>
	<script type='text/javascript' src='../FWJS/jquery.selectboxes.js?d=1358849130'></script>
	<script type='text/javascript' src='../FWJS/jquery.timers.js?d=1358849130'></script>
	<script type='text/javascript' src='../FWJS/flashembed.js?d=1358849130'></script>
	<script type='text/javascript' src='../FWJS/fwlibv20.js?d=1358849130'></script>
	<script type='text/javascript' src='../PuntenboekLeerkracht/PuntenboekLeerkrachtList.js?d=1358641011'></script>
	<script type='text/javascript' src='../PuntenboekLeerkracht/PuntenboekLeerkrachtEdit.js?d=1358641011'></script>
	<title>Puntenboek van Sarah Claeys</title>
	<script type="text/javascript">
		var SessionID = 'bd1717af6d8382be1fa4d41d80d02eb59598ac2c';
		var IsLoggedInThroughGoogle = false;
		var BasePath = 'https://bsvisitatie.schoolonline.be/';
		var Table = 'PuntenboekLeerkracht';
		var RequestID = '';
		var RequestIsCopy = '';
		var ShowConfirmAfterChange = true;
		var ViewState = {"PuntenboekLeerkrachtViewStateLeerkrachtID":"222","PuntenboekLeerkrachtViewStatePuntenboekID":"1","PuntenboekLeerkrachtViewStateVakLinkLeerkrachtKlasID":"591","PuntenboekLeerkrachtViewStatePeriodeID":"77"};
		var ArrayPeriodes = {"74":"rapport 1","80":"rapport 1Lbis","75":"rapport 2","77":"rapport 3 (*)","81":"synthese 1","76":"rapport 4","78":"rapport 5","79":"rapport 6","82":"synthese 2","83":"jaarrapport"};
		var ArrayVLLK = {"603":"5LB - Lezen","598":"5LB - Luisteren","599":"5LB - Spreken","601":"5LB - Spellen","600":"5LB - Stellen","602":"5LB - Taalbeschouwing","593":"5LB - Schrift","594":"5LB - Getallen","595":"5LB - Bewerkingen","596":"5LB - Metend rekenen","597":"5LB - Meetkunde","592":"5LB - Wero","591":"5LB - Godsdienst","590":"5LB - Frans"};
		$(document).ready(function() {
			$('.DeleteUploadifyAttachment').live('click',function() {
				var Item = $(this).parents('li');
				var DelLink = $(this).attr('href')+'&TempID=TEMPbd1717af6d8382be1fa4d41d80d02eb59598ac2c135888737586864500';
				$.ajax({
					url: DelLink,
					success: function() {
						Item.remove();
					}
				});
				return false;
			});
			$('.DeleteUploadifyAttachment').live('click',function() {
				var Item = $(this).parents('li');
				var DelLink = $(this).attr('href')+'&TempID=TEMPbd1717af6d8382be1fa4d41d80d02eb59598ac2c135888737586864500';
				$.ajax({
					url: DelLink,
					success: function() {
						Item.remove();
					}
				});
				return false;
			});

									var offset = $('#NarrowRightColumn').offset();
									if (offset != null)
									{
										$(window).scroll(function () {
										var scrollTop 	 = $(window).scrollTop(); // check the visible top of the browser
										var height = $('#NarrowRightColumn').outerHeight();
										var maxheight = $('#NarrowRightColumn').parent().parent().outerHeight() + $('#NarrowRightColumn').parent().parent().offset().top;
										if (scrollTop > offset.top-5)
										{
											if (scrollTop > maxheight - height - 5)
											{
												$('#NarrowRightColumn').removeClass('fixedcolumn');
												$('#NarrowRightColumn').css('top', maxheight - height - $('#NarrowRightColumn').parent().parent().offset().top -10);
											}
											else
											{
												$('#NarrowRightColumn').addClass('fixedcolumn');
												$('#NarrowRightColumn').css('top', scrollTop-offset.top+5);
											}
										}
										else
										{
											$('#NarrowRightColumn').removeClass('fixedcolumn');
											$('#NarrowRightColumn').css('top', 0);
										}
										});
									}
					 			initFotoPopup(); 
			$('input, textarea, select:not(.ViewStateSelectField)').change(function() {
				InputGewijzigd = true;
			});
		});

	</script>
</head>

<body id="StyleV20Sol" >

<div id="container">
	<div id="header">
		<h1 id='SchoolonlineHeader'>Schoolonline</h1>
		<h2><span id='header_title'>Puntenboek van Sarah Claeys</span></h2>
	</div><!-- end header -->
	<div id="wrapper">
	<div id="content_wrap">

		<form name='PuntenboekLeerkrachtEdit' id='PuntenboekLeerkrachtEdit'  enctype='multipart/form-data'  action='../PuntenboekLeerkracht/PuntenboekLeerkrachtSave.php?SessionID=bd1717af6d8382be1fa4d41d80d02eb59598ac2c' method='post' onkeypress='Save(event);'>
<script type='text/javascript'>
var FormHasChanged = false;
function Save(e)
{
	var characterCode;
	if (!e)
	{
		var e = window.event;
	}
	if (e.keyCode)
	{
		characterCode = e.keyCode;
	}
	else if (e.which)
	{
		characterCode = e.which;
	}
	if(characterCode == 123)
	{
		document.PuntenboekLeerkrachtEdit.submit();
	}
}

$(function() {
	
});
function CancelWarning()
{
}
function DeleteWarning()
{
}
</script>
		<ul id="top_nav">
			<li><a href="../FWStartPage/FWStartPageList.php?SessionID=bd1717af6d8382be1fa4d41d80d02eb59598ac2c" id="CancelButton"><img src="../FWImages/Start.gif" title="Terug/Annuleren" alt="Terug/Annuleren" tabindex='1'/><span>Terug/Annuleren</span></a></li>
			<li><a href="#" onclick='document.PuntenboekLeerkrachtEdit.submit();' id="SaveButton1"><img src="../FWImages/Save.gif" title="Bewaren" alt="Bewaren" tabindex='2'/><span>Bewaren</span></a></li>
			<li id="menuli"><a href="javascript:uitklapmenu('menuli', 'menuarrow', 'overige_menu', '');"><img src="../FWImages/Closed.gif" title="andere functies" alt="andere functies" tabindex='5' id="menuarrow"/><span>andere functies</span></a></li>
			<li><span style='color:#000000;'>Periodes/rapporten:  <select  name='PuntenboekLeerkrachtViewStatePeriodeID' id='PuntenboekLeerkrachtViewStatePeriodeID' class='ViewStateSelectField' onchange="ViewStateChangeLocation('PuntenboekLeerkrachtViewStatePeriodeID', $(this));"><option  value='../PuntenboekLeerkracht/PuntenboekLeerkrachtEdit.php?SessionID=bd1717af6d8382be1fa4d41d80d02eb59598ac2c&amp;PuntenboekLeerkrachtViewStatePeriodeID=74' >rapport 1</option>
<option  value='../PuntenboekLeerkracht/PuntenboekLeerkrachtEdit.php?SessionID=bd1717af6d8382be1fa4d41d80d02eb59598ac2c&amp;PuntenboekLeerkrachtViewStatePeriodeID=80' >rapport 1Lbis</option>
<option  value='../PuntenboekLeerkracht/PuntenboekLeerkrachtEdit.php?SessionID=bd1717af6d8382be1fa4d41d80d02eb59598ac2c&amp;PuntenboekLeerkrachtViewStatePeriodeID=75' >rapport 2</option>
<option  value='../PuntenboekLeerkracht/PuntenboekLeerkrachtEdit.php?SessionID=bd1717af6d8382be1fa4d41d80d02eb59598ac2c&amp;PuntenboekLeerkrachtViewStatePeriodeID=77' selected='selected'>rapport 3 (*)</option>
<option  value='../PuntenboekLeerkracht/PuntenboekLeerkrachtEdit.php?SessionID=bd1717af6d8382be1fa4d41d80d02eb59598ac2c&amp;PuntenboekLeerkrachtViewStatePeriodeID=81' >synthese 1</option>
<option  value='../PuntenboekLeerkracht/PuntenboekLeerkrachtEdit.php?SessionID=bd1717af6d8382be1fa4d41d80d02eb59598ac2c&amp;PuntenboekLeerkrachtViewStatePeriodeID=76' >rapport 4</option>
<option  value='../PuntenboekLeerkracht/PuntenboekLeerkrachtEdit.php?SessionID=bd1717af6d8382be1fa4d41d80d02eb59598ac2c&amp;PuntenboekLeerkrachtViewStatePeriodeID=78' >rapport 5</option>
<option  value='../PuntenboekLeerkracht/PuntenboekLeerkrachtEdit.php?SessionID=bd1717af6d8382be1fa4d41d80d02eb59598ac2c&amp;PuntenboekLeerkrachtViewStatePeriodeID=79' >rapport 6</option>
<option  value='../PuntenboekLeerkracht/PuntenboekLeerkrachtEdit.php?SessionID=bd1717af6d8382be1fa4d41d80d02eb59598ac2c&amp;PuntenboekLeerkrachtViewStatePeriodeID=82' >synthese 2</option>
<option  value='../PuntenboekLeerkracht/PuntenboekLeerkrachtEdit.php?SessionID=bd1717af6d8382be1fa4d41d80d02eb59598ac2c&amp;PuntenboekLeerkrachtViewStatePeriodeID=83' >jaarrapport</option>
</select></span></li>
			<li><span style='color:#000000;'>Uitgebreid: <select  name='PuntenboekLeerkrachtViewStateToonEindTotalen' id='PuntenboekLeerkrachtViewStateToonEindTotalen' class='ViewStateSelectField' onchange="ViewStateChangeLocation('PuntenboekLeerkrachtViewStateToonEindTotalen', $(this));"><option  value='../PuntenboekLeerkracht/PuntenboekLeerkrachtEdit.php?SessionID=bd1717af6d8382be1fa4d41d80d02eb59598ac2c&amp;PuntenboekLeerkrachtViewStateToonEindTotalen=1' >Neen</option>
<option  value='../PuntenboekLeerkracht/PuntenboekLeerkrachtEdit.php?SessionID=bd1717af6d8382be1fa4d41d80d02eb59598ac2c&amp;PuntenboekLeerkrachtViewStateToonEindTotalen=2' selected='selected'>Ja</option>
</select></span></li>
		</ul>

		<ul id="controle_log">
<li><a href='#' id='SOLFAQPopupLink'><span>Veelgestelde vragen</span><img src='../Images/FWSupport.gif' alt='faq' /></a><div id='SOLFAQPopup'><img src='../Images/faqpopuppijl.gif' alt='' class='faqpopuppijl' /><ul><li><a class='requestMovie' href='https://www.schoolonline.be/helpdesk/filmpjes/Deeltoetsen.mp4'>Hoe werk ik met deeltoetsen</a></li></ul></div></li>			<li><a href="../FWLogin/FWLogOut.php?SessionID=bd1717af6d8382be1fa4d41d80d02eb59598ac2c" id="LogOutButton1"><img src="../FWImages/LogOut.gif" title="Afmelden" alt="Afmelden" tabindex='6'/><span>Afmelden</span></a></li>
		</ul>

		<div id="overige_menu" style="display: none">
			<ul class="uitklap">
				<li><a  href='../VakLinkLeerkrachtKlasDoel/VakLinkLeerkrachtKlasDoelList.php?SessionID=bd1717af6d8382be1fa4d41d80d02eb59598ac2c&amp;VakLinkLeerkrachtKlasDoelViewStateLeerkrachtID=222&amp;VakLinkLeerkrachtKlasDoelViewStatePuntenboekID=1&amp;VakLinkLeerkrachtKlasDoelViewStateVakLinkLeerkrachtKlasID=591&amp;VakLinkLeerkrachtKlasDoelViewStatePeriodeID=77&amp;VakLinkLeerkrachtKlasDoelViewStateToonEindTotalen=2'    ><img src='../Images/doel.gif' title='Doelen' alt='Doelen'/><span>Doelen</span></a></li>
				<li><a  href='../VakLinkLeerkrachtKlasTeltNietMee/VakLinkLeerkrachtKlasTeltNietMeeEdit.php?SessionID=bd1717af6d8382be1fa4d41d80d02eb59598ac2c&amp;VakLinkLeerkrachtKlasTeltNietMeeViewStateLeerkrachtID=222&amp;VakLinkLeerkrachtKlasTeltNietMeeViewStatePuntenboekID=1&amp;VakLinkLeerkrachtKlasTeltNietMeeViewStateVakLinkLeerkrachtKlasID=591&amp;VakLinkLeerkrachtKlasTeltNietMeeViewStatePeriodeID=77&amp;VakLinkLeerkrachtKlasTeltNietMeeViewStateToonEindTotalen=2'    ><img src='../Images/configuratie_24.gif' title='Punten niet laten meetellen' alt='Punten niet laten meetellen'/><span>Punten niet laten meetellen</span></a></li>
				<li><a  href='../PuntenboekLeerkracht_oud/PuntenboekLeerkrachtLijsten.php?SessionID=bd1717af6d8382be1fa4d41d80d02eb59598ac2c&amp;VakLinkLeerkrachtKlasID=591&amp;PeriodeID=77&amp;VakLinkLeerkrachtKlasLeerkrachtID=222&amp;PuntenboekLeerkrachtViewStateLeerkrachtID=222&amp;PuntenboekLeerkrachtViewStatePuntenboekID=1'    ><img src='../Images/../Images/kcmkwm.gif' title='Lijsten' alt='Lijsten'/><span>Lijsten</span></a></li>
			</ul>
		</div>

		<div id="content">
<div class='infobox' style='margin-top: 25px'><div><ul class='InfoboxTabs' style='top: -25px'><li ><a  title='1 uur / gewicht 10'  href='../PuntenboekLeerkracht/PuntenboekLeerkrachtEdit.php?SessionID=bd1717af6d8382be1fa4d41d80d02eb59598ac2c&amp;PuntenboekLeerkrachtViewStateVakLinkLeerkrachtKlasID=603&amp;PuntenboekLeerkrachtViewStatePeriodeID=77'>5LB - Lezen</a></li><li ><a  title='1 uur / gewicht 10'  href='../PuntenboekLeerkracht/PuntenboekLeerkrachtEdit.php?SessionID=bd1717af6d8382be1fa4d41d80d02eb59598ac2c&amp;PuntenboekLeerkrachtViewStateVakLinkLeerkrachtKlasID=598&amp;PuntenboekLeerkrachtViewStatePeriodeID=77'>5LB - Luisteren</a></li><li ><a  title='1 uur / gewicht 10'  href='../PuntenboekLeerkracht/PuntenboekLeerkrachtEdit.php?SessionID=bd1717af6d8382be1fa4d41d80d02eb59598ac2c&amp;PuntenboekLeerkrachtViewStateVakLinkLeerkrachtKlasID=599&amp;PuntenboekLeerkrachtViewStatePeriodeID=77'>5LB - Spreken</a></li><li ><a  title='1 uur / gewicht 10'  href='../PuntenboekLeerkracht/PuntenboekLeerkrachtEdit.php?SessionID=bd1717af6d8382be1fa4d41d80d02eb59598ac2c&amp;PuntenboekLeerkrachtViewStateVakLinkLeerkrachtKlasID=601&amp;PuntenboekLeerkrachtViewStatePeriodeID=77'>5LB - Spellen</a></li><li ><a  title='1 uur / gewicht 10'  href='../PuntenboekLeerkracht/PuntenboekLeerkrachtEdit.php?SessionID=bd1717af6d8382be1fa4d41d80d02eb59598ac2c&amp;PuntenboekLeerkrachtViewStateVakLinkLeerkrachtKlasID=600&amp;PuntenboekLeerkrachtViewStatePeriodeID=77'>5LB - Stellen</a></li><li ><a  title='1 uur / gewicht 10'  href='../PuntenboekLeerkracht/PuntenboekLeerkrachtEdit.php?SessionID=bd1717af6d8382be1fa4d41d80d02eb59598ac2c&amp;PuntenboekLeerkrachtViewStateVakLinkLeerkrachtKlasID=602&amp;PuntenboekLeerkrachtViewStatePeriodeID=77'>5LB - Taalbeschouwing</a></li><li ><a  title='1 uur / gewicht 10'  href='../PuntenboekLeerkracht/PuntenboekLeerkrachtEdit.php?SessionID=bd1717af6d8382be1fa4d41d80d02eb59598ac2c&amp;PuntenboekLeerkrachtViewStateVakLinkLeerkrachtKlasID=593&amp;PuntenboekLeerkrachtViewStatePeriodeID=77'>5LB - Schrift</a></li><li ><a  title='1 uur / gewicht 15'  href='../PuntenboekLeerkracht/PuntenboekLeerkrachtEdit.php?SessionID=bd1717af6d8382be1fa4d41d80d02eb59598ac2c&amp;PuntenboekLeerkrachtViewStateVakLinkLeerkrachtKlasID=594&amp;PuntenboekLeerkrachtViewStatePeriodeID=77'>5LB - Getallen</a></li><li ><a  title='1 uur / gewicht 15'  href='../PuntenboekLeerkracht/PuntenboekLeerkrachtEdit.php?SessionID=bd1717af6d8382be1fa4d41d80d02eb59598ac2c&amp;PuntenboekLeerkrachtViewStateVakLinkLeerkrachtKlasID=595&amp;PuntenboekLeerkrachtViewStatePeriodeID=77'>5LB - Bewerkingen</a></li><li ><a  title='1 uur / gewicht 15'  href='../PuntenboekLeerkracht/PuntenboekLeerkrachtEdit.php?SessionID=bd1717af6d8382be1fa4d41d80d02eb59598ac2c&amp;PuntenboekLeerkrachtViewStateVakLinkLeerkrachtKlasID=596&amp;PuntenboekLeerkrachtViewStatePeriodeID=77'>5LB - Metend rekenen</a></li><li ><a  title='1 uur / gewicht 15'  href='../PuntenboekLeerkracht/PuntenboekLeerkrachtEdit.php?SessionID=bd1717af6d8382be1fa4d41d80d02eb59598ac2c&amp;PuntenboekLeerkrachtViewStateVakLinkLeerkrachtKlasID=597&amp;PuntenboekLeerkrachtViewStatePeriodeID=77'>5LB - Meetkunde</a></li><li ><a  title='5 uren / gewicht 50'  href='../PuntenboekLeerkracht/PuntenboekLeerkrachtEdit.php?SessionID=bd1717af6d8382be1fa4d41d80d02eb59598ac2c&amp;PuntenboekLeerkrachtViewStateVakLinkLeerkrachtKlasID=592&amp;PuntenboekLeerkrachtViewStatePeriodeID=77'>5LB - Wero</a></li><li class='active'><a  title='3 uren / gewicht 30'  href='../PuntenboekLeerkracht/PuntenboekLeerkrachtEdit.php?SessionID=bd1717af6d8382be1fa4d41d80d02eb59598ac2c&amp;PuntenboekLeerkrachtViewStateVakLinkLeerkrachtKlasID=591&amp;PuntenboekLeerkrachtViewStatePeriodeID=77'>5LB - Godsdienst</a></li><li ><a  title='3 uren / gewicht 30'  href='../PuntenboekLeerkracht/PuntenboekLeerkrachtEdit.php?SessionID=bd1717af6d8382be1fa4d41d80d02eb59598ac2c&amp;PuntenboekLeerkrachtViewStateVakLinkLeerkrachtKlasID=590&amp;PuntenboekLeerkrachtViewStatePeriodeID=77'>5LB - Frans</a></li></ul><p class='alert'>1 - <a style='text-decoration:none' class='OpenInPopup' href='../PuntenboekLeerkracht/PuntenboekLeerkrachtRapportPrintHistory.php?SessionID=bd1717af6d8382be1fa4d41d80d02eb59598ac2c&amp;PeriodeID=77&amp;VakLinkLeerkrachtKlasID=591&amp;KlasID=70'>Dit rapport werd reeds afgedrukt. Deze afdruk kan puur informatief zijn. Een nieuwere afdruk kan steeds op een latere datum gemaakt worden. <u>Klik hier om de afdrukgeschiedenis na te kijken.</u></a><br /></p><div class='infobox notification'><div>1 - In deze periode kunnen er punten ingegeven worden van vrijdag 2012-12-21 08:00 tot en met vrijdag 2013-02-01 11:59. Enkel de ingestelde groepen (Directie, SchoolOnline-Beheerder, Puntenboekbeheerder) kunnen nog punten ingeven, wijzigen of verwijderen buiten deze periode.<br /></div></div>
							<div class='infobox alert_notification' id='CommentWarning' style='display: none;'><div>
								<b>Opgelet</b>: als een commentaarlijn rood wordt weergegeven, betekent dit dat u commentaar ingeeft zonder dat de leerling een punt of quotatie heeft gekregen voor dit evaluatiemoment.
							</div></div>
					   <table class='ToetsGegevens puntenboek'> <tbody> <tr> <td colspan='2'> omschrijving&nbsp;<input tabindex='100'  id='EvaluatieMomentName' name='EvaluatieMomentName' size='60' value='' type='text'> </td> <td rowspan='2'>  
<select  name='VakLinkLeerkrachtKlasDoel' onchange="insert_text($(this), 'EvaluatieMomentName');" size='4'> 	<option value="Aandacht en medewerking tijdens de kerstviering" title="Aandacht en medewerking tijdens de kerstviering">Aandacht en medewerking tijdens de kerstviering</option>
	<option value="Bewogen worden en in beweging komen" title="Bewogen worden en in beweging komen">Bewogen worden en in beweging komen</option>
	<option value="De advent - Kerstmis" title="De advent - Kerstmis">De advent - Kerstmis</option>
	<option value="De bijbel" title="De bijbel">De bijbel</option>
	<option value="De profeet Elia" title="De profeet Elia">De profeet Elia</option>
	<option value="Gelukkig worden" title="Gelukkig worden">Gelukkig worden</option>
	<option value="Grenzen van het leven : openboektoets" title="Grenzen van het leven : openboektoets">Grenzen van het leven : openboektoets</option>
	<option value="Openboektoets : Bewogen worden." title="Openboektoets : Bewogen worden.">Openboektoets : Bewogen worden.</option>
	<option value="Openboektoets : natuur en cultuur" title="Openboektoets : natuur en cultuur">Openboektoets : natuur en cultuur</option>
	<option value="Test TDE1" title="Test TDE1">Test TDE1</option>
	<option value="Thema 1: Gelukkig worden" title="Thema 1: Gelukkig worden">Thema 1: Gelukkig worden</option>
	<option value="thema : geluk" title="thema : geluk">thema : geluk</option>
	<option value="Thema : Gelukkig worden" title="Thema : Gelukkig worden">Thema : Gelukkig worden</option>
	<option value="thema Elia" title="thema Elia">thema Elia</option>
</select>
 </td> <td> datum <em>(jjjj-mm-dd)</em>&nbsp;<input tabindex='101'  class='jQueryDatepicker' name='EvaluatieMomentDatum' id='EvaluatieMomentDatum' size='10' value='2013-01-22' type='text'> &nbsp;&nbsp;<small><a href='#' title='Datum wissen' class='no-decoration' onclick="  if ($('#EvaluatieMomentDatum').attr('disabled') != 'disabled') { $('#EvaluatieMomentDatum').val('0000-00-00'); } return false;">x</a></small><script type="text/javascript">
$(function() {
	$('#EvaluatieMomentDatum').datepicker({yearRange: "0000:c+10"}); 
});
</script>
</td> <td  colspan='2'> <label for='EvaluatieMomentIsParent'><input   id='EvaluatieMomentIsParent' name='EvaluatieMomentIsParent' type='checkbox'> &nbsp;heeft deelresultaten?</label> </td> </tr> <tr> <td >evaluatietype&nbsp;<select tabindex='102'  name='EvaluatieMomentEvaluatieMomentTypeID' id='EvaluatieMomentEvaluatieMomentTypeID'> <option value='2'  >DW</option> </select> </td> <td> herberekenen op&nbsp;<input tabindex='103'  class='inputpunten' name='EvaluatieMomentMaximumPunten' id='EvaluatieMomentMaximumPunten' size='3' value='' type='text'> </td> <td > <label for='EvaluatieMomentIsRapportpunt'><input tabindex='104'  checked='checked' id='EvaluatieMomentIsRapportpunt' name='EvaluatieMomentIsRapportpunt' type='checkbox'> &nbsp;is rapportpunt?</label> </td> <td colspan='2'> <input  name='EvaluatieMomentFileName' id='EvaluatieMomentFileName' type='file'> <a onmouseout='return nd();' onclick='return overlib("Bestanden mogen niet groter zijn dan 20480kB.<br /><br />Bestanden moeten ook voldoen aan één van volgende types:<br />.accb .accdb .accmdb .avi .bmp .cd2 .cod .csv .dat .dbf .doc .docx .dot .dotm .dotx .emf .eml .emm .exe .flipchart .flv .ggb .gif .htm .html .jfif .jpe .jpeg .jpg .mdb .mdbx .mdi .mm .mmap .mmp .mov .mp3 .mp4 .msg .odb .odg .odp .ods .odt .otb .otg .otp .ots .ott .pdf .pdn .png .pot .potx .pps .ppsx .ppt .pptx .pub .rar .rtf .swf .t2k .tga .tif .tiff .ttf .txt .wav .wdb .wps .xls .xlsm .xlsx .xltx .xml .xsl .zip .esb .a2w .cmlb .sldprt .sldasm .sldrw .step .stp .igs .notebook  ");' href='javascript:void(0);' class='small_icon'><img src='../FWImages/icons/help.png'></a> </td> </tr> </tbody> </table> <input type='hidden' name='EvaluatieMomentID' id='EvaluatieMomentID' value='0' > <input type='hidden' name='EvaluatieMomentFWAccountID' id='EvaluatieMomentFWAccountID' value='222' > <input type='hidden' name='EvaluatieMomentPeriodeID' id='EvaluatieMomentPeriodeID' value='77' > <input type='hidden' name='EvaluatieMomentVakLinkLeerkrachtKlasID' id='EvaluatieMomentVakLinkLeerkrachtKlasID' value='591' > <input type='hidden' name='AllowPuntenBovenMaximum' id='AllowPuntenBovenMaximum' value='1' > <input type='hidden' name='AllowPuntenOnderNul' id='AllowPuntenOnderNul' value='1' > <div id='PuntenboekWrapper'> <div id='PuntenKopWrapper'> <table id='PuntenKop' class='puntenboek'> <tr> <th class='dl'>&nbsp;</th> <th class='n'>Maximum&nbsp;<a onmouseout='return nd();' onclick='return overlib("Vergeet niet om maximum van de toets in te vullen bovenaan de kolom.");' href='javascript:void(0);' class='small_icon'><img src='../FWImages/icons/help.png'></a></th> </tr> <tr class='oneven'><td class='dl'><a href='../DossierLijn/DossierLijnList.php?SessionID=bd1717af6d8382be1fa4d41d80d02eb59598ac2c&amp;&DossierLijnViewStateKlasID=70&amp;&DossierLijnViewStateLeerlingLoopbaanID=1451'><img width='16' src='../Images/folder3_violet.gif' title='dossier' alt='dossier'></a></td><td class='n'><input type='hidden' name='LeerlingLoopbaanID_1451' value='1451' />1 - <a class="popupfoto" id="201203020817005921DSC_1981_jpg.jpg" href='#'>Pieter-Jan Baert</a></td></tr><tr><td class='dl'><a href='../DossierLijn/DossierLijnList.php?SessionID=bd1717af6d8382be1fa4d41d80d02eb59598ac2c&amp;&DossierLijnViewStateKlasID=70&amp;&DossierLijnViewStateLeerlingLoopbaanID=1452'><img width='16' src='../Images/folder3_violet.gif' title='dossier' alt='dossier'></a></td><td class='n'><input type='hidden' name='LeerlingLoopbaanID_1452' value='1452' />2 - <a class="popupfoto" id="201203020824259804DSC_1967_jpg.jpg" href='#'>Aslihan Cakici</a></td></tr><tr class='oneven'><td class='dl'><a href='../DossierLijn/DossierLijnList.php?SessionID=bd1717af6d8382be1fa4d41d80d02eb59598ac2c&amp;&DossierLijnViewStateKlasID=70&amp;&DossierLijnViewStateLeerlingLoopbaanID=1453'><img width='16' src='../Images/folder3_violet.gif' title='dossier' alt='dossier'></a></td><td class='n'><input type='hidden' name='LeerlingLoopbaanID_1453' value='1453' />3 - <a class="popupfoto" id="201203020817002270DSC_1985_jpg.jpg" href='#'>Femke De Waele</a></td></tr><tr><td class='dl'><a href='../DossierLijn/DossierLijnList.php?SessionID=bd1717af6d8382be1fa4d41d80d02eb59598ac2c&amp;&DossierLijnViewStateKlasID=70&amp;&DossierLijnViewStateLeerlingLoopbaanID=1454'><img width='16' src='../Images/folder3_violet.gif' title='dossier' alt='dossier'></a></td><td class='n'><input type='hidden' name='LeerlingLoopbaanID_1454' value='1454' />4 - <a class="popupfoto" id="201203011414056285DSC_2034_jpg.jpg" href='#'>Angelika Dusza</a></td></tr><tr class='oneven'><td class='dl'><a href='../DossierLijn/DossierLijnList.php?SessionID=bd1717af6d8382be1fa4d41d80d02eb59598ac2c&amp;&DossierLijnViewStateKlasID=70&amp;&DossierLijnViewStateLeerlingLoopbaanID=1455'><img width='16' src='../Images/folder3_violet.gif' title='dossier' alt='dossier'></a></td><td class='n'><input type='hidden' name='LeerlingLoopbaanID_1455' value='1455' />5 - <a class="popupfoto" id="201203011414061570DSC_1987_jpg.jpg" href='#'>Batuhan Ergun</a></td></tr><tr><td class='dl'><a href='../DossierLijn/DossierLijnList.php?SessionID=bd1717af6d8382be1fa4d41d80d02eb59598ac2c&amp;&DossierLijnViewStateKlasID=70&amp;&DossierLijnViewStateLeerlingLoopbaanID=1456'><img width='16' src='../Images/folder3_violet.gif' title='dossier' alt='dossier'></a></td><td class='n'><input type='hidden' name='LeerlingLoopbaanID_1456' value='1456' />6 - <a class="popupfoto" id="201203011414064963DSC_2041_jpg.jpg" href='#'>Dogukan Ergun</a></td></tr><tr class='oneven'><td class='dl'><a href='../DossierLijn/DossierLijnList.php?SessionID=bd1717af6d8382be1fa4d41d80d02eb59598ac2c&amp;&DossierLijnViewStateKlasID=70&amp;&DossierLijnViewStateLeerlingLoopbaanID=1457'><img width='16' src='../Images/folder3_violet.gif' title='dossier' alt='dossier'></a></td><td class='n'><input type='hidden' name='LeerlingLoopbaanID_1457' value='1457' />7 - <a class="popupfoto" id="201203020824252436DSC_1969_jpg.jpg" href='#'>Gülben Kiran</a></td></tr><tr><td class='dl'><a href='../DossierLijn/DossierLijnList.php?SessionID=bd1717af6d8382be1fa4d41d80d02eb59598ac2c&amp;&DossierLijnViewStateKlasID=70&amp;&DossierLijnViewStateLeerlingLoopbaanID=1458'><img width='16' src='../Images/folder3_violet.gif' title='dossier' alt='dossier'></a></td><td class='n'><input type='hidden' name='LeerlingLoopbaanID_1458' value='1458' />8 - <a class="popupfoto" id="201203020824259197DSC_1971_jpg.jpg" href='#'>Emma Noerens</a></td></tr><tr class='oneven'><td class='dl'><a href='../DossierLijn/DossierLijnList.php?SessionID=bd1717af6d8382be1fa4d41d80d02eb59598ac2c&amp;&DossierLijnViewStateKlasID=70&amp;&DossierLijnViewStateLeerlingLoopbaanID=1459'><img width='16' src='../Images/folder3_violet.gif' title='dossier' alt='dossier'></a></td><td class='n'><input type='hidden' name='LeerlingLoopbaanID_1459' value='1459' />9 - <a class="popupfoto" id="201203011414063805DSC_2042_jpg.jpg" href='#'>Furkan Ozdemir</a></td></tr><tr><td class='dl'><a href='../DossierLijn/DossierLijnList.php?SessionID=bd1717af6d8382be1fa4d41d80d02eb59598ac2c&amp;&DossierLijnViewStateKlasID=70&amp;&DossierLijnViewStateLeerlingLoopbaanID=1460'><img width='16' src='../Images/folder3_violet.gif' title='dossier' alt='dossier'></a></td><td class='n'><input type='hidden' name='LeerlingLoopbaanID_1460' value='1460' />10 - <a class="popupfoto" id="201203020817014855DSC_1989_jpg.jpg" href='#'>Leyla Ozen</a></td></tr><tr class='oneven'><td class='dl'><a href='../DossierLijn/DossierLijnList.php?SessionID=bd1717af6d8382be1fa4d41d80d02eb59598ac2c&amp;&DossierLijnViewStateKlasID=70&amp;&DossierLijnViewStateLeerlingLoopbaanID=1461'><img width='16' src='../Images/folder3_violet.gif' title='dossier' alt='dossier'></a></td><td class='n'><input type='hidden' name='LeerlingLoopbaanID_1461' value='1461' />11 - <a class="popupfoto" id="201203020824267218DSC_1974_jpg.jpg" href='#'>Nando Platteau</a></td></tr><tr><td class='dl'><a href='../DossierLijn/DossierLijnList.php?SessionID=bd1717af6d8382be1fa4d41d80d02eb59598ac2c&amp;&DossierLijnViewStateKlasID=70&amp;&DossierLijnViewStateLeerlingLoopbaanID=1462'><img width='16' src='../Images/folder3_violet.gif' title='dossier' alt='dossier'></a></td><td class='n'><input type='hidden' name='LeerlingLoopbaanID_1462' value='1462' />12 - <a class="popupfoto" id="201203020824265380DSC_1975_jpg.jpg" href='#'>Dilara Sancak</a></td></tr><tr class='oneven'><td class='dl'><a href='../DossierLijn/DossierLijnList.php?SessionID=bd1717af6d8382be1fa4d41d80d02eb59598ac2c&amp;&DossierLijnViewStateKlasID=70&amp;&DossierLijnViewStateLeerlingLoopbaanID=1463'><img width='16' src='../Images/folder3_violet.gif' title='dossier' alt='dossier'></a></td><td class='n'><input type='hidden' name='LeerlingLoopbaanID_1463' value='1463' />13 - <a class="popupfoto" id="201203020824263466DSC_1976_jpg.jpg" href='#'>Chanika Smets</a></td></tr><tr><td class='dl'><a href='../DossierLijn/DossierLijnList.php?SessionID=bd1717af6d8382be1fa4d41d80d02eb59598ac2c&amp;&DossierLijnViewStateKlasID=70&amp;&DossierLijnViewStateLeerlingLoopbaanID=1464'><img width='16' src='../Images/folder3_violet.gif' title='dossier' alt='dossier'></a></td><td class='n'><input type='hidden' name='LeerlingLoopbaanID_1464' value='1464' />14 - <a class="popupfoto" id="201203020817014309DSC_1992_jpg.jpg" href='#'>Selin Teke</a></td></tr><tr class='oneven'><td class='dl'><a href='../DossierLijn/DossierLijnList.php?SessionID=bd1717af6d8382be1fa4d41d80d02eb59598ac2c&amp;&DossierLijnViewStateKlasID=70&amp;&DossierLijnViewStateLeerlingLoopbaanID=1465'><img width='16' src='../Images/folder3_violet.gif' title='dossier' alt='dossier'></a></td><td class='n'><input type='hidden' name='LeerlingLoopbaanID_1465' value='1465' />15 - <a class="popupfoto" id="201203020817014492DSC_1995_jpg.jpg" href='#'>Siebe Vanderhaeghen</a></td></tr><tr><td class='dl'><a href='../DossierLijn/DossierLijnList.php?SessionID=bd1717af6d8382be1fa4d41d80d02eb59598ac2c&amp;&DossierLijnViewStateKlasID=70&amp;&DossierLijnViewStateLeerlingLoopbaanID=1466'><img width='16' src='../Images/folder3_violet.gif' title='dossier' alt='dossier'></a></td><td class='n'><input type='hidden' name='LeerlingLoopbaanID_1466' value='1466' />16 - <a class="popupfoto" id="201203011414075869DSC_2029_jpg.jpg" href='#'>Anna Van De Vijver</a></td></tr><tr class='oneven'><td class='dl'><a href='../DossierLijn/DossierLijnList.php?SessionID=bd1717af6d8382be1fa4d41d80d02eb59598ac2c&amp;&DossierLijnViewStateKlasID=70&amp;&DossierLijnViewStateLeerlingLoopbaanID=1467'><img width='16' src='../Images/folder3_violet.gif' title='dossier' alt='dossier'></a></td><td class='n'><input type='hidden' name='LeerlingLoopbaanID_1467' value='1467' />17 - <a class="popupfoto" id="201203020817019923DSC_1996_jpg.jpg" href='#'>Wiebe Vandomme</a></td></tr><tr> <td class='dl'>&nbsp;</td> <td class='n'>Gemiddelde</td> </tr> <tr> <td class='dl'>&nbsp;</td> <td class='n'>Mediaan</td> </tr> <tr> <td class='dl'>&nbsp;</td> <td class='n'>Bestand</td> </tr> <tr><td class='dl'>&nbsp;</td> <td class='n'><h4>Acties</h4></td></tr><tr> <td class='dl'>&nbsp;</td> <td class='n'>Verwijderen</td> </tr> </table> </div> <div id='PuntenOverzichtWrapper'> <table id='PuntenOverzicht' class='puntenboek'> <tr> <th title='' class="GeenRapportPunt" alt=''><div class='r'> <div class='i'> <ul> <li><i> Omschrijving: Test TDE1 (DW)</i></li> <li><i> Datum: 2013-01-22</i></li> <li><i> Ingegeven in puntenboek van Sarah Claeys</i></li> <li>Punten op 10 worden herberekend op 30</li></ul> </div> <a href='../PuntenboekLeerkracht/PuntenboekLeerkrachtEdit.php?SessionID=bd1717af6d8382be1fa4d41d80d02eb59598ac2c&amp;EvaluatieMomentID=6241' > 22&nbsp;jan<br><img width='16' src='../_Document/EvaluatieMomentType/kennis.gif' title='Bewerken' alt='Bewerken' border='0'><br> <i>10&nbsp;&rarr;&nbsp;30</i></a> </div> </th> <th title=''  alt=''><input tabindex='105' class='inputpunten' id='EvaluatieMomentOrigineelMaximumPunten' name='EvaluatieMomentOrigineelMaximumPunten' onkeyup="processPaste($(this));" size='3' type='text' value='0' ></th> <th title=''  alt=''>commentaar bij evaluatiemoment</th> <th title='' alt=''>&nbsp;</th> <th title='dagelijks werk' alt='dagelijks werk'>DW (rapport 3)</th> <th title='' alt=''>&nbsp;</th> <th title='totaal' alt='totaal'>TOT1 Ptn (MAX)</th> <th title='totaal' alt='totaal'>TOT1 %</th> <th title='' alt=''>&nbsp;</th> <th title='totaal' alt='totaal'>TOT2 Ptn (MAX)</th> <th title='totaal' alt='totaal'>TOT2 %</th> <th title='' alt=''>&nbsp;</th> <th title='totaal' alt='totaal'>TOT Ptn (MAX)</th> <th title='totaal' alt='totaal'>TOT %</th> </tr> <tr class='oneven'><td class='' style='color: #000000; ' ><abbr title="opmerking1 opmerking2 opmerking3"><i>10</i></abbr></td> <td class='heeftInput' ><input tabindex='106'  class='EvaluatieMomentLijnInput inputpunten' name='EvaluatieMomentLijnOrigineelPunten_1451' id='EvaluatieMomentLijnOrigineelPunten_1451' value='' type='text'><a href="javascript:CopyDown('EvaluatieMomentLijnOrigineelPunten_', '1451');"><img style='width:17px' src='../FWImages/Copy_24.gif'></a></td> <td class='heeftInput' ><input tabindex='123' class='EvaluatieMomentLijnInput inputcommentaar grower' type='text' name='EvaluatieMomentLijnCommentaar_1451' id='EvaluatieMomentLijnCommentaar_1451' value='' /><a href="javascript:CopyDown('EvaluatieMomentLijnCommentaar_', '1451');"><img style='width:17px' src='../FWImages/Copy_24.gif'></a></td> <td class='' ></td> <td class='' style='font-weight: bold; color: #0000FF; ' >A</td> <td class='' ></td> <td class='' style='color: #000000; ' >255 (300)</td> <td class='' style='color: #000000; ' >85</td> <td class='' ></td> <td class='' style='font-weight: bold; color: #0000FF; ' >A</td> <td class='' style='font-weight: bold; color: #0000FF; ' >A</td> <td class='' ></td> <td class='' style='color: #000000; ' >255 (300)</td> <td class='' style='color: #000000; ' >85</td> </tr><tr><td class='' style='color: #000000; ' ><abbr title="opmerking1 opmerking2 opmerking3"><i>9</i></abbr></td> <td class='heeftInput' ><input tabindex='107'  class='EvaluatieMomentLijnInput inputpunten' name='EvaluatieMomentLijnOrigineelPunten_1452' id='EvaluatieMomentLijnOrigineelPunten_1452' value='' type='text'></td> <td class='heeftInput' ><input tabindex='124' class='EvaluatieMomentLijnInput inputcommentaar grower' type='text' name='EvaluatieMomentLijnCommentaar_1452' id='EvaluatieMomentLijnCommentaar_1452' value='' /></td> <td class='' ></td> <td class='' style='font-weight: bold; color: #0000FF; ' >A</td> <td class='' ></td> <td class='' style='font-weight: bold; color: #FF0000; ' >120 (300)</td> <td class='' style='font-weight: bold; color: #FF0000; ' >40</td> <td class='' ></td> <td class='' style='font-weight: bold; color: #0000FF; ' >A</td> <td class='' style='font-weight: bold; color: #0000FF; ' >A</td> <td class='' ></td> <td class='' style='font-weight: bold; color: #FF0000; ' >120 (300)</td> <td class='' style='font-weight: bold; color: #FF0000; ' >40</td> </tr><tr class='oneven'><td class='' style='color: #000000; ' ><abbr title="opmerking1 opmerking2 opmerking3"><i>8</i></abbr></td> <td class='heeftInput' ><input tabindex='108'  class='EvaluatieMomentLijnInput inputpunten' name='EvaluatieMomentLijnOrigineelPunten_1453' id='EvaluatieMomentLijnOrigineelPunten_1453' value='' type='text'></td> <td class='heeftInput' ><input tabindex='125' class='EvaluatieMomentLijnInput inputcommentaar grower' type='text' name='EvaluatieMomentLijnCommentaar_1453' id='EvaluatieMomentLijnCommentaar_1453' value='' /></td> <td class='' ></td> <td class='' style='font-weight: bold; color: #0000FF; ' >A</td> <td class='' ></td> <td class='' style='color: #000000; ' >225 (300)</td> <td class='' style='color: #000000; ' >75</td> <td class='' ></td> <td class='' style='font-weight: bold; color: #0000FF; ' >A</td> <td class='' style='font-weight: bold; color: #0000FF; ' >A</td> <td class='' ></td> <td class='' style='color: #000000; ' >225 (300)</td> <td class='' style='color: #000000; ' >75</td> </tr><tr><td class='' style='color: #000000; ' ><abbr title="opmerking1 opmerking2 opmerking3"><i>7</i></abbr></td> <td class='heeftInput' ><input tabindex='109'  class='EvaluatieMomentLijnInput inputpunten' name='EvaluatieMomentLijnOrigineelPunten_1454' id='EvaluatieMomentLijnOrigineelPunten_1454' value='' type='text'></td> <td class='heeftInput' ><input tabindex='126' class='EvaluatieMomentLijnInput inputcommentaar grower' type='text' name='EvaluatieMomentLijnCommentaar_1454' id='EvaluatieMomentLijnCommentaar_1454' value='' /></td> <td class='' ></td> <td class='' style='font-weight: bold; color: #0000FF; ' >A</td> <td class='' ></td> <td class='' style='color: #000000; ' >255 (300)</td> <td class='' style='color: #000000; ' >85</td> <td class='' ></td> <td class='' style='font-weight: bold; color: #0000FF; ' >A</td> <td class='' style='font-weight: bold; color: #0000FF; ' >A</td> <td class='' ></td> <td class='' style='color: #000000; ' >255 (300)</td> <td class='' style='color: #000000; ' >85</td> </tr><tr class='oneven'><td class='' style='color: #000000; ' ><abbr title="opmerking1 opmerking2 opmerking3"><i>6</i></abbr></td> <td class='heeftInput' ><input tabindex='110'  class='EvaluatieMomentLijnInput inputpunten' name='EvaluatieMomentLijnOrigineelPunten_1455' id='EvaluatieMomentLijnOrigineelPunten_1455' value='' type='text'></td> <td class='heeftInput' ><input tabindex='127' class='EvaluatieMomentLijnInput inputcommentaar grower' type='text' name='EvaluatieMomentLijnCommentaar_1455' id='EvaluatieMomentLijnCommentaar_1455' value='' /></td> <td class='' ></td> <td class='' style='font-weight: bold; color: #0000FF; ' >A</td> <td class='' ></td> <td class='' style='color: #000000; ' >165 (300)</td> <td class='' style='color: #000000; ' >55</td> <td class='' ></td> <td class='' style='font-weight: bold; color: #0000FF; ' >A</td> <td class='' style='font-weight: bold; color: #0000FF; ' >A</td> <td class='' ></td> <td class='' style='color: #000000; ' >165 (300)</td> <td class='' style='color: #000000; ' >55</td> </tr><tr><td class='' style='color: #000000; ' ><abbr title="opmerking1 opmerking2 opmerking3"><i>5</i></abbr></td> <td class='heeftInput' ><input tabindex='111'  class='EvaluatieMomentLijnInput inputpunten' name='EvaluatieMomentLijnOrigineelPunten_1456' id='EvaluatieMomentLijnOrigineelPunten_1456' value='' type='text'></td> <td class='heeftInput' ><input tabindex='128' class='EvaluatieMomentLijnInput inputcommentaar grower' type='text' name='EvaluatieMomentLijnCommentaar_1456' id='EvaluatieMomentLijnCommentaar_1456' value='' /></td> <td class='' ></td> <td class='' style='font-weight: bold; color: #0000FF; ' >A</td> <td class='' ></td> <td class='' style='color: #000000; ' >165 (300)</td> <td class='' style='color: #000000; ' >55</td> <td class='' ></td> <td class='' style='font-weight: bold; color: #0000FF; ' >A</td> <td class='' style='font-weight: bold; color: #0000FF; ' >A</td> <td class='' ></td> <td class='' style='color: #000000; ' >165 (300)</td> <td class='' style='color: #000000; ' >55</td> </tr><tr class='oneven'><td class='' style='font-weight: bold; color: #0000FF; ' ><i>A</i></td> <td class='heeftInput' ><input tabindex='112'  class='EvaluatieMomentLijnInput inputpunten' name='EvaluatieMomentLijnOrigineelPunten_1457' id='EvaluatieMomentLijnOrigineelPunten_1457' value='' type='text'></td> <td class='heeftInput' ><input tabindex='129' class='EvaluatieMomentLijnInput inputcommentaar grower' type='text' name='EvaluatieMomentLijnCommentaar_1457' id='EvaluatieMomentLijnCommentaar_1457' value='' /></td> <td class='' ></td> <td class='' style='font-weight: bold; color: #0000FF; ' >A</td> <td class='' ></td> <td class='' style='color: #000000; ' >180 (300)</td> <td class='' style='color: #000000; ' >60</td> <td class='' ></td> <td class='' style='font-weight: bold; color: #0000FF; ' >A</td> <td class='' style='font-weight: bold; color: #0000FF; ' >A</td> <td class='' ></td> <td class='' style='color: #000000; ' >180 (300)</td> <td class='' style='color: #000000; ' >60</td> </tr><tr><td class='' style='font-weight: bold; color: #0000FF; ' ><i>A</i></td> <td class='heeftInput' ><input tabindex='113'  class='EvaluatieMomentLijnInput inputpunten' name='EvaluatieMomentLijnOrigineelPunten_1458' id='EvaluatieMomentLijnOrigineelPunten_1458' value='' type='text'></td> <td class='heeftInput' ><input tabindex='130' class='EvaluatieMomentLijnInput inputcommentaar grower' type='text' name='EvaluatieMomentLijnCommentaar_1458' id='EvaluatieMomentLijnCommentaar_1458' value='' /></td> <td class='' ></td> <td class='' style='font-weight: bold; color: #0000FF; ' >A</td> <td class='' ></td> <td class='' style='color: #000000; ' >285 (300)</td> <td class='' style='color: #000000; ' >95</td> <td class='' ></td> <td class='' style='font-weight: bold; color: #0000FF; ' >A</td> <td class='' style='font-weight: bold; color: #0000FF; ' >A</td> <td class='' ></td> <td class='' style='color: #000000; ' >285 (300)</td> <td class='' style='color: #000000; ' >95</td> </tr><tr class='oneven'><td class='' style='font-weight: bold; color: #0000FF; ' ><i>A</i></td> <td class='heeftInput' ><input tabindex='114'  class='EvaluatieMomentLijnInput inputpunten' name='EvaluatieMomentLijnOrigineelPunten_1459' id='EvaluatieMomentLijnOrigineelPunten_1459' value='' type='text'></td> <td class='heeftInput' ><input tabindex='131' class='EvaluatieMomentLijnInput inputcommentaar grower' type='text' name='EvaluatieMomentLijnCommentaar_1459' id='EvaluatieMomentLijnCommentaar_1459' value='' /></td> <td class='' ></td> <td class='' style='font-weight: bold; color: #0000FF; ' >A</td> <td class='' ></td> <td class='' style='color: #000000; ' >210 (300)</td> <td class='' style='color: #000000; ' >70</td> <td class='' ></td> <td class='' style='font-weight: bold; color: #0000FF; ' >A</td> <td class='' style='font-weight: bold; color: #0000FF; ' >A</td> <td class='' ></td> <td class='' style='color: #000000; ' >210 (300)</td> <td class='' style='color: #000000; ' >70</td> </tr><tr><td class='' style='font-weight: bold; color: #0000FF; ' ><i>A</i></td> <td class='heeftInput' ><input tabindex='115'  class='EvaluatieMomentLijnInput inputpunten' name='EvaluatieMomentLijnOrigineelPunten_1460' id='EvaluatieMomentLijnOrigineelPunten_1460' value='' type='text'></td> <td class='heeftInput' ><input tabindex='132' class='EvaluatieMomentLijnInput inputcommentaar grower' type='text' name='EvaluatieMomentLijnCommentaar_1460' id='EvaluatieMomentLijnCommentaar_1460' value='' /></td> <td class='' ></td> <td class='' style='font-weight: bold; color: #0000FF; ' >A</td> <td class='' ></td> <td class='' style='color: #000000; ' >150 (300)</td> <td class='' style='color: #000000; ' >50</td> <td class='' ></td> <td class='' style='font-weight: bold; color: #0000FF; ' >A</td> <td class='' style='font-weight: bold; color: #0000FF; ' >A</td> <td class='' ></td> <td class='' style='color: #000000; ' >150 (300)</td> <td class='' style='color: #000000; ' >50</td> </tr><tr class='oneven'><td class='' style='font-weight: bold; color: #0000FF; ' ><i>A</i></td> <td class='heeftInput' ><input tabindex='116'  class='EvaluatieMomentLijnInput inputpunten' name='EvaluatieMomentLijnOrigineelPunten_1461' id='EvaluatieMomentLijnOrigineelPunten_1461' value='' type='text'></td> <td class='heeftInput' ><input tabindex='133' class='EvaluatieMomentLijnInput inputcommentaar grower' type='text' name='EvaluatieMomentLijnCommentaar_1461' id='EvaluatieMomentLijnCommentaar_1461' value='' /></td> <td class='' ></td> <td class='' style='font-weight: bold; color: #0000FF; ' >A</td> <td class='' ></td> <td class='' style='color: #000000; ' >150 (300)</td> <td class='' style='color: #000000; ' >50</td> <td class='' ></td> <td class='' style='font-weight: bold; color: #0000FF; ' >A</td> <td class='' style='font-weight: bold; color: #0000FF; ' >A</td> <td class='' ></td> <td class='' style='color: #000000; ' >150 (300)</td> <td class='' style='color: #000000; ' >50</td> </tr><tr><td class='' style='font-weight: bold; color: #0000FF; ' ><i>A</i></td> <td class='heeftInput' ><input tabindex='117'  class='EvaluatieMomentLijnInput inputpunten' name='EvaluatieMomentLijnOrigineelPunten_1462' id='EvaluatieMomentLijnOrigineelPunten_1462' value='' type='text'></td> <td class='heeftInput' ><input tabindex='134' class='EvaluatieMomentLijnInput inputcommentaar grower' type='text' name='EvaluatieMomentLijnCommentaar_1462' id='EvaluatieMomentLijnCommentaar_1462' value='' /></td> <td class='' ></td> <td class='' style='font-weight: bold; color: #0000FF; ' >A</td> <td class='' ></td> <td class='' style='font-weight: bold; color: #FF0000; ' >105 (300)</td> <td class='' style='font-weight: bold; color: #FF0000; ' >35</td> <td class='' ></td> <td class='' style='font-weight: bold; color: #0000FF; ' >A</td> <td class='' style='font-weight: bold; color: #0000FF; ' >A</td> <td class='' ></td> <td class='' style='font-weight: bold; color: #FF0000; ' >105 (300)</td> <td class='' style='font-weight: bold; color: #FF0000; ' >35</td> </tr><tr class='oneven'><td class='' style='font-weight: bold; color: #0000FF; ' ><i>A</i></td> <td class='heeftInput' ><input tabindex='118'  class='EvaluatieMomentLijnInput inputpunten' name='EvaluatieMomentLijnOrigineelPunten_1463' id='EvaluatieMomentLijnOrigineelPunten_1463' value='' type='text'></td> <td class='heeftInput' ><input tabindex='135' class='EvaluatieMomentLijnInput inputcommentaar grower' type='text' name='EvaluatieMomentLijnCommentaar_1463' id='EvaluatieMomentLijnCommentaar_1463' value='' /></td> <td class='' ></td> <td class='' style='font-weight: bold; color: #0000FF; ' >A</td> <td class='' ></td> <td class='' style='color: #000000; ' >240 (300)</td> <td class='' style='color: #000000; ' >80</td> <td class='' ></td> <td class='' style='font-weight: bold; color: #0000FF; ' >A</td> <td class='' style='font-weight: bold; color: #0000FF; ' >A</td> <td class='' ></td> <td class='' style='color: #000000; ' >240 (300)</td> <td class='' style='color: #000000; ' >80</td> </tr><tr><td class='' style='font-weight: bold; color: #0000FF; ' ><i>A</i></td> <td class='heeftInput' ><input tabindex='119'  class='EvaluatieMomentLijnInput inputpunten' name='EvaluatieMomentLijnOrigineelPunten_1464' id='EvaluatieMomentLijnOrigineelPunten_1464' value='' type='text'></td> <td class='heeftInput' ><input tabindex='136' class='EvaluatieMomentLijnInput inputcommentaar grower' type='text' name='EvaluatieMomentLijnCommentaar_1464' id='EvaluatieMomentLijnCommentaar_1464' value='' /></td> <td class='' ></td> <td class='' style='font-weight: bold; color: #0000FF; ' >A</td> <td class='' ></td> <td class='' style='color: #000000; ' >150 (300)</td> <td class='' style='color: #000000; ' >50</td> <td class='' ></td> <td class='' style='font-weight: bold; color: #0000FF; ' >A</td> <td class='' style='font-weight: bold; color: #0000FF; ' >A</td> <td class='' ></td> <td class='' style='color: #000000; ' >150 (300)</td> <td class='' style='color: #000000; ' >50</td> </tr><tr class='oneven'><td class='' style='font-weight: bold; color: #0000FF; ' ><i>A</i></td> <td class='heeftInput' ><input tabindex='120'  class='EvaluatieMomentLijnInput inputpunten' name='EvaluatieMomentLijnOrigineelPunten_1465' id='EvaluatieMomentLijnOrigineelPunten_1465' value='' type='text'></td> <td class='heeftInput' ><input tabindex='137' class='EvaluatieMomentLijnInput inputcommentaar grower' type='text' name='EvaluatieMomentLijnCommentaar_1465' id='EvaluatieMomentLijnCommentaar_1465' value='' /></td> <td class='' ></td> <td class='' style='font-weight: bold; color: #0000FF; ' >A</td> <td class='' ></td> <td class='' style='color: #000000; ' >165 (300)</td> <td class='' style='color: #000000; ' >55</td> <td class='' ></td> <td class='' style='font-weight: bold; color: #0000FF; ' >A</td> <td class='' style='font-weight: bold; color: #0000FF; ' >A</td> <td class='' ></td> <td class='' style='color: #000000; ' >165 (300)</td> <td class='' style='color: #000000; ' >55</td> </tr><tr><td class='' style='font-weight: bold; color: #0000FF; ' ><i>A</i></td> <td class='heeftInput' ><input tabindex='121'  class='EvaluatieMomentLijnInput inputpunten' name='EvaluatieMomentLijnOrigineelPunten_1466' id='EvaluatieMomentLijnOrigineelPunten_1466' value='' type='text'></td> <td class='heeftInput' ><input tabindex='138' class='EvaluatieMomentLijnInput inputcommentaar grower' type='text' name='EvaluatieMomentLijnCommentaar_1466' id='EvaluatieMomentLijnCommentaar_1466' value='' /></td> <td class='' ></td> <td class='' style='font-weight: bold; color: #0000FF; ' >A</td> <td class='' ></td> <td class='' style='color: #000000; ' >255 (300)</td> <td class='' style='color: #000000; ' >85</td> <td class='' ></td> <td class='' style='font-weight: bold; color: #0000FF; ' >A</td> <td class='' style='font-weight: bold; color: #0000FF; ' >A</td> <td class='' ></td> <td class='' style='color: #000000; ' >255 (300)</td> <td class='' style='color: #000000; ' >85</td> </tr><tr class='oneven'><td class='' style='font-weight: bold; color: #0000FF; ' ><i>A</i></td> <td class='heeftInput' ><input tabindex='122'  class='EvaluatieMomentLijnInput inputpunten' name='EvaluatieMomentLijnOrigineelPunten_1467' id='EvaluatieMomentLijnOrigineelPunten_1467' value='' type='text'></td> <td class='heeftInput' ><input tabindex='139' class='EvaluatieMomentLijnInput inputcommentaar grower' type='text' name='EvaluatieMomentLijnCommentaar_1467' id='EvaluatieMomentLijnCommentaar_1467' value='' /></td> <td class='' ></td> <td class='' style='font-weight: bold; color: #0000FF; ' >A</td> <td class='' ></td> <td class='' style='color: #000000; ' >225 (300)</td> <td class='' style='color: #000000; ' >75</td> <td class='' ></td> <td class='' style='font-weight: bold; color: #0000FF; ' >A</td> <td class='' style='font-weight: bold; color: #0000FF; ' >A</td> <td class='' ></td> <td class='' style='color: #000000; ' >225 (300)</td> <td class='' style='color: #000000; ' >75</td> </tr><tr> <td class='' style='color: #000000; ' >75</td> <td class='' ></td> <td class='' ></td> <td class='' ></td> <td class='' style='font-weight: bold; color: #0000FF; ' >A</td> <td class='' ></td> <td class='' ></td> <td class='' style='color: #000000; ' >65</td> <td class='' ></td> <td class='' ></td> <td class='' style='font-weight: bold; color: #0000FF; ' >A</td> <td class='' ></td> <td class='' ></td> <td class='' style='color: #000000; ' >65</td> </tr> <tr> <td class='' style='color: #000000; ' >75</td> <td class='' ></td> <td class='' ></td> <td class='' ></td> <td class='' style='font-weight: bold; color: #0000FF; ' >A</td> <td class='' ></td> <td class='' ></td> <td class='' style='color: #000000; ' >60</td> <td class='' ></td> <td class='' ></td> <td class='' style='font-weight: bold; color: #0000FF; ' >A</td> <td class='' ></td> <td class='' ></td> <td class='' style='color: #000000; ' >60</td> </tr> <tr> <td class='' ></td> <td class='' ></td> <td class='' ></td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> </tr> <tr> <td colspan='100'>&nbsp;</td> </tr> <tr> <td class='' ><a href='../PuntenboekLeerkracht/PuntenboekLeerkrachtVerwijderenEvaluatieMoment.php?SessionID=bd1717af6d8382be1fa4d41d80d02eb59598ac2c&PeriodeID=77&VakLinkLeerkrachtKlasID=591&EvaluatieMomentID=6241' class='VerwijderItem'><img width='16' src='../FWImages/Delete_24.gif' title='verwijderen' alt='verwijderen'></a></td> <td class='' ></td> <td class='' ></td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> </tr> </table> </div> </div></div></div>
							<script type='text/javascript'>
							$(function() {
								$('.validate').keyup(function() {
									var MaxLength = $(this).attr('rel').substr(9);
									// console.log(MaxLength);
									if($(this).val().length > MaxLength)
									{
										$(this).addClass('error');
										if($(this).siblings('a').length == 0)
										{
											$(this).after($('<a class="lengthWarning" onmouseout="return nd();" onclick="return overlib(\'Maximum '+MaxLength+' karakters, door de beperkingen van de rapport layout.\');" href="javascript:void(0);" class="small_icon"><img src="../FWImages/icons/error.png" /></a>'));
										}
										fixRowHeights();
									}
									else
									{
										$(this).removeClass('error');
										$(this).siblings('.lengthWarning').remove();
										fixRowHeights();
									}
								});
								
								$('.inputcommentaar').blur(function() {
									if ($(this).val() != '')
									{
										if (($('#EvaluatieMomentLijnOrigineelPunten_'+$(this).attr('id').substring(30)).length > 0) && ($('#EvaluatieMomentLijnOrigineelPunten_'+$(this).attr('id').substring(30)).val() == '') && ($('#EvaluatieMomentLijnQuotatie_'+$(this).attr('id').substring(30)).length == 0))
										{
											$(this).css({'background-color' : '#FFC9B5'}).fadeIn(1000);
											$('#CommentWarning').show();
										}
										else if (($('#EvaluatieMomentLijnQuotatie_'+$(this).attr('id').substring(30)).length > 0) && ($('#EvaluatieMomentLijnQuotatie_'+$(this).attr('id').substring(30)).val() == 0) && ($('#EvaluatieMomentLijnOrigineelPunten_'+$(this).attr('id').substring(30)).length == 0))
										{
											$(this).css({'background-color' : '#FFC9B5'}).fadeIn(1000);
											$('#CommentWarning').show();
										}
										else if (
													($('#EvaluatieMomentLijnOrigineelPunten_'+$(this).attr('id').substring(30)).length > 0)
													&& 
													($('#EvaluatieMomentLijnQuotatie_'+$(this).attr('id').substring(30)).length > 0)
													&&
													($('#EvaluatieMomentLijnOrigineelPunten_'+$(this).attr('id').substring(30)).val() == '')
													&& 
													($('#EvaluatieMomentLijnQuotatie_'+$(this).attr('id').substring(30)).val() == 0)
												)
										{
											$(this).css({'background-color' : '#FFC9B5'}).fadeIn(1000);
											$('#CommentWarning').show();
										}
										else
										{
											$(this).css({'background-color' : '#FFFFFF'}).fadeIn(1000);
										}
									}
								});

								$('.inputpunten').blur(function() {
										$('#EvaluatieMomentLijnCommentaar_'+$(this).attr('id').substring(35)).blur();
								});
								

								$('.inputquotatie').change(function() {
										$('#EvaluatieMomentLijnCommentaar_'+$(this).attr('id').substring(28)).blur()
								});
								
							});
							</script>
					   		<div class="infobox rounded">
		<ul class="navbar">
			<li><a href="#" onclick='document.PuntenboekLeerkrachtEdit.submit();' id="SaveButton2"><img src="../FWImages/Save.gif" title="Bewaren" alt="Bewaren" tabindex='8'/><span>Bewaren</span></a></li>
		</ul>
		</div>

		</div> <!-- end content -->

		</form>

<div id='RapportCommentaarLeerlingDialog'><div id='RapportCommentaarLeerlingDialogFrame'></div></div>
<div id='VerplaatsPopup' title='Verplaats evaluatiemoment'><form><ul class='formTabel smal'><input type='hidden' id='VerplaatsEvaluatieMomentID' name='VerplaatsEvaluatieMomentID' value='' /><li><label for='EvaluatieMomentToVakLinkLeerkrachtKlasID'>vak</label><select name='EvaluatieMomentToVakLinkLeerkrachtKlasID' id='EvaluatieMomentToVakLinkLeerkrachtKlasID'><option  value='603'>5LB - Lezen (Standaard)</option><option  value='598'>5LB - Luisteren (Standaard)</option><option  value='599'>5LB - Spreken (Standaard)</option><option  value='601'>5LB - Spellen (Standaard)</option><option  value='600'>5LB - Stellen (Standaard)</option><option  value='602'>5LB - Taalbeschouwing (Standaard)</option><option  value='594'>5LB - Getallen (Standaard)</option><option  value='595'>5LB - Bewerkingen (Standaard)</option><option  value='596'>5LB - Metend rekenen (Standaard)</option><option  value='597'>5LB - Meetkunde (Standaard)</option><option  value='592'>5LB - Wero (Standaard)</option><option selected="selected" value='591'>5LB - Godsdienst (Standaard)</option><option  value='590'>5LB - Frans (Standaard)</option><option  value='593'>5LB - Schrift (Standaard)</option></select></li><li class='oneven'><label for='EvaluatieMomentToPeriodeID'>periode</label><select name='EvaluatieMomentToPeriodeID' id='EvaluatieMomentToPeriodeID'><option  value='74'>rapport 1</option><option  value='80'>rapport 1Lbis</option><option  value='75'>rapport 2</option><option selected="selected" value='77'>rapport 3 (*)</option><option  value='81'>synthese 1</option><option  value='76'>rapport 4</option><option  value='78'>rapport 5</option><option  value='79'>rapport 6</option><option  value='82'>synthese 2</option><option  value='83'>jaarrapport</option></select></li></ul></form></div>
<script type='text/javascript'>
	var ArrayPeriodesPerVVLK = new Array();ArrayPeriodesPerVVLK[603] = new Array();;
ArrayPeriodesPerVVLK[603][74] = 'rapport 1 (Standaard)';
ArrayPeriodesPerVVLK[603][80] = 'rapport 1Lbis (Standaard)';
ArrayPeriodesPerVVLK[603][75] = 'rapport 2 (Standaard)';
ArrayPeriodesPerVVLK[603][77] = 'rapport 3 (Standaard)';
ArrayPeriodesPerVVLK[603][81] = 'synthese 1 (Standaard)';
ArrayPeriodesPerVVLK[603][76] = 'rapport 4 (Standaard)';
ArrayPeriodesPerVVLK[603][78] = 'rapport 5 (Standaard)';
ArrayPeriodesPerVVLK[603][79] = 'rapport 6 (Standaard)';
ArrayPeriodesPerVVLK[603][82] = 'synthese 2 (Standaard)';
ArrayPeriodesPerVVLK[603][83] = 'jaarrapport (Standaard)';
ArrayPeriodesPerVVLK[598] = new Array();;
ArrayPeriodesPerVVLK[598][74] = 'rapport 1 (Standaard)';
ArrayPeriodesPerVVLK[598][80] = 'rapport 1Lbis (Standaard)';
ArrayPeriodesPerVVLK[598][75] = 'rapport 2 (Standaard)';
ArrayPeriodesPerVVLK[598][77] = 'rapport 3 (Standaard)';
ArrayPeriodesPerVVLK[598][81] = 'synthese 1 (Standaard)';
ArrayPeriodesPerVVLK[598][76] = 'rapport 4 (Standaard)';
ArrayPeriodesPerVVLK[598][78] = 'rapport 5 (Standaard)';
ArrayPeriodesPerVVLK[598][79] = 'rapport 6 (Standaard)';
ArrayPeriodesPerVVLK[598][82] = 'synthese 2 (Standaard)';
ArrayPeriodesPerVVLK[598][83] = 'jaarrapport (Standaard)';
ArrayPeriodesPerVVLK[599] = new Array();;
ArrayPeriodesPerVVLK[599][74] = 'rapport 1 (Standaard)';
ArrayPeriodesPerVVLK[599][80] = 'rapport 1Lbis (Standaard)';
ArrayPeriodesPerVVLK[599][75] = 'rapport 2 (Standaard)';
ArrayPeriodesPerVVLK[599][77] = 'rapport 3 (Standaard)';
ArrayPeriodesPerVVLK[599][81] = 'synthese 1 (Standaard)';
ArrayPeriodesPerVVLK[599][76] = 'rapport 4 (Standaard)';
ArrayPeriodesPerVVLK[599][78] = 'rapport 5 (Standaard)';
ArrayPeriodesPerVVLK[599][79] = 'rapport 6 (Standaard)';
ArrayPeriodesPerVVLK[599][82] = 'synthese 2 (Standaard)';
ArrayPeriodesPerVVLK[599][83] = 'jaarrapport (Standaard)';
ArrayPeriodesPerVVLK[601] = new Array();;
ArrayPeriodesPerVVLK[601][74] = 'rapport 1 (Standaard)';
ArrayPeriodesPerVVLK[601][80] = 'rapport 1Lbis (Standaard)';
ArrayPeriodesPerVVLK[601][75] = 'rapport 2 (Standaard)';
ArrayPeriodesPerVVLK[601][77] = 'rapport 3 (Standaard)';
ArrayPeriodesPerVVLK[601][81] = 'synthese 1 (Standaard)';
ArrayPeriodesPerVVLK[601][76] = 'rapport 4 (Standaard)';
ArrayPeriodesPerVVLK[601][78] = 'rapport 5 (Standaard)';
ArrayPeriodesPerVVLK[601][79] = 'rapport 6 (Standaard)';
ArrayPeriodesPerVVLK[601][82] = 'synthese 2 (Standaard)';
ArrayPeriodesPerVVLK[601][83] = 'jaarrapport (Standaard)';
ArrayPeriodesPerVVLK[600] = new Array();;
ArrayPeriodesPerVVLK[600][74] = 'rapport 1 (Standaard)';
ArrayPeriodesPerVVLK[600][80] = 'rapport 1Lbis (Standaard)';
ArrayPeriodesPerVVLK[600][75] = 'rapport 2 (Standaard)';
ArrayPeriodesPerVVLK[600][77] = 'rapport 3 (Standaard)';
ArrayPeriodesPerVVLK[600][81] = 'synthese 1 (Standaard)';
ArrayPeriodesPerVVLK[600][76] = 'rapport 4 (Standaard)';
ArrayPeriodesPerVVLK[600][78] = 'rapport 5 (Standaard)';
ArrayPeriodesPerVVLK[600][79] = 'rapport 6 (Standaard)';
ArrayPeriodesPerVVLK[600][82] = 'synthese 2 (Standaard)';
ArrayPeriodesPerVVLK[600][83] = 'jaarrapport (Standaard)';
ArrayPeriodesPerVVLK[602] = new Array();;
ArrayPeriodesPerVVLK[602][74] = 'rapport 1 (Standaard)';
ArrayPeriodesPerVVLK[602][80] = 'rapport 1Lbis (Standaard)';
ArrayPeriodesPerVVLK[602][75] = 'rapport 2 (Standaard)';
ArrayPeriodesPerVVLK[602][77] = 'rapport 3 (Standaard)';
ArrayPeriodesPerVVLK[602][81] = 'synthese 1 (Standaard)';
ArrayPeriodesPerVVLK[602][76] = 'rapport 4 (Standaard)';
ArrayPeriodesPerVVLK[602][78] = 'rapport 5 (Standaard)';
ArrayPeriodesPerVVLK[602][79] = 'rapport 6 (Standaard)';
ArrayPeriodesPerVVLK[602][82] = 'synthese 2 (Standaard)';
ArrayPeriodesPerVVLK[602][83] = 'jaarrapport (Standaard)';
ArrayPeriodesPerVVLK[594] = new Array();;
ArrayPeriodesPerVVLK[594][74] = 'rapport 1 (Standaard)';
ArrayPeriodesPerVVLK[594][80] = 'rapport 1Lbis (Standaard)';
ArrayPeriodesPerVVLK[594][75] = 'rapport 2 (Standaard)';
ArrayPeriodesPerVVLK[594][77] = 'rapport 3 (Standaard)';
ArrayPeriodesPerVVLK[594][81] = 'synthese 1 (Standaard)';
ArrayPeriodesPerVVLK[594][76] = 'rapport 4 (Standaard)';
ArrayPeriodesPerVVLK[594][78] = 'rapport 5 (Standaard)';
ArrayPeriodesPerVVLK[594][79] = 'rapport 6 (Standaard)';
ArrayPeriodesPerVVLK[594][82] = 'synthese 2 (Standaard)';
ArrayPeriodesPerVVLK[594][83] = 'jaarrapport (Standaard)';
ArrayPeriodesPerVVLK[595] = new Array();;
ArrayPeriodesPerVVLK[595][74] = 'rapport 1 (Standaard)';
ArrayPeriodesPerVVLK[595][80] = 'rapport 1Lbis (Standaard)';
ArrayPeriodesPerVVLK[595][75] = 'rapport 2 (Standaard)';
ArrayPeriodesPerVVLK[595][77] = 'rapport 3 (Standaard)';
ArrayPeriodesPerVVLK[595][81] = 'synthese 1 (Standaard)';
ArrayPeriodesPerVVLK[595][76] = 'rapport 4 (Standaard)';
ArrayPeriodesPerVVLK[595][78] = 'rapport 5 (Standaard)';
ArrayPeriodesPerVVLK[595][79] = 'rapport 6 (Standaard)';
ArrayPeriodesPerVVLK[595][82] = 'synthese 2 (Standaard)';
ArrayPeriodesPerVVLK[595][83] = 'jaarrapport (Standaard)';
ArrayPeriodesPerVVLK[596] = new Array();;
ArrayPeriodesPerVVLK[596][74] = 'rapport 1 (Standaard)';
ArrayPeriodesPerVVLK[596][80] = 'rapport 1Lbis (Standaard)';
ArrayPeriodesPerVVLK[596][75] = 'rapport 2 (Standaard)';
ArrayPeriodesPerVVLK[596][77] = 'rapport 3 (Standaard)';
ArrayPeriodesPerVVLK[596][81] = 'synthese 1 (Standaard)';
ArrayPeriodesPerVVLK[596][76] = 'rapport 4 (Standaard)';
ArrayPeriodesPerVVLK[596][78] = 'rapport 5 (Standaard)';
ArrayPeriodesPerVVLK[596][79] = 'rapport 6 (Standaard)';
ArrayPeriodesPerVVLK[596][82] = 'synthese 2 (Standaard)';
ArrayPeriodesPerVVLK[596][83] = 'jaarrapport (Standaard)';
ArrayPeriodesPerVVLK[597] = new Array();;
ArrayPeriodesPerVVLK[597][74] = 'rapport 1 (Standaard)';
ArrayPeriodesPerVVLK[597][80] = 'rapport 1Lbis (Standaard)';
ArrayPeriodesPerVVLK[597][75] = 'rapport 2 (Standaard)';
ArrayPeriodesPerVVLK[597][77] = 'rapport 3 (Standaard)';
ArrayPeriodesPerVVLK[597][81] = 'synthese 1 (Standaard)';
ArrayPeriodesPerVVLK[597][76] = 'rapport 4 (Standaard)';
ArrayPeriodesPerVVLK[597][78] = 'rapport 5 (Standaard)';
ArrayPeriodesPerVVLK[597][79] = 'rapport 6 (Standaard)';
ArrayPeriodesPerVVLK[597][82] = 'synthese 2 (Standaard)';
ArrayPeriodesPerVVLK[597][83] = 'jaarrapport (Standaard)';
ArrayPeriodesPerVVLK[592] = new Array();;
ArrayPeriodesPerVVLK[592][74] = 'rapport 1 (Standaard)';
ArrayPeriodesPerVVLK[592][80] = 'rapport 1Lbis (Standaard)';
ArrayPeriodesPerVVLK[592][75] = 'rapport 2 (Standaard)';
ArrayPeriodesPerVVLK[592][77] = 'rapport 3 (Standaard)';
ArrayPeriodesPerVVLK[592][81] = 'synthese 1 (Standaard)';
ArrayPeriodesPerVVLK[592][76] = 'rapport 4 (Standaard)';
ArrayPeriodesPerVVLK[592][78] = 'rapport 5 (Standaard)';
ArrayPeriodesPerVVLK[592][79] = 'rapport 6 (Standaard)';
ArrayPeriodesPerVVLK[592][82] = 'synthese 2 (Standaard)';
ArrayPeriodesPerVVLK[592][83] = 'jaarrapport (Standaard)';
ArrayPeriodesPerVVLK[591] = new Array();;
ArrayPeriodesPerVVLK[591][74] = 'rapport 1 (Standaard)';
ArrayPeriodesPerVVLK[591][80] = 'rapport 1Lbis (Standaard)';
ArrayPeriodesPerVVLK[591][75] = 'rapport 2 (Standaard)';
ArrayPeriodesPerVVLK[591][77] = 'rapport 3 (Standaard)';
ArrayPeriodesPerVVLK[591][81] = 'synthese 1 (Standaard)';
ArrayPeriodesPerVVLK[591][76] = 'rapport 4 (Standaard)';
ArrayPeriodesPerVVLK[591][78] = 'rapport 5 (Standaard)';
ArrayPeriodesPerVVLK[591][79] = 'rapport 6 (Standaard)';
ArrayPeriodesPerVVLK[591][82] = 'synthese 2 (Standaard)';
ArrayPeriodesPerVVLK[591][83] = 'jaarrapport (Standaard)';
ArrayPeriodesPerVVLK[590] = new Array();;
ArrayPeriodesPerVVLK[590][74] = 'rapport 1 (Standaard)';
ArrayPeriodesPerVVLK[590][80] = 'rapport 1Lbis (Standaard)';
ArrayPeriodesPerVVLK[590][75] = 'rapport 2 (Standaard)';
ArrayPeriodesPerVVLK[590][77] = 'rapport 3 (Standaard)';
ArrayPeriodesPerVVLK[590][81] = 'synthese 1 (Standaard)';
ArrayPeriodesPerVVLK[590][76] = 'rapport 4 (Standaard)';
ArrayPeriodesPerVVLK[590][78] = 'rapport 5 (Standaard)';
ArrayPeriodesPerVVLK[590][79] = 'rapport 6 (Standaard)';
ArrayPeriodesPerVVLK[590][82] = 'synthese 2 (Standaard)';
ArrayPeriodesPerVVLK[590][83] = 'jaarrapport (Standaard)';
ArrayPeriodesPerVVLK[593] = new Array();;
ArrayPeriodesPerVVLK[593][74] = 'rapport 1 (Standaard)';
ArrayPeriodesPerVVLK[593][80] = 'rapport 1Lbis (Standaard)';
ArrayPeriodesPerVVLK[593][75] = 'rapport 2 (Standaard)';
ArrayPeriodesPerVVLK[593][77] = 'rapport 3 (Standaard)';
ArrayPeriodesPerVVLK[593][81] = 'synthese 1 (Standaard)';
ArrayPeriodesPerVVLK[593][76] = 'rapport 4 (Standaard)';
ArrayPeriodesPerVVLK[593][78] = 'rapport 5 (Standaard)';
ArrayPeriodesPerVVLK[593][79] = 'rapport 6 (Standaard)';
ArrayPeriodesPerVVLK[593][82] = 'synthese 2 (Standaard)';
ArrayPeriodesPerVVLK[593][83] = 'jaarrapport (Standaard)';
</script>
<div id='CommentaarPopup' style='display:none'><form><ul class='formTabel smal'><li><label for='ToVakLinkLeerkrachtKlasID'>vak</label><input type='hidden' id='FromVakLinkLeerkrachtKlasID' name='FromVakLinkLeerkrachtKlasID' value='591' /><select name='ToVakLinkLeerkrachtKlasID' id='ToVakLinkLeerkrachtKlasID'><option  value='603'>5LB - Lezen</option><option  value='598'>5LB - Luisteren</option><option  value='599'>5LB - Spreken</option><option  value='601'>5LB - Spellen</option><option  value='600'>5LB - Stellen</option><option  value='602'>5LB - Taalbeschouwing</option><option  value='594'>5LB - Getallen</option><option  value='595'>5LB - Bewerkingen</option><option  value='596'>5LB - Metend rekenen</option><option  value='597'>5LB - Meetkunde</option><option  value='592'>5LB - Wero</option><option selected="selected" value='591'>5LB - Godsdienst</option><option  value='590'>5LB - Frans</option><option  value='593'>5LB - Schrift</option></select></li><li class='oneven'><label for='ToPeriodeID'>periode</label><input type='hidden' id='FromPeriodeID' name='FromPeriodeID' value='77' /><select name='ToPeriodeID' id='ToPeriodeID'><option  value='74'>rapport 1</option><option  value='80'>rapport 1Lbis</option><option  value='75'>rapport 2</option><option selected="selected" value='77'>rapport 3 (*)</option><option  value='76'>rapport 4</option><option  value='78'>rapport 5</option><option  value='79'>rapport 6</option><option  value='82'>synthese 2</option><option  value='83'>jaarrapport</option></select></li></ul></form></div>
	</div> <!-- end content_wrap -->
	</div> <!-- end wrapper -->

</div> <!-- end container -->

<script type="text/javascript">
	  var _gaq = _gaq || [];
	  _gaq.push(["_setAccount", "UA-17925767-1"]);
	  _gaq.push(["_setDomainName", ".schoolonline.be"]);
	  _gaq.push(["_setSiteSpeedSampleRate", 10]);
	  _gaq.push(["_setCustomVar", 1, "TypeAccount", "Leerkracht", 3]);
	  _gaq.push(["_trackPageview"]);
	  (function() {
			var ga = document.createElement("script"); ga.type = "text/javascript"; ga.async = true;
			ga.src = ("https:" == document.location.protocol ? "https://ssl" : "http://www") + ".google-analytics.com/ga.js";
			var s = document.getElementsByTagName("script")[0]; s.parentNode.insertBefore(ga, s);
	  })();
</script>

<div id="movieBox"><h2></h2><a href="#" id="closeMovieBox">Sluit</a><form class="feedbackform"><h4>Was deze informatie relevant?</h4><p id='MovieURLWrapper'>URL:&nbsp;<input type='text' readonly='readonly' id='MovieURL' value='' name='MovieURL' /></p><p><input type="radio" id="FAQSurveyIsRelevant" name="FAQSurveyIsRelevant" value="1" checked="checked" class="radiobutton" /> Ja / <input type="radio" id="FAQSurveyIsRelevant" name="FAQSurveyIsRelevant" value="0" class="radiobutton" /> Nee</p><p><textarea name="FAQSurveyName" id="FAQSurveyName">Waarom niet?</textarea></p><p><input type="hidden" name="FAQSurveySOLFAQID" id="FAQSurveySOLFAQID" value="0"/></p><p><input type="submit" name="submit" value="Verstuur" id="submitFeedback" /></p></form></div></body>
</html>
