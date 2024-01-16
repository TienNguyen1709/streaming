@extends('admin.includes.master-admin')
@section('content')
<section class="content">
    <h1 class="m-0">THÊM SẢN PHẨM</h1>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-body">
                    <div class="form-group">
                        <label for="inputName">Tên sản phẩm</label>
                        <input type="text" id="inputName" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="inputDescription">Mô tả</label>
                        <textarea id="inputDescription" class="form-control" rows="4"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="inputStatus">Danh mục</label>
                        <select id="inputStatus" class="form-control custom-select">
                            <option selected disabled>Select one</option>
                            <option>On Hold</option>
                            <option>Canceled</option>
                            <option>Success</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="inputClientCompany">Hình ảnh sản phẩm</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <img src="{{asset('assets/frontend/img/product2.jpg')}}"
                                style="max-height: 400px; max-width: 528px;" alt="No Banner Photo"><br>
                            <input type="file" accept="image/*" name="banner" id="uploadFile" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputProjectLeader">Giá sản phẩm</label>
                        <input type="text" id="inputProjectLeader" class="form-control">
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
            <input type="submit" value="Thêm sản phẩm" class="btn btn-success float-right">
        </div>
    </div>
</section>
@endsection