<!DOCTYPE HTML>
<!--
	Industrious by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Industrious by TEMPLATED</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link rel="stylesheet" href="{{ asset('assets/css/main.css') }}" />
	</head>
	<body class="is-preload">

		<!-- Header -->
			<header id="header">
				<a class="logo" href="index.html">
					
					@if(Auth::check())
						<p>{{ Auth::user()->name }}</p> 
					@else
						<a href="{{ route('auth.login') }}" class="btn btn-primary">Login</a>
					@endif
					
				</a>
				<nav>
				<a href="{{ route('logout') }}">LOGOUT</a>
				</nav>
			</header>

		<!-- Nav -->

		<!-- Banner -->
			<section id="banner">
				<div class="inner">
					<h1>Industrious</h1>
					<p>A responsive business oriented template with a video background<br />
					designed by <a href="https://templated.co/">TEMPLATED</a> and released under the Creative Commons License.</p>
				</div>
				<video autoplay loop muted playsinline src="images/banner.mp4"></video>
			</section>

		<!-- Highlights -->
			<section class="wrapper">
				<div class="inner">
					<header class="special">
						<h2>ALL THE POSTS</h2>
						<p>In arcu accumsan arcu adipiscing accumsan orci ac. Felis id enim aliquet. Accumsan ac integer lobortis commodo ornare aliquet accumsan erat tempus amet porttitor.</p>
                        <a class="btn btn-success" href="{{ route('posts.create') }}">Create</a>
                    </header>
					<div class="highlights">
                        @foreach($posts as $post)
                            <section>
                                <div class="content">
                                    <header>
                                        <a href="#" class="icon fa-vcard-o"><span class="label">Icon</span></a>
                                        <h3><a href="">{{ $post->title }}</a></h3>
                                    </header>
                                    <p>{{ $post->content }}</p>
                                </div>
                            </section>
                        @endforeach
					</div>
				</div>
			</section>

		<!-- Scripts -->
			<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
			<script src="{{ asset('assets/js/browser.min.js') }}"></script>
			<script src="{{ asset('assets/js/breakpoints.min.js') }}"></script>
			<script src="{{ asset('assets/js/util.js') }}"></script>
			<script src="{{ asset('assets/js/main.js') }}"></script>

	</body>
</html>