@extends('welcome')
@section('content')
<section class="content">
    @foreach($detail_video as $key => $detail)
    <div class="post">
        <div class="post-content">
            <div class="post-detail">
                <h1 class="title-video">{{ $detail->name }}</h1>
                <p class="description">{{ $detail->description }}</p>
                <!-- <button class="btn-post btn">More ...</button> -->
            </div>
        </div>
        <iframe class="video" src="{{ $detail->embed }}" allowfullscreen></iframe>
    </div>
    @endforeach 
</section>
@endsection