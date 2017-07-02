function change_css_for_browser()
{
	var browser = navigator.appName;
	if (browser == "Microsoft Internet Explorer") 
	{
		document.write("<link type=\"text/css\" rel=\"stylesheet\" href=\"IE_footer.css\">");
	}

	else if (browser == "Safari")
	{

	}
	else if browser == "Firefox" 
	{
		document.write("<link type=\"text/css\" rel=\"stylesheet\" href=\"FF_footer.css\">");
	}
	else 
	{
		document.write("<link type=\"text/css\" rel=\"stylesheet\" href=\"generic.css\">");
	}
}