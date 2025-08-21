<!-- Basic Page Needs
  ================================================== -->
<meta charset="utf-8">
{!! SEOMeta::generate() !!}

<!-- Mobile Specific Metas
================================================== -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">

<!-- Favicon
================================================== -->
<link rel="icon" type="image/png" href="{{ URL::asset('images/favicon.png') }}">

<!-- Meta Pixel Code -->
<script>
	!function(f,b,e,v,n,t,s)
	{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
		n.callMethod.apply(n,arguments):n.queue.push(arguments)};
		if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
		n.queue=[];t=b.createElement(e);t.async=!0;
		t.src=v;s=b.getElementsByTagName(e)[0];
		s.parentNode.insertBefore(t,s)}(window, document,'script',
		'https://connect.facebook.net/en_US/fbevents.js');
	fbq('init', '2749419371934451');
	fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
			   src="https://www.facebook.com/tr?id=2749419371934451&ev=PageView&noscript=1"
	/></noscript>
<!-- End Meta Pixel Code -->

@include('layouts.google-analytics')
@include('layouts.tiktok-analytics')

@include('layouts.includes.css')