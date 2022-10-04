<x-app-layout>
  <div class="pagetitle">
    <h1>General Tables</h1>
    <div class="card">
      <div class="card-body">
      <h5 class="card-title">Staff Record</h5>
          <!-- Table with hoverable rows -->
          <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone Number</th>
                <th scope="col">Start Date</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($staff as $user)
              <tr>
                <td>{{$user->fname}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->tel}}</td>
                <td>{{$user->date_employed}}</td>
                <td>
                  <form action="{{ route('staffs.destroy',$user->id) }}" method="POST" class="">
      
                      <!--a class="btn btn-info" href="{{ route('staffs.show',$user->id) }}">Show</a---->
        
                      <a class="btn btn-primary" href="{{ route('staffs.edit',$user->id) }}">Edit</a>
      
                      @csrf
                      @method('DELETE')
          
                      <button type="submit" class="btn btn-danger">Delete</button>
                  </form>
              </td>
              </tr>
              @endforeach
            </tbody>
          </table>
          <!-- End Table with hoverable rows -->
      </div>
    </div>
  </div>
</x-app-layout>