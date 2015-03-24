var InputGewijzigd = false;

$(function() {
	
	$('.ActiesLijst input:checkbox').live('change', function() {
		$('input[id$="IsGerichtAanIedereenVanCursus"]').attr('checked', false);
	});
	
	// multiselect toggle
	$('body').click(function(e) {
		$('.MSField div').hide();
		$('.MSToggle').addClass('MSClosed').removeClass('MSOpen');
	});
	$('.MultiSelectSelect').click(function(e) {
		e.stopPropagation();
	});
	$('.MSToggle').click(function(e) {
		e.preventDefault();
		e.stopPropagation();
		
		if($(this).hasClass('MSClosed'))
		{
			// eerst alles resetten
			$('.MSField div').hide();
			$('.MSToggle').addClass('MSClosed').removeClass('MSOpen');
			
			$(this).addClass('MSOpen').removeClass('MSClosed');
			$(this).next().show();
		}
		else
		{
			$(this).addClass('MSClosed').removeClass('MSOpen');
			$(this).next().hide();
		}
	});
	
	// javascript voor filmpjes
	$('#SOLFAQPopupLink').click(function(event) {
		event.preventDefault();
		$('#SOLFAQPopup').toggle();
	});
	
	$('.requestMovie').click(function() {
		var SOLFAQID = $(this).attr('name');
		var url = $(this).attr('href');
		var title = $(this).text();
		$('#FAQSurveyName').hide();
		$('#FAQSurveyName').text('Waarom niet?');
		$('#FAQSurveyIsRelevant').attr('value', '1');
		$('#FAQSurveySOLFAQID').attr('value', SOLFAQID);
		var DelLink = '../FWSupport/FWSupportSOLFAQGeklikt.php?SessionID='+SessionID+'&SOLFAQID=' + SOLFAQID;
		ToonFilmpje(url, title); 
		$.ajax({
			url: DelLink,
			type: "GET"
		});
		return false;
	});
	$('#closeMovieBox').click(function() {
		$('#flowPlayer').remove();
		$('#movieBox').fadeOut('slow');
		return false;
	});
	
	$('.radiobutton').click(function() {
		if ($(this).attr('value') == '1') {
			$('#FAQSurveyName').hide();
		} else {
			$('#FAQSurveyName').show();
		}
	});
	
	$('#submitFeedback').click(function() {
		
		var dataFeedback = $(this).parents('form').serialize();
		//alert(dataFeedback);
		
		$.ajax({
			url: '../FWSupport/FWSupportFAQSurveySave.php?SessionID='+SessionID,
			type: "POST",
			data: {feedback: dataFeedback},
			success: function(returnData) {
				alert('Uw bericht werd verstuurd!');
				$('#flowPlayer').remove();
				$('#movieBox').fadeOut('slow');
			}
		});
		
		return false;
	});
	
	// tabs op twee rijen oplossen
	PositionInfoboxTabs();
	$(window).resize(PositionInfoboxTabs);
	
	// Blauwe pijl gelinkte tabellen
	$('.ToonActies').live('click', function() {
		if ($(this).hasClass('Asynchronous'))
		{
			// openklappen
			var src = $(this).children('img').attr('src');
			if(src == "../FWImages/Closed.gif") {
				$(this).children('img').attr('src', '../FWImages/Opened.gif')
			} else {
				$(this).children('img').attr('src', '../FWImages/Closed.gif')
			}
			$(this).parent().parent().children('ul').toggle();
			// checkboxmenu ophalen via ajax
			var child = $(this).parent().parent().parent();
			var ahref = $(this);
			
			var objData = {};
			objData = GetURLParametersObject(window.location);
			objData.TableNameOfTheLink = $(this).attr('rel');
			objData.ID = RequestID;
			objData.IsCopy = RequestIsCopy;
			
			$.ajax({
				url: '../'+Table+'/'+Table+'GetAjaxCheckboxMenu.php?SessionID='+SessionID,
				type: "POST",
				data: objData,
				success: function(returnData) {
					//console.log(returnData);
					child.replaceWith(returnData);
					initFotoPopup();
				}
			});
		}
		else
		{
			var src = $(this).children('img').attr('src');
			if(src == "../FWImages/Closed.gif") {
				$(this).children('img').attr('src', '../FWImages/Opened.gif')
				$(this).parent().children('u').show();
			} else {
				$(this).children('img').attr('src', '../FWImages/Closed.gif')
				$(this).parent().children('u').hide();
			}
			$(this).parent().parent().children('ul').toggle();
			// $(this).parent().parent().parent().children('ul').toggle();
		}
		return false;
	});
	
	$('.ActiesLijst').each(function() {
		if($(this).siblings('span').find('img').attr('src') == "../FWImages/Opened.gif")
		{
			$(this).show();
		}
	});
	
	// Balloon pop up delay voor top_nav en navbar om navigatie verwarring te voorkomen.
	var timeout = "";
	$('#top_nav a, .navbar a').hover(
		function() {
			var aObj = $(this);
			timeout = setTimeout(
				function() {
					aObj.find('span').show();
				}, 
				300
			);
			
		},
		function() {
			clearTimeout(timeout);
			$(this).find('span').hide();
		}
	);

	// pop up voor filmpjes op support site
	$('#PopUpFAQMovies').click(function(event) {
		event.preventDefault();
		$.get(
			'../FWFetchFAQ/FWFetchFAQAjaxList.php?SessionID='+SessionID,
			{},
			function(returnHTML) {
				$('body').prepend(returnHTML);
			},
			'html'
		);
	});
	$('#closeMovieBox').live('click', function() {
		$('#flowPlayer').remove();
		$('#movieBox').fadeOut('slow');
		return false;
	});
	$('.requestMovie').live('click', function() {
		var SOLFAQID = $(this).attr('name');
		var url = $(this).attr('href');
		var title = $(this).children('h2').text();
		$('#FAQSurveyName').hide();
		$('#FAQSurveyName').text('Waarom niet?');
		$('#FAQSurveyIsRelevant').attr('value', '1');
		$('#FAQSurveySOLFAQID').attr('value', SOLFAQID);
		ToonFilmpje(url, title); 
		return false;
	});
	$('.radiobutton').live('click', function() {
		if ($(this).attr('value') == '1') {
			$('#FAQSurveyName').hide();
		} else {
			$('#FAQSurveyName').show();
		}
	});
	
	// mededelingen hover
	$('.GerichtAan').hover(
		function() {
			$(this).find('.GerichtAanFull').show();
		},
		function() {
			$(this).find('.GerichtAanFull').hide();
		}
	);
	
	// default voor datepicker instellen 
	$.datepicker.setDefaults({
		dateFormat: 'yy-mm-dd'
	});
	
	// popup voor melding "gegevens gewijzigd"
	$('#CancelButton, #LogOutButton1, #DeleteAll, #DeleteAllPermanent, #ButtonNext, #ButtonPrevious, .InfoboxTabs a, #BreadCrumb a').click(function() {

		var ID = $(this).attr('id');
		var showDialog = false;
		
		switch(ID)
		{
			case 'LogOutButton1':
				showDialog = true;
				if(InputGewijzigd && ShowConfirmAfterChange)
				{
					var warningString = 'Deze gegevens zijn gewijzigd. Bent u zeker dat u wilt uitloggen?';
				}
				else
				{
					var warningString = 'Bent u zeker dat u wilt uitloggen?';
				}
				if (IsLoggedInThroughGoogle && false)	//werkt niet door bug in Google API => dus ook ni tonen
				{
					warningString += '<br/><br/><input type="checkbox" name="AlsoGoogleLogOut" id="AlsoGoogleLogOut">&nbsp;Ook uitloggen bij Google Apps.'
				}
				
			break;
			case 'DeleteAll':
				var aantal = $(this).attr('rel');
				showDialog = true;
				var warningString = 'Bent u zeker dat u '+aantal+' lijnen naar de prullenbak wilt verplaatsen?<br><br><span class=\"ui-icon ui-icon-alert\" style=\"margin:0 7px 0 0; float: left\"></span>Dit wordt uitgevoerd voor alle gebruikers.';
			break;
			case 'DeleteAllPermanent':
				var aantal = $(this).attr('rel');
				showDialog = true;
				var warningString = 'Bent u zeker dat u '+aantal+' lijnen permanent wilt verwijderen?<br><br><span class=\"ui-icon ui-icon-alert\" style=\"margin:0 7px 0 0; float: left\"></span>Dit wordt uitgevoerd voor alle gebruikers.<br><br><strong>Deze actie kan niet ongedaan gemaakt worden</strong>';
			break;
			case 'CancelButton':
			default:
				if(InputGewijzigd && ShowConfirmAfterChange)
				{
					var warningString = 'Deze gegevens zijn gewijzigd. Bij het verlaten van deze pagina worden de gegevens niet opgeslagen. Bent u zeker?';
					showDialog = true;
				}
			break;
		}
		
		if(showDialog)
		{
			var href = $(this).attr('href');
			ShowConfirmDialog(href, warningString);
			return false;
		}
	});
	
	// Scrollable tabellen opvangen
	$('.table_solid_collapse.scrollable tbody').height($(window).height() - 340);
	
	// popups voor het autocomplete veld opvangen
	$('.AutocompletePopup').dialog({
		autoOpen: false,
		modal: true,
		height: 500,
		maxHeight: 500,
		width: 950,
		resizable: false,
		draggable: false,
		buttons: {
			"Sluit": function() {
				$(this).dialog('close');
			}
		}
	});
	
	// // oude werking
	// $('.OpenAutocompletePopup').click(function(event) {
		// event.preventDefault();
		// var DialogID = '#PopupFor'+$(this).attr('id').substr(12);
		// $(DialogID).dialog('open');
	// });
	
	$('.OpenAutocompletePopup').click(function(event) {
		event.preventDefault();
		
		var AutoCompleteName = $(this).attr('id').substr(12);
		var DialogID = '#PopupFor'+AutoCompleteName;
		var split = AutoCompleteName.split('_');
		var RechtNiveauID = split[1] || 0;
		var ItemID = $('#'+Table+'ID').val();
		var LoadingImg = $(this).parent().siblings('.LoadingLinkedRecords');
		
		LoadingImg.show();
		
		$.ajax({
			url: '../'+Table+'/'+Table+'GetLinkedRecords.php?SessionID='+SessionID+'&'+Table+'ID='+ItemID+'&RechtNiveauID='+RechtNiveauID,
			data: {'ArrayData': ArrayData[AutoCompleteName]},
			success: function(json) {
				// console.log(json);
				$(DialogID).html(json).dialog('open');
				LoadingImg.hide();
				
				$('.AutocompletePopup input:checkbox').attr('checked', false);
				$.each($('#'+AutoCompleteName).tokenInput("get"), function(key, value) {
					$('#'+value.id).attr('checked', true);
				});
				
			}
		});
		
	});
	
	$('.AutocompletePopup .CheckboxListInput').live('click', function() {
		
		
		var inputField = '#'+$(this).closest('div').attr('id').substr(8);
	
		var varID = $(this).attr('id');
		var varName = $(this).siblings('label').text();
		if($(this).attr('checked'))
		{
			// console.log("'"+inputField+"'");
			// console.log("'"+id+"'");
			// console.log("'"+name+"'");
			// link toevoegen
			$(inputField).tokenInput("add", {id: varID, name: varName});
		}
		else
		{
			// link verwijderen
			$(inputField).tokenInput("remove", {id: varID});
		}
		
	});
	
	$.fn.serializeObject = function()
	{
		var o = {};
		var a = this.serializeArray();
		$.each(a, function() {
			if (o[this.name] !== undefined) {
				if (!o[this.name].push) {
					o[this.name] = [o[this.name]];
				}
				o[this.name].push(this.value || '');
			} else {
				o[this.name] = this.value || '';
			}
		});
		return o;
	};

});

