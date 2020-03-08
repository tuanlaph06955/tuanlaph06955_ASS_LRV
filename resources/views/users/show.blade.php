@extends('./../layouts')

@section('contents')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Simple Tables</h1>
            <a class="btn btn-success" href="{{ route('users.create') }}">Create</a>
          </div>
          
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>User</th>
                      <th>Birth day</th>
                      <th>Role</th>
                      <th>Email</th>
                      <th>Posts</th>
                    </tr>
                  </thead>
                  <tbody>
                        <tr>
                            <td>{{ $users->id }}</td>
                            <td>{{ $users->name }}</td>
                            <td>{{ $users->dob }}</td>
                            <td>{{ $users->role }}</td>
                            <td>{{ $users->email }}</td>
                            <td>{{ $users->posts->count() }}</td>
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
    confirm('Bạn muốn xóa user này?');
  }
</script>
@endpush