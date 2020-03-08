@extends('./../layouts')

@section('contents')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>POSTS TABLE</h1>
            <a class="btn btn-success" href="{{ route('posts.create') }}">Create</a>
          </div>
          
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap" style="width:600px">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Title</th>
                      <th>Time</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                      @foreach($posts as $post)
                        <tr>
                            <td>{{ $post->id }}</td>
                            <td>{{ $post->title }}</td>
                            <td>{{ $post->time }}</td>
                            <td>
                                <a class="btn btn-primary col-nd-1" href="{{ route('posts.edit', [$post->id]) }}">Update</a>
                                <a class="btn btn-success col-nd-1" href="{{ route('posts.show', [$post->id]) }}">Detail</a>
                                
                                <form class="d-inline" action="{{ route('posts.destroy', [$post->id]) }}" method="POST">
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
    confirm('Bạn muốn xóa bài đăng này?');
  }
</script>
@endpush