function initFotoPopup()
{
	$('.popupfoto').tooltip({ 
		delay: 400,  
		showURL: false, 
		bodyHandler: function() {  
			return $("<img/>").attr("src", '../_Document/Foto/' + this.id);  
		} 
	});
}

function GetURLParametersObject(href)
{
	href = String(href);
	var unsplitParameters = href.substr(href.indexOf('?')+1).split('&');
    var params = {};
	for(var i = 0; i < unsplitParameters.length; i++)
	{
		hash = unsplitParameters[i].split('=');
		params[hash[0]] = hash[1];
	}
	
	return params;
}

function ViewStateChangeLocation(SelectID, ParentSelect)
{	
	if (typeof ParentSelect != 'undefined')
	{
		var href = ParentSelect.val();
	}
	else
	{
		var href = $('#'+SelectID).val();
	}

	var warningString = 'Deze gegevens zijn gewijzigd. Bij het verlaten van deze pagina worden de gegevens niet opgeslagen. Bent u zeker?';
	if(InputGewijzigd && ShowConfirmAfterChange)
	{
		ShowConfirmDialog(href, warningString);
	}
	else
	{
		location.href = href;
	}
}

function ShowConfirmDialog(href, warningString)
{
	var dialog_del = $('<div></div>')
		.html("<span class=\"ui-icon ui-icon-alert\" style=\"float:left; margin:0 7px 2em 0;\"></span>"+warningString)
		.dialog({
			title: 'Opgelet, u verlaat de pagina',
			modal: true,
			resizable: false,
			draggable: false,
			buttons: {
				'Ik ben zeker': function() {
					$(this).dialog('close');
					if (typeof $('#AlsoGoogleLogOut') !== 'undefined')	//bug in Google API, werkt niet
					{
						if ($('#AlsoGoogleLogOut').is(':checked'))
						{
							href = href.replace("../", BasePath);
							href = 'https://accounts.google.com/logout&continue='+href;
						}
					}
					window.location = href;
				},
				'Annuleer': function() {
					$(this).dialog('close');
				}
			}
		});
}



