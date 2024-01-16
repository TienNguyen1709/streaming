@extends('welcome')
@section('content')
<section class="content">
    <div class="product">
        <h2>LIST VIDEO</h2>
        <div class="product-list">
            @foreach($show_video as $key => $video)
            <div class="product-item">
                <a href="{{ URL::to('/detail/'.$video->id) }}">
                    <img src="{{URL::to('/upload/'.$video->image)}}">
                    <div class="product-detail">
                        <h4>{{ $video->name }}</h4>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection