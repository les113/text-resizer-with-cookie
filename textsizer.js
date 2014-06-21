<script type="text/javascript">
//call textsizer function onload
window.onload = textsize;

// check if cookie set
function textsize()
{
	var cookiedata = (window.document.cookie);
	if (cookiedata != null) setfont();  // set font size if cookie present
	else $('body').css('font-size','100%'); 
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

// jquery change font size when links are clicked
$(document).ready(function(){
	$('a.smaller').click(function(){
		$.cookie("fontsize", "small", { expires: 1 });
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
</script>

<!-- style and position -->
<style "type=text/css">
	#textsizer a {	color:#ff9900;}
	.smaller {font-size:80%;}
	.normal {font-size:100%;}
	.larger {font-size:120%;}
	
#textsizer {
	position:absolute;
	height:22px;
	z-index:1;
	left: 0px;
	top: -40px;
}
</style>