@extends('admin.includes.master-admin')
@section('content')
<section class="content">
<h1 class="m-0">DANH SÁCH DANH MỤC</h1>
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-body">
            <table id="example2" class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>Tên danh mục</th>
                  <th>Mô tả</th>
                  <th>Sửa/Xoá</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Win 95+</td>
                  <td> 4</td>
                  <td>
                    <a class="btn btn-info btn-sm" href="{!! url('admin/edit-category') !!}">
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