@extends('admin.includes.master-admin')
@section('content')
<section class="content">
<h1 class="m-0">DANH SÁCH SẢN PHẨM</h1>
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-body">
            <table id="example2" class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>Tên sản phẩm</th>
                  <th>Danh mục sản phẩm</th>
                  <th>Hình ảnh sản phẩm</th>
                  <th>Mô tả</th>
                  <th>Giá sản phẩm</th>
                  <th>Sửa/Xoá</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Trident</td>
                  <td>Internet
                    Explorer 4.0
                  </td>
                  <td>Win 95+</td>
                  <td> 4</td>
                  <td>2134</td>
                  <td>
                    <a class="btn btn-info btn-sm" href="{!! url('admin/edit-product') !!}">
                      <i class="fas fa-pencil-alt">
                      </i>
                      Edit
                    </a>
                    <a class="btn btn-danger btn-sm" href="#">
                      <i class="fas fa-trash">
                      </i>
                      Delete
                    </a>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container-fluid -->
</section>
@endsection