//text sizer

// start, check if cookie set

function textsize()
{
	var cookiedata = (window.document.cookie);
	if (cookiedata != null) setfont();   // call function to set font size if cookie present
	else $('body').css('font-size','100%'); // otherwise set default size
}

// set fontsize if cookie is present
function setfont()
{
	var cookiedata = (window.document.cookie);
	
	switch (cookiedata)
	{
		case "fontsize=small" : $('body').css('font-size','80%'); break;
		case "fontsize=normal" : $('body').css('font-size','100%'); break;
		case "fontsize=large" : $('body').css('font-size','120%'); break;
		default : $('body').css('font-size','100%');
	}
}

// jquery write cookie and set fontsize
$(document).ready(function(){
	$('a.smaller').click(function(){
		$.cookie("fontsize", "small", { expires: 1 }); //set cookie for 1 day
		setfont();
	});	
	$('a.normal').click(function(){
		$.cookie("fontsize", "normal", { expires: 1 });
		setfont();
	});	
	$('a.larger').click(function(){
		$.cookie("fontsize", "large", { expires: 1 });
		setfont();
	});
});