// // start jquery plugin voor tabellen scrollable te maken
// // MARCHEERT (NOG) NIET
// (function($) {
	// $.fn.scrollableTable = function(options) {

		// var defaults = {
			// fixedHeader : true,
			// fixedColumn : false,
			// disconnectTfoot : true
		// };
		// var opts = $.extend(defaults, options);
		
		// this.wrap('<div class="sortableTableWrapper">');
		// this.find('td, th').css({padding: 0});
		
		// var parent = this.parent();
		
		// // disconnect thead
		// this.before(
			// '<table class="table_solid_collapse stThead" style="margin:0"><thead>'+this.find('thead').html()+'</thead></table>'
		// );
		// this.find('thead').remove();
		// // disconnect tfoot
		// if(opts.disconnectTfoot && this.find('tfoot').length > 0)
		// {
			// this.after(
				// '<table class="table_solid_collapse stTfoot" style="margin:0"><tfoot>'+this.find('tfoot').html()+'</tfoot></table>'
			// );
			// this.find('tfoot').remove();
		// }
		
		// // wrap it in the div
		// var wrapperWidth = this.width() + 16
		// var wrapperHeight = $(window).height() - parent.find('tfoot').outerHeight() - parent.find('thead').outerHeight() - 180;
		
		// var wrapper = $('<div class="sortableTbodyWrapper">').css({height: wrapperHeight+'px', overflow: 'auto', width: wrapperWidth+'px'});
		// this.wrap(wrapper);

		// // set the widths of the thead th
// /*
		// var TempWidth = 0;
		// parent.find('.stThead').width(parent.find('.sortableTbodyWrapper').width() - 16);
		// parent.find('.stThead th').each(function() {
			// var nChild = $(this).index() + 1;
			// TempWidth = parent.find('tbody tr:first-child td:nth-child('+nChild+')').width();
			// $(this).width(TempWidth);
		// });
		
		// // disconnect the table footer if set so
		// if(opts.disconnectTfoot && parent.find('tfoot').length > 0)
		// {			
			// parent.find('.stTfoot td').each(function() {
				// var nChild = $(this).index() + 1;
				// TempWidth = parent.find('tbody tr:first-child td:nth-child('+nChild+')').width();
				// $(this).width(TempWidth);
			// });
		// }
// */
		// // breedtes corrigeren
		// var columnCount = parent.find('thead tr:first-child th').length;
		// var thead = parent.find('thead');
		// var tbody = parent.find('tbody');
		// var tfoot = parent.find('tfoot');
		// var widest = 0;
		// var tfootWidth = 0;
		// var tbodyWidth = 0;
		// var theadWidth = 0;
		// for(var i = 1; i <= columnCount; i++)
		// {
			// theadWidth = thead.find('th:nth-child('+i+')').width();
			// if(theadWidth > widest) widest = theadWidth;
			// tbodyWidth = tbody.find('td:nth-child('+i+')').width();
			// if(tbodyWidth > widest) widest = tbodyWidth;
			// tfootWidth = tfoot.find('td:nth-child('+i+')').width();
			// if(tfootWidth > widest) widest = tfootWidth;
			
			// thead.find('th:nth-child('+i+')').width(widest);
			// tbody.find('td:nth-child('+i+')').width(widest);
			// tfoot.find('td:nth-child('+i+')').width(widest);
			
			// widest = 0;
		// }
		
		
		
		// var totale_breedte = 0;
		// if((parent.find('.stThead').width() - 16)> totale_breedte) totale_breedte = parent.find('.stThead').width() - 16;
		// if(parent.find('.sortableTbodyWrapper').width() > totale_breedte) totale_breedte = parent.find('.sortableTbodyWrapper').width();
		// if((parent.find('.stTfoot').width() - 16) > totale_breedte) totale_breedte = parent.find('.stTfoot').width() - 16;
		
		// parent.find('.stThead, .stTfoot').width(totale_breedte);
		// parent.find('.sortableTbodyWrapper').width(totale_breedte + 16);
		
	// };
	
