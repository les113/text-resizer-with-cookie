<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="jquery.cookie.js" type="text/JavaScript"></script>
</head>
<body>
<!-- excerpt -->

	<div id="topheader">	
    
        <!-- textresizer -->  
        <div id="textsizer">
        <a href = "#" class="smaller">A</a> <a href = "#" class="normal">A</a> <a href = "#" class="larger">A</a><br/>
		</div>
		
		<p>
		Lorem ipsum dolor sit amet, consectetur adipiscing elit. In dapibus dignissim elit. Proin rutrum vehicula lectus in commodo. Donec laoreet viverra enim nec porttitor. Nullam sed consequat est. Aenean venenatis egestas sagittis. Vivamus vel fringilla est, non vulputate elit. Phasellus sapien ante, sollicitudin id imperdiet a, vestibulum nec justo. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Vestibulum sit amet pretium tellus, sed porta arcu. Aenean convallis ac dui vitae placerat. Aenean ultricies eros id rutrum ullamcorper. Donec varius neque ut tempor sagittis. Etiam venenatis elit ac posuere aliquam. Donec vulputate nunc nec justo fringilla congue. Phasellus sodales aliquam eros fermentum iaculis. 
		</P>
        
	</div>
	
	
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
</style>
</body>
</html>