$(window).load(function() {
	fixRowHeights();
});


$(function() {
	// hoogtes opnieuw instellen bij resize. Niet voor IE (bugt).
	if (navigator.appName != 'Microsoft Internet Explorer')
	{
		$(window).resize(fixRowHeights);
	}
	
	
	// de rapport commentaar inputs verbergen
	$('.shower').hide();
	
	// rapport commentaren tevoorschijn toveren
	var CommentarenShown = false;
	$('#EditCommentaarAll').click(function(event) {
		event.preventDefault();
		if(CommentarenShown)
		{
			$('.shower.commentaar').hide();
			$('.hider.commentaar').show();
			CommentarenShown = false;
			fixRowHeights();
		}
		else
		{
			$('.shower.commentaar').show();
			$('.hider.commentaar').hide();
			CommentarenShown = true;
			fixRowHeights();
		}
	});
	var AttitudeShown = false;
	$('#EditAttitudeAll').click(function(event) {
		event.preventDefault();
		if(AttitudeShown)
		{
			$('.shower.attitude').hide();
			$('.hider.attitude').show();
			AttitudeShown = false;
			fixRowHeights();	
		}
		else
		{
			$('.shower.attitude').show();
			$('.hider.attitude').hide();
			AttitudeShown = true;
			fixRowHeights();
		}
	});

	
	
	// info popup afhandelen
	ShowHideEvaluatieMomentInfo(); 


});

// in functie om te gebruiken in popup ook.
function ShowHideEvaluatieMomentInfo()
{
	$('.r').hover(
		function() {
			$(this).children('.i').show();
		},
		function() {
			$(this).children('.i').hide();
		}
	);
}


function fixRowHeights()
{
	// equalize row heights
	$('#PuntenKop tr').each(function() {
		var trIndex = $(this).index() + 1; // index + 1, for use with nth-child(n)
		var KopTr = $(this);
		var PuntTr = $('#PuntenOverzicht tr:nth-child('+trIndex+')');
		var tempHeight = Math.ceil(Math.max(KopTr.outerHeight(), PuntTr.outerHeight()));
		// if(jQuery.browser.msie && jQuery.browser.version == '7.0')
		// {
			// tempHeight = tempHeight - 6;
		// }
		KopTr.height(tempHeight);
		PuntTr.height(tempHeight);
	});
}