@extends('./../layouts')

@section('contents')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Simple Tables</h1>
          </div>
          
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap" style="width:600px">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Title</th>
                      <th>User ID</th>
                      <th>Category ID</th>
                      <th>Content</th>
                      <th>Time</th>
                    </tr>
                  </thead>
                  <tbody>
                     
                        <tr>
                            <td>{{ $posts->id }}</td>
                            <td>{{ $posts->title }}</td>
                            <td>{{ $posts->user_id }}</td>
                            <td>{{ $posts->getCateName() }}</td>
                            <td>{{ $posts->content }}</td>
                            <td>{{ $posts->time }}</td>
                        </tr>
                                   
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
        
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection

@push('scripts')
<script>
  function destroy(){
    confirm('Bạn muốn xóa bài đăng này?');
  }
</script>
@endpush