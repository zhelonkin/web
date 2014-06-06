function getXmlHttp()
{
    var xhr = null();
    try
	{
		xhr = new ActiveXObject('Msxml2.XMLHTTP');
	}
	catch(e)
	{
		try
		{
			xhr = new ActiveXObject('Microsoft.XMLHTTP);
		}
		catch(e)
		{
			//do nothing
		}
	}
	if (typeof XmlHttpRequest != 'undefined')
	{
		hhr = new XmlHttpRequest();
	}
	return xhr;
}

function getUrl(url, callback)
{
	var xhr = getXmlRequest();
	if ( !xhr )
	{
		return;
	}
}