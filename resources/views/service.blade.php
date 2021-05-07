@extends('templates.app')
@section('title')
   Services
@endsection
@section('content')
<section class="content cont__1">
    <div class="container"><div class="ic">More Website Templates @ TemplateMonster.com - May 05, 2014!</div>
        <div class="row">
            <div class="grid_4">
                <h3>Decoration</h3>
            </div>
            <div class="clear"></div>
            <div class="grid_6">
                <p>Cras facilisis, nulla vel viverra auctor, leo magna sodales felis, quis malesuada nibh odio ut velit. Proin pharetra luctus diam, a scelerisque eros convallis accumsanInteger convallis orci vel mi laoreet, at ornare lorem consequatasellus erat nisl auctor vel velit sed,pharetra venenatis nulla. </p>
                Vestibulum volutpat turpis ut massa commodo, quis aliquam massa facilisis. Donec non sapien a erat porttitor aliquet.
                <br>
				<a href="{{url('reservation-location/decoration')}}" class="btn bt__2">Faire une reservation</a>
            </div>
            
            {{-- location chaise et table --}}
            <div class="grid_4">
                <h3 class="head1">Location</h3>
            </div>
            {{-- <div class="clear"></div> --}}
            <div class="grid_6">
                <p>Dras facilisis, nulla vel viverra auctor, leo magna sodales felis, quis malesuada nibh odio ut velit. Proin pharetra luctus diam, a scelerisque eros convallis accumsanInteger convallis orci vel mi laoreet, at ornare lorem consequatasellus erat nisl auctor vel velit sed,pharetra venenatis nulla. </p>
                Vestibulum volutpat turpis ut massa commodo, quis aliquam massa facilisis. Donec non sapien a erat porttitor aliqueter.
                <br>
				<a href="{{url('reservation-location/chaise')}}" class="btn bt__2">Faire une reservation</a>
            </div>
            
            <div class="clear"></div>
            <div class="grid_4">
                <h3 class="head1">Photographie</h3>
            </div>
            <div class="clear"></div>
            <div class="grid_8">
                <p>Oras facilisis, nulla vel viverra auctor, leo magna sodales felis, quis malesuada nibh odio ut velit. Proin pharetra luctus diam, a scelerisque eros convallis accumsanInteger convallis orci vel mi laoreet, at ornare lorem consequatasellus erat nisl auctor vel velit sed,pharetra venenatis nullare. </p>
                Mestibulum volutpat turpis ut massa commodo, quis aliquam massa facilisis. Donec non sapien a erat porttitor aliquety.
                
                <br>
				<a href="{{ url('reservation-location/photographie')}}" class="btn bt__2">Faire une reservation</a>
            </div>
        </div>
    </div>
</section>
@endsection
@section('content')