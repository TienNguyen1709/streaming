@extends('admin.includes.master-admin')
@section('content')
<section class="content">
    <h1 class="m-0">THÊM VIDEO</h1>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
                <form role="form" method="POST" action="{{ URL::to('/admin/save-video') }}" enctype="multipart/form-data">
                {{ csrf_field() }}
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">Tên Video</label>
                            <input type="text" name="name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="description">Mô tả</label>
                            <textarea name="description" class="form-control" rows="4" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="embed">Embed Code</label>
                            <input type="text" name="embed" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="inputClientCompany">Hình ảnh</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="file" name="image" id="uploadFile" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="hidden" name="status" value="1">
                        </div>
                    </div>
                    <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <a href="#" class="btn btn-secondary">Cancel</a>
            <input type="submit" name="add_video" value="Thêm sản phẩm" class="btn btn-success float-right">
        </div>
    </div>
    </form>
</section>
@endsection