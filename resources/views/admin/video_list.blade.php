@extends('admin.includes.master-admin')
@section('content')
<section class="content">
<h1 class="m-0">DANH SÁCH VIDEO</h1>
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-body">
            <table id="example2" class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>Tên Video</th>
                  <th>Ảnh</th>
                  <th>Embed</th>
                  <th>Mô tả</th>
                  <th>Trạng thái</th>
                  <th>Sửa/Xoá</th>
                </tr>
              </thead>
              <tbody>
                @foreach($all_vid as $key => $vid)
                {{csrf_field()}}
                <tr>
                  <td>{{ $vid->name }}</td>
                  <td>{{ $vid->image }}</td>
                  <td>{{ $vid->embed }}</td>
                  <td>{{ $vid->description }}</td>
                  <td>{{ $vid->status }}</td>
                  <td>
                    <a class="btn btn-info btn-sm" href="{{ URL::to('/admin/edit-video/'.$vid->id) }}">
                      <i class="fas fa-pencil-alt">
                      </i>
                      Edit
                    </a>
                    @if($vid->status==0)
                      <a href="{{ URL::to('/admin/unactive-video/'.$vid->id) }}" class="btn btn-warning btn-sm"><i class="fa fa-times"></i> Deactive </a>
                    @else
                      <a href="{{ URL::to('/admin/active-video/'.$vid->id) }}" class="btn btn-primary btn-sm"><i class="fa fa-check"></i> Active </a>
                    @endif
                    <a class="btn btn-danger btn-sm" href="{{ URL::to('/admin/delete-video/'.$vid->id) }}">
                      <i class="fas fa-trash"> 
                      </i>
                      Delete
                    </a>
                  </td>
                </tr>
                @endforeach
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