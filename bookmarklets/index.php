
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<meta content="initial-scale=1.0, width=device-width" name="viewport">
	
	<title>Bookmarklets</title>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	
	</head>
<body>
		
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<h1>Bookmarklets</h1>
				
				<h2>Sharing</h2>
				<p>These are some helpful links for adding functionality to your browser. Drag them into the bookmarks bar to add them!</p>
				<p><a href="javascript:location.href='mailto:?SUBJECT='+document.title+'&BODY='+escape(location.href);">Email With Outlook</a></p>
				<p><a href="javascript:(function(){m='http://mail.google.com/mail/?view=cm&fs=1&tf=1&to=&su='+encodeURIComponent(document.title)+'&body='+encodeURIComponent(document.location);w=window.open(m,'addwindow','status=no,toolbar=no,width=575,height=545,resizable=yes');setTimeout(function(){w.focus();}, 250);})();">Email via GMail</a></p
				
				<p><a href="javascript:var d=document,f='https://www.facebook.com/share',l=d.location,e=encodeURIComponent,p='.php?src=bm&v=4&i=1396905616&u='+e(l.href)+'&t='+e(d.title);1;try{if (!/^(.*\.)?facebook\.[^.]*$/.test(l.host))throw(0);share_internal_bookmarklet(p)}catch(z) {a=function() {if (!window.open(f+'r'+p,'sharer','toolbar=0,status=0,resizable=1,width=626,height=436'))l.href=f+p};if (/Firefox/.test(navigator.userAgent))setTimeout(a,0);else{a()}}void(0)">Share via Facebook</a></p>
				
				<h2>Development Tools</h2>
				<p><a href="javascript:var sourceWindow %3D window.open('about:blank'); %0Avar newDoc %3D sourceWindow.document; %0AnewDoc.open(); %0AnewDoc.write('<html><head><title>Source of ' %2B document.location.href %2B '</title></head><body></body></html>'); %0AnewDoc.close(); %0Avar pre %3D newDoc.body.appendChild(newDoc.createElement("pre")); %0Apre.appendChild(newDoc.createTextNode(document.documentElement.innerHTML));">Show Page Source With Current State</a></p>
				
			</div>
		</div>
	</div>
	</body>
</html>