// }) (jQuery);

// // einde plugin


function EmptySelect(element)
{
  //alert(element.name);
  while (element.options.length > 0) {
    element.remove(0);
  }
  //alert('ok');
}

function addEvent(obj, evType, fn){
  if (obj.addEventListener){
    obj.addEventListener(evType, fn, false);
    return true;
  } else if (obj.attachEvent){
  var r = obj.attachEvent("on"+evType, fn);
    return r;
  } else {
  return false;
  }
}

function SelectFirstOption(el)
{
  if (!el.value)
  {
    if (el.options.length > 0)
    {
      el.selectedIndex = 0;
    }
  }
}

function IsOn(Veldnaam)
{
  return document.getElementById(Veldnaam).checked;
}

function IsVisible(Veldnaam)
{
  return document.getElementById(Veldnaam).parentNode.parentNode.style.display == '';
}

function IsFieldVisible(Veldnaam)
{
  //return document.getElementById(Veldnaam).parentNode.style.display == '';
  // KV bovenstaande code werkte niet meer door de verandering aan SetFieldVisibleEnabled
  return $('#'+Veldnaam).is(':visible');
}

function SetFieldVisible(Veldnaam, IsZichtbaar)
{
  el = document.getElementById(Veldnaam);
  if (el) {
    el.parentNode.style.display = IsZichtbaar ? '' : 'none';
  }
}

function SetFieldVisibleEnabled(Veldnaam, IsZichtbaar)
{
  // el = document.getElementById(Veldnaam);
  // if (el) {
    // el.parentNode.style.display = IsZichtbaar ? '' : 'none';
    // if (IsZichtbaar) {
      // $('#'+Veldnaam).removeAttr('disabled');
    // } else {
      // $('#'+Veldnaam).attr('disabled', true);
    // }
  // }
	if(IsZichtbaar)
	{
		$('#'+Veldnaam).closest('li').show();
		$('#'+Veldnaam).attr('disabled', false);
	}
	else
	{
		$('#'+Veldnaam).closest('li').hide();
		$('#'+Veldnaam).attr('disabled', true);
	}
}

function SetParentRowVisible(Veldnaam, IsZichtbaar)
{
  el = document.getElementById(Veldnaam);
  if (el) {
    el.parentNode.parentNode.style.display = IsZichtbaar ? '' : 'none';
    //el.disabled = IsZichtbaar ? false : true;
  }
}

