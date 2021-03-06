<!DOCTYPE html>
<html lang="en" prefix="og: http://ogp.me/ns#">
	<head>
		<title>Place Quran</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<meta property="og:title" content="Place Quran" />
		<meta property="og:description" content="There's no easy way to get quran verses image as using PlaceQuran" />
		<meta name="keywords" content="quran,placequran,quran ayah,quran image,ayah image,quran verse,verse,verse image">
		<meta name="description" content="There's no easy way to get quran verses image as using PlaceQuran">
		<meta property="og:type" content="website" />
		<meta property="og:url" content="{{url()}}" />
		<meta property="og:image" content="{{asset('/img/image.png')}}" />
		<meta name="author" content="Faiz Shukri">
		<link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" media="screen">
		<link rel="stylesheet" type="text/css" href="css/vendors/fancybox/jquery.fancybox.css" media="screen">
		<link rel="stylesheet" type="text/css" href="css/vendors/highlight/highlight.default.css">
		<link rel="stylesheet" type="text/css" href="css/main.css">
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans:600,400" >
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2 col-lg-8" style="margin-top: 20px; margin-bottom: 20px;">
					<div class="jumbotron">
						<div class="container">
							<h1><span style="font-size: 0.8em;" class="glyphicon glyphicon-book"></span> Place Quran</h1>
							<p>There's no easy way to get quran verses image as using <span class="label label-info">Place Quran</span></p>
						</div>
					</div>
					<br />
					<div>Just call this url to get Quran image</div>
					<br />
					<div class="alert alert-success">
							{{ url() }}/<span class="highlight"> {surah} </span>/<span class="highlight"> {verses} </span>/<span class="highlight"> {translation} </span>
						</div>
					<ul>
					<li>
						Translation was optional. If you not specify, it will return arabic only.
					</li>
					<li>
						Verses will return in order that you specified in url.
					</li>
					</ul>
					<br />
					<div class="usage">
						<h2>Usage</h2>
						<h3>Basic</h3>
						<ol>
							<li>
								Return verse 14 from surah 2 (al Baqarah)
								<pre>{{ url() }}/2/14</pre>
								<br />
							</li>
							<li>
								Return verses 10 to 18 from surah 3 (ali Imran)
								<pre>{{ url() }}/3/10-18</pre>
								<br />
							</li>
						</ol>
						<h3>Mix verses</h3>
						<ol start="3">
							<li>
								Return verses 20, 25, and 33 from surah 4 (an Nisa)
								<pre>{{ url() }}/4/20,25,33</pre>
								<br />
							</li>
							<li>
								We can also mix up between individual verse and range of verses. Below will return verses 2,5, 7 to 10, and 13 from surah 5 (al Maidah)
								<pre>{{ url() }}/5/2,5,7-10,13</pre>
								<br />
							</li>
						</ol>
						<h3>Translation</h3>
						<ol start="5">
							<li>
								Return verses 40 to 42 from surah 6 (Surat Al-'An`ām), with Arabic and Malay translation 
								<pre>{{ url() }}/6/40-42/ar,ms</pre>
								Right now, the website only support Arabic, English, Malay and Indonesia translation only. You can specified that as.
								<ul>
									<li><span class="label label-success">ar</span> Arabic</li>
									<li><span class="label label-success">en</span> English</li>
									<li><span class="label label-success">ms</span> Malay</li>
									<li><span class="label label-success">in</span> Indonesian</li>
								</ul>
							</li>
						</ol>
						<h3>Use in HTML</h3>						
						Since every request to the url will get image response. So you can put it inside any image source link.
						<pre><code class="html">&lt;img src="{{url()}}/2/70,71/ar,en"/></code></pre>
						On your first request, it will take some time for image generation and compression. Then image load will be fast as usual.
						<br /><br />
						There's a limitation of 15 verses that can be displayed in a single image. If you want to get more verses, feel free to generate another image.
					</div>
					<br />
					
					<h2>Screenshot</h2>
					<a href="img/blogspot.png" class="fancybox" rel="gallery1"><img style="height: 150px; float: left;" src="img/blogspot.png" class="img-responsive img-thumbnail" alt="Image"> </a>
					<a href="img/wordpress.png" class="fancybox" rel="gallery1"><img style="height: 150px; float: left;" src="img/wordpress.png" class="img-responsive img-thumbnail" alt="Image"></a> 
					<a href="img/joomla.png" class="fancybox" rel="gallery1"><img style="height: 150px; float: left;" src="img/joomla.png" class="img-responsive img-thumbnail" alt="Image"></a>
					<div style="clear: both;"></div>
					<br />
					<h2>Translation</h2>
					Thanks to <a href="http://qurandatabase.org/" target="_blank">QuranDatabase</a> for opensourcing all the quran content. May Allah accept our works as good deeds.
					<ol>
						<li>Arabic - (Original Book)</li>
						<li>English - Yusuf Ali</li>
						<li>Malay</li>
						<li>Indonesian</li>
					</ol>
					<br/ >
					<h2>Contributers</h2>
						<ul>
							<li>Faiz Shukri (Developer)</li>
							<li>Nu'man Saadan (Poster Designer)</li>
						</ul>
					<br /><br />
					<hr />
					<div align="center">Created with &hearts; <span class="developer-footer">by &copy; Faiz Shukri [ <a href="http://twitter.com/faizshudin" target="_blank">@faizshudin</a> ] | 2014</span></div>
				</div>
			</div>
		</div>

		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
		<script src="js/jquery.fancybox.pack.js"></script>
		<script src="js/highlight.pack.js"></script>
		<script>hljs.initHighlightingOnLoad();</script>
		<script type="text/javascript">
			$(function(){
				$(".fancybox").fancybox({
					openEffect	: 'none',
					closeEffect	: 'none'
				});
			});
		</script>
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		  ga('create', '{{ Config::get("quran.ga_code") }}', 'placequran.com');
		  ga('send', 'pageview');
		</script>
	</body>
</html>