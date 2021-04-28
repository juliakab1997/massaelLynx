@include('templates.header')

<div class="main">
	@include('templates.slider')

	@yield('content')
</div>
        
@include('templates.footer')