function FixTableColors()
{
  var Tabel = document.getElementById('InputTabel');
  var count = 0;
  for (i = 0; i < Tabel.rows.length; i++) {
    Tabel.rows[i].className = count % 2 == 1 ? '' : 'TR_GREY_OVERRIDE';
    if (Tabel.rows[i].style.display == '') {
		count++;
	}
  }
}

function FixLiColors()
{
	var count = 0;
	$('.formTabel li').each(function(index) {
	if ($(this).css('display') != 'none') {
		if (count % 2) {
			$(this).removeClass('oneven');
		} else {
			$(this).addClass('oneven');
		}
		count++;
	}
	});
	//var count = 0;
	//for (i = 0; i < Tabel.rows.length; i++) {
	//  Tabel.rows[i].className = count % 2 == 1 ? '' : 'TR_GREY_OVERRIDE';
	//  if (Tabel.rows[i].style.display == '') count++;
	//}
}

function FixNamedTableColors(tableid)
{
  var Tabel = document.getElementById(tableid);
  var count = 0;
  for (i = 0; i < Tabel.rows.length; i++) {
    Tabel.rows[i].className = count % 2 == 1 ? '' : 'TR_GREY_OVERRIDE';
    if (Tabel.rows[i].style.display == '') {
		count++;
	}
  }
}

function uitklapmenu(id_li, id_img, id_row, nummer) 
{
	li = document.getElementById(id_li+nummer);
	img = document.getElementById(id_img+nummer);
	row = document.getElementById(id_row+nummer);

	if (li.className == "") 
	{
		img.src = "../FWImages/Opened.gif";
		li.className = "active verkleurd";
		row.style.display = "";
	} 
	else 
	{
		img.src = "../FWImages/Closed.gif";
		li.className = "";
		row.style.display = "none";
	}
}

function detailuitklapmenu(id_td, id_img, id_row, nummer) 
{
	td = document.getElementById(id_td+nummer);
	img = document.getElementById(id_img+nummer);
	row = document.getElementById(id_row+nummer);
	//rowb = document.getElementById(id_row+'b'+nummer);

	if (td.className == "") 
	{
		img.src = "../FWImages/Opened.gif";
		td.className = "opengeklapt";
		row.style.display = "";
		//rowb.style.display = "";
	} 
	else 
	{
		img.src = "../FWImages/Closed.gif";
		td.className = "";
		row.style.display = "none";
		//rowb.style.display = "none";
	}
}

function SetCheckboxesByPrefix(prefix, state)
{
	$("input[id^='"+prefix+"']").attr('checked', state);
	return false;
}


function OpenEditPageTab(TabNumber, FWEditTabID, EditTabName)
{
	// hide all
	$('.DivTabPage').hide();
	$('.EditPageTabLi').removeClass('active');
	// show selected tab
	$('#TabLi'+TabNumber).addClass('active');
	$('#DivTabPage'+TabNumber).show();
	// update viewstate
	SetSelectedTab(FWEditTabID, EditTabName);
}

function CopyDown(FieldName, Suffix)
{
	Source = "#"+FieldName+Suffix;
	patt = FieldName+"\\d+";
	if ($(Source).attr("type") == 'checkbox')
	{
		$('*[id^="'+FieldName+'"]:not(:disabled)').filter(
		function(index) {
			return (this.name.match(patt) != null);
		}
		).attr('checked', ($(Source).attr("checked")=='checked'));
	}
	else
	{
		$('*[id^="'+FieldName+'"]:not(:disabled)').filter(
		function(index) {
			return (this.name.match(patt) != null);
		}
		).val($(Source).val());
	}
}

function UnfilteredCopyDown(FieldName, Suffix)
{
	Source = "#"+FieldName+Suffix;
	if ($(Source).attr("type") == 'checkbox')
	{
		$('*[id^="'+FieldName+'"]').attr('checked', $(Source).attr("checked"));
	}
	else
	{
		$('*[id^="'+FieldName+'"]').val($(Source).val());
	}
}

