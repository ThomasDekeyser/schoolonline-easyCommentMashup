function change(id, idarrow, nummer) 
{
	elementid=id+nummer;
	arrowid=idarrow+nummer;
	identity=document.getElementById(elementid);
	identity2=document.getElementById(arrowid);
	if (identity.className=="hidden") 
	{
		identity.className="visible";
		identity2.src="../FWImages/Opened.gif";
	} 
	else 
	{
		identity.className="hidden";
		identity2.src="../FWImages/Closed.gif";
	}
}

function change_rows(id, eerste, laatste) 
{
	for(nummer = eerste; nummer <= laatste; nummer++)
	{
		elementid=id+nummer;
		identity=document.getElementById(elementid);
		if (identity.className=="hidden") 
		{
			identity.className="visible";
		} 
		else 
		{
			identity.className="hidden";
		}
	}
}

function DeleteLinkedPopup(URL)
{
	HTML = "";
	HTML += "Wenst u enkel deze record te wissen of ook de gelinkte records?";
	HTML += "<br><br>";
	HTML += "&nbsp;&nbsp;&nbsp;&nbsp;<a href='" + URL + "'><font color=blue><u>Enkel deze record</u></font></a><br><br>";
	HTML += "&nbsp;&nbsp;&nbsp;&nbsp;<a href='" + URL + "&DeleteLinkedRecords=1'><font color=blue><u>Deze record + de gelinkte records</u></font></a><br><br>";

	overlib(HTML, STICKY, NOCLOSE);
}

