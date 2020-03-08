@extends('./../layouts')

@section('contents')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>CATEGORIES TABLE</h1>
            <a class="btn btn-success" href="{{ route('categories.create') }}">Create</a>
          </div>
          
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>User ID</th>
                      <th>Name</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                      @foreach($categories as $cate)
                        <tr>
                            <td>{{ $cate->id }}</td>
                            <td>{{ $cate->user_id }}</td>
                            <td>{{ $cate->name }}</td>
                            <td>
                                <a class="btn btn-primary col-nd-1" href="{{ route('categories.edit', [$cate->id]) }}">Update</a>
                                
                                <form class="d-inline" action="{{ route('categories.destroy', [$cate->id]) }}" method="POST">
                                      {{ csrf_field() }}
                                      {{ method_field('DELETE') }}
                                      <button class="btn btn-danger col-nd-1" href="#" onclick="return destroy()">Detele</button>
                                </form>
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
    confirm('Bạn muốn xóa danh mục này?');
  }
</script>
@endpush