function PositionInfoboxTabs() 
{
	var InfoboxTabsHeight = parseFloat($('.InfoboxTabs').height(),10)+1;
	$('.InfoboxTabs').css({top: -InfoboxTabsHeight+'px'});
	$('.InfoboxTabs').closest('.infobox').css({marginTop: InfoboxTabsHeight+'px'});
}

function ToonFilmpje(filmUrl, title) {
	$('#movieBox h2').text(title);
	$('#movieBox').fadeIn('slow');
	$('#MovieURL').val(filmUrl);
	$('#MovieURL').focus(function() {
		$(this).select();
	});
	$('<div id="flowPlayer"></div>').insertAfter('#closeMovieBox');
	flashembed("flowPlayer", "https://www.schoolonline.be/helpdesk/flowplayer/flowplayer.swf", {config: { 
		clip: {
			url: filmUrl,
			autoPlay: false,
			autoBuffering: true
		},
		plugins: { 
			controlbar:null,
			controls: {
				progressColor: '#b29302',
				bufferColor: '#ffd203',
				bufferGradient: "none",
				timeColor: '#ffd203',
				backgroundGradient: 'none'
			}
		},
		canvas: {
			borderRadius: 10
		}
		
	}}); 
}

function stripHTML(html)
{
	var tmp = document.createElement("div");
	tmp.innerHTML = html;
	var retval = tmp.textContent||tmp.innerText;
	var retval2 = retval||'';
	return retval2.replace(/[\r\l\n\s]+/g, '');
}

// agenda lesfiche hoek js
$('.showhide_hoek').live('click', function(e) {
	e.preventDefault();
	var HoekID = $(this).attr('rel');
	$('#hoek_'+HoekID).toggle();
	if ($(this).attr('src') == '../FWImages/Closed.gif')
	{
		$(this).attr('src', '../FWImages/Opened.gif')
	}
	else
	{
		$(this).attr('src', '../FWImages/Closed.gif')
	}
});

function UpdateVisibleFields(Table)
{
	if ($('#'+Table+'AgendaItemKleuterModeID').val() == 1)
	{
		// zonder hoeken
		$('#EditExtraInfo').css({display:'none'});
		$.ajax({
			url: Table+'AjaxUpdateViewState.php?SessionID='+SessionID+'&'+Table+'ViewStateKleuterMode=0', 
			type: 'GET'
		});
	}
	else
	{
		// met hoeken
		$('#EditExtraInfo').css({display:'block'});
		$.ajax({
			url: Table+'AjaxUpdateViewState.php?SessionID='+SessionID+'&'+Table+'ViewStateKleuterMode=1', 
			type: 'GET'
		});
	}
}

// hack voor oude browsers
if (!Object.keys) {
    Object.keys = function (obj) {
        var keys = [],
            k;
        for (k in obj) {
            if (Object.prototype.hasOwnProperty.call(obj, k)) {
                keys.push(k);
            }
        }
        return keys;
    };
}

function fw_htmlentities(str)
{
	return $("<div/>").text(str).html();
}

function fw_setelementvalue(FieldName, Value)
{
	var TempEl = $('#'+FieldName);
	if (TempEl.length > 0)
	{
		if (TempEl.is(':checkbox'))
		{   
			if ((Value == "on") || (Value == "1") || (Value == 1))
			{   
				TempEl.attr('checked', true);
			}   
			else
			{   
				TempEl.attr('checked', false);
			}   
		}   
		else
		{   
			if (TempEl.hasClass("mceEditor"))
			{
				tinyMCE.get(FieldName).setContent(Value);
			}
			else
			{
				TempEl.val(Value);
			}
		}   
	}
}

function fw_tinymceappend(FieldName, Value)
{
	var TempEl = $('#'+FieldName);
	if (TempEl.length > 0)
	{
		if (TempEl.hasClass("mceEditor"))
		{
			tinyMCE.get(FieldName).setContent(tinyMCE.get(FieldName).getContent() + Value);
		}
	}

}

function GetHelpIcon(strHelp)
{
	var html = "<a class='small_icon' onmouseout='return nd();' onclick=\"return overlib('" + strHelp + "');\" href='javascript:void(0);'><img src='../FWImages/icons/help.png'></a>";
	return html;
}

