<x-app-layout>

  <!-- Modal -->
  <div class="modal fade" id="empModal" >
    <div class="modal-dialog">

       <!-- Modal content-->
       <div class="modal-content">
          <div class="modal-header">
             <h4 class="modal-title">Employee Info</h4>
             <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
          </div>
          <div class="modal-body">
              <table class="w-100" id="tblempinfo">
                 <tbody></tbody>
              </table>
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
          </div>
       </div>
    </div>
 </div>
  


    <div class="pagetitle">
      <h1>Check Pension Scheme</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
          <li class="breadcrumb-item active">Pension Amount</li>
        </ol>
      </nav>
      <form action="{{route('pension')}}" method="post">
        @csrf
        <div class="col-8">
          <input type="text" placeholder="Search Here for Staff Pension" name="search" class="col-6 form-control">
        </div>
      </form>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-8">
          <div class="row">

           

            <!-- Recent Sales -->
            <div class="col-12">
              <div class="card recent-sales overflow-auto">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Recent Sales <span>| Today</span></h5>

                  <table class="table table-borderless">
                    <thead>
                      <tr>
                        <th scope="col">Staff ID</th>
                        <th scope="col">First Name</th>
                        <th scope="col">Other Names</th>
                        <th scope="col">Phone Number</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row"><a href="#">{{$user->staff_id}}</a></th>
                        <td> {{$user->fname}}</td>
                        <td>{{$user->mname}} {{$user->lname}}</td>
                        <td>{{$user->tel}}</td>
                    </tr>
                    </tbody>
                    <thead>
                      <tr>
                        <th scope="col">Employment Date</th>
                        <th scope="col">Retired Date</th>
                        <th scope="col">State of Orgin</th>
                        <th scope="col">LGA</th>
                      </tr>
                    </thead>
                    
                    <tbody>
                      <tr>
                        <th scope="row"><a href="#">{{$employed}}</a></th>
                        <td>{{$retired_date}}</td>
                        <td>{{$user->state}}</td>
                       <td> {{$user->lga}} </td>
                    </tr>
                    </tbody>

                    
                    <thead>
                      <tr>
                        <th scope="col">Date of Birth</th>
                        <th scope="col">Place of Work</th>
                        <th scope="col">Status</th>
                      </tr>
                    </thead>
                    
                    <tbody>
                      <tr>
                        <th scope="row"><a href="#">{{$user->dob}}</a></th>
                        <td>{{$user->place_of_work}}</td>
                       <td><button><span class="badge bg-success">{{$user->status}}</span></button></td>
                    </tr>
                    </tbody>

                    
                    <h3>Next Of Kin</h3>
                    <thead>
                      <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Relationship</th>
                        <th scope="col">Tel</th>
                        <th scope="col">Address</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row"><a href="#">{{$user->nok_name}}</a></th>
                        <td>{{$user->nok_relationship}}</td>
                        <td>{{$user->nok_tel}}</td>
                       <td> {{$user->address}} </td>
                    </tr>
                    </tbody>


                    <thead>
                      <tr>
                        <th scope="col">Total Pension</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row"> <strong> &#8358 {{$payable}}</strong> </th>
                        
                    </tr>
                    </tbody>
                    <td><button onclick="window.print()"><span class="btn btn-success">Print</span></button></td>
                  </table>

                </div>
              </div>
            </div><!-- End Recent Sales -->

          </div>
        </div><!-- End Left side columns -->

        <!-- Right side columns -->
        <div class="col-lg-4">


            <div class="card-body pb-0">
              <h5 class="card-title">News &amp; Updates <span>| Today</span></h5>

              <div class="news">
                <div class="post-item clearfix">
                  <img src="{{asset('admin/assets/img/news-1.jpg')}}" alt="">
                  <h4><a href="#">One week warning strike</a></h4>
                  <p>Niger state workers embarked on a week warning strike, after meetng with the state Government rep...</p>
                </div>

                <div class="post-item clearfix">
                  <img src="{{asset('admin/assets/img/news-2.jpg')}}" alt="">
                  <h4><a href="#">Governor Sani Bello hip praises on the academy staff of COE Minna</a></h4>
                  <p>The governor o niger state governor Abubakar Sani Bello was in attendance of the teaching competition held at...</p>
                </div>

                <div class="post-item clearfix">
                  <img src="{{asset('admin/assets/img/news-3.jpg')}}" alt="">
                  <h4><a href="#">Id quia et et ut maxime similique occaecati ut</a></h4>
                  <p>Fugiat voluptas vero eaque accusantium eos. Consequuntur sed ipsam et totam...</p>
                </div>

                <div class="post-item clearfix">
                  <img src="{{asset('admin/assets/img/news-4.jpg')}}" alt="">
                  <h4><a href="#">Laborum corporis quo dara net para</a></h4>
                  <p>Qui enim quia optio. Eligendi aut asperiores enim repellendusvel rerum cuder...</p>
                </div>

                <div class="post-item clearfix">
                  <img src="{{asset('admin/assets/img/news-5.jpg')}}" alt="">
                  <h4><a href="#">Et dolores corrupti quae illo quod dolor</a></h4>
                  <p>Odit ut eveniet modi reiciendis. Atque cupiditate libero beatae dignissimos eius...</p>
                </div>

              </div><!-- End sidebar recent posts-->

            </div>
          </div><!-- End News & Updates -->

        </div><!-- End Right side columns -->

      </div>
    </section>

  
</x-app-layout>