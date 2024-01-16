@extends('admin.includes.master-admin')
@section('content')
<section class="content">
    <h1 class="m-0">SỬA VIDEO</h1>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
            @foreach($edit_vid as $key => $vid)
            <form role="form" method="POST" action="{{ URL::to('/admin/update-video/'.$vid->id) }}" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="card-body">
                    <div class="form-group">
                        <label for="name">Tên Video</label>
                        <input type="text" name="name" class="form-control" value="{{ $vid->name }}">
                    </div>
                    <div class="form-group">
                        <label for="description">Mô tả</label>
                        <textarea name="description" class="form-control" rows="4">{{ $vid->description }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="embed">Embed Code</label>
                        <input type="text" name="embed" class="form-control" value="{{ $vid->embed }}">
                    </div>
                    <div class="form-group">
                        <label for="image">Hình ảnh</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="file" accept="image/*" name="image" id="uploadFile" />
                            <img src="{{URL::to('/upload/'.$vid->image)}}" style="max-height: 400px; max-width: 528px;" alt="No Banner Photo">
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="hidden" name="status" value="1">
                    </div>
                </div>
                <!-- /.card-body -->
            @endforeach
            </div>
            <!-- /.card -->
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <a href="{{ URL::to('/admin/list-video')}}" class="btn btn-secondary">Cancel</a>
            <input type="submit" value="Lưu" class="btn btn-success float-right">
        </div>
    </div>
    </form>
</section>
@endsection