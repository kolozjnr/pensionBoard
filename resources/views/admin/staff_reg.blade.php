<x-app-layout>

<div class="pagetitle">
  <h1>Staff Registration</h1>
</div><!-- End Page Title -->
<section class="section">
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Bio Data</h5>

          <!-- Multi Columns Form -->
          <form class="row g-3" method="POST" action="{{route('staffs.store')}}">
            @csrf

            <input type="hidden" name="user_email" value="{{auth()->user()->email}}">
            <input type="hidden" name="date_retired" value="<?php echo date('Y-m-d') ?>" readonly>
            
            <div class="col-md-12">
              <label for="inputName5" class="form-label"><strong>Staff ID</strong></label>
              <input type="text" name="staff_id" class="form-control" id="inputName5" required>
            </div>
            <div class="col-md-4">
              <label for="inputName5" class="form-label"><strong>First Name</strong></label>
              <input type="text" name="fname" class="form-control" id="inputName5" required>
            </div>
            <div class="col-md-4">
              <label for="inputName5" class="form-label"><strong>Middle Name</strong></label>
              <input type="text" name="mname" class="form-control" id="inputName5">
            </div>
            <div class="col-md-4">
              <label for="inputName5" class="form-label"><strong>Last Name</strong></label>
              <input type="text" name="lname" class="form-control" id="inputName5" required>
            </div>
            <div class="form-group col-md-4">
              <label for="inputEmail5" class="form-label"><strong>Email</strong></label>
              <input type="email" name="email" class="form-control" id="inputEmail5">
            </div>
            <div class="col-4">
              <label for="inputAddress2" class="form-label"><strong>Phone</strong></label>
              <input type="text" name="tel" class="form-control" id="inputAddress2" placeholder="07067317819" required>
            </div>
            <div class="col-md-4">
              <label for="DOB" class="form-label">Date Of Birth</label>
              <input type="date" name="dob" class="form-control" id="DOB" required>
            </div>
            <div class="col-md-4">
              <label for="exampleDataList" class="form-label"><strong>State</strong></label>
              <select class="form-control form-select" 
              onchange="toggleLGA(this);" 
              name="state" 
              id="state" 
              aria-label="Default select example" :value="old('state')" required autofocus>
                  <option selected="selected">Select State</option>
                  <option value="Abia">Abia</option>
                  <option value="Adamawa">Adamawa</option>
                  <option value="AkwaIbom">AkwaIbom</option>
                  <option value="Anambra">Anambra</option>
                  <option value="Bauchi">Bauchi</option>
                  <option value="Bayelsa">Bayelsa</option>
                  <option value="Benue">Benue</option>
                  <option value="Borno">Borno</option>
                  <option value="Cross River">Cross River</option>
                  <option value="Delta">Delta</option>
                  <option value="Ebonyi">Ebonyi</option>
                  <option value="Edo">Edo</option>
                  <option value="Ekiti">Ekiti</option>
                  <option value="Enugu">Enugu</option>
                  <option value="FCT">FCT</option>
                  <option value="Gombe">Gombe</option>
                  <option value="Imo">Imo</option>
                  <option value="Jigawa">Jigawa</option>
                  <option value="Kaduna">Kaduna</option>
                  <option value="Kano">Kano</option>
                  <option value="Katsina">Katsina</option>
                  <option value="Kebbi">Kebbi</option>
                  <option value="Kogi">Kogi</option>
                  <option value="Kwara">Kwara</option>
                  <option value="Lagos">Lagos</option>
                  <option value="Nasarawa">Nasarawa</option>
                  <option value="Niger">Niger</option>
                  <option value="Ogun">Ogun</option>
                  <option value="Ondo">Ondo</option>
                  <option value="Osun">Osun</option>
                  <option value="Oyo">Oyo</option>
                  <option value="Plateau">Plateau</option>
                  <option value="Rivers">Rivers</option>
                  <option value="Sokoto">Sokoto</option>
                  <option value="Taraba">Taraba</option>
                  <option value="Yobe">Yobe</option>
                  <option value="Zamfara">Zamafara</option>
                  </select>
              </div>
              <div class="col-md-4">
              <label for="exampleDataList" class="form-label"><strong>LGA</strong></label>
              <select name="lga" id="lga" class="form-control select-lga"
              required
              >
              <option selected="selected">You must select state first</option>
              </select>
            </div>
            <div class="col-4">
              <label for="inputAddress5" class="form-label">Address</label>
              <input type="text"name="address" class="form-control" id="inputAddres5s" placeholder="1234 Main St" required>
            </div>
            <h5 class="card-title">Salary Details</h5>
            <div class="col-4">
              <label for="inputAddress2" class="form-label"><strong>Place of Work</strong></label>
              <input type="text" name="place_of_work" class="form-control" id="inputAddress2" placeholder="Niger state Polytechnic Zungeru" required>
            </div>
            <div class="col-4">
              <label for="inputAddress2" class="form-label"><strong>Basic Salary</strong></label>
              <input type="text" name="basic_salary" class="form-control" id="inputAddress2" placeholder="Basic Salary" required>
            </div>
            <div class="col-4">
              <label for="inputAddress2" class="form-label"><strong>Rent Allowance</strong></label>
              <input type="text" name="rent_allowance" class="form-control" id="inputAddress2" placeholder="Rent Allowance">
            </div>

            
            <div class="col-4">
              <label for="inputAddress2" class="form-label"><strong>Ultility Allowance</strong></label>
              <input type="text" name="ultility_allowance" class="form-control" id="inputAddress2" placeholder="Ultility Allowance">
            </div>
            <div class="col-4">
              <label for="inputAddress2" class="form-label"><strong>Transport Allowance</strong></label>
              <input type="text" name="transport_allowance" class="form-control" id="inputAddress2" placeholder="Transport Allowance">
            </div>
            <div class="col-4">
              <label for="inputAddress2" class="form-label"><strong>Date Employed</strong></label>
              <input type="date" name="date_employed" class="form-control" id="inputAddress2" placeholder="" required>
            </div>


            
            <div class="col-4">
              <label for="inputAddress2" class="form-label"><strong>Start Level</strong></label>
              <input type="text" name="start_level" class="form-control" id="inputAddress2" placeholder="start Level" required>
            </div>
            <div class="col-4">
              <label for="inputAddress2" class="form-label"><strong>Start Step</strong></label>
              <input type="text" name="start_step" class="form-control" id="inputAddress2" placeholder="Start Step" required>
            </div>
            <div class="col-4">
              <label for="inputAddress2" class="form-label"><strong>Status</strong></label>
              <select name="status" class="form-control" id="" required>
                <option value="" selected disabled>Select Status</option>
                <option value="In Service">Active in Service</option>
                <option value="Retired">Retired</option>
              </select>
            </div>

            
            <div class="col-4">
              <label for="inputAddress2" class="form-label"><strong>Total Enrollment</strong></label>
              <input type="text" name="total_enrollment" class="form-control" id="inputAddress2" value="" readonly>
            </div>

            <h5 class="card-title">Next of Kin Details</h5>
            <div class="col-4">
              <label for="inputAddress2" class="form-label"><strong>FullName</strong></label>
              <input type="text" name="nok_name" class="form-control" id="inputAddress2" value="" placeholder="John Doe" required>
            </div>
            <div class="col-4">
              <label class="form-label"><strong>phone Number</strong></label>
              <input type="text" name="nok_tel" class="form-control" id="inputAddress2" value="" >
            </div>
            <div class="col-4">
              <label class="form-label"><strong>Address</strong></label>
              <input type="text" name="nok_address" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor" required>
            </div>

            
            <div class="col-6">
              <label for="inputAddress2" class="form-label"><strong>Relationship</strong></label>
              <select name="nok_relationship" class="form-control" id="" required>
                <option value="" selected disabled>Select Relationship</option>
                <option value="son">Son</option>
                <option value="daughter">Daughter</option>
                <option value="Brother">Brother</option>
                <option value="sister">Sister</option>
                <option value="wife">Wife</option>
                <option value="father">Father</option>
                <option value="Mother">Mother</option>
                <option value="other">Other</option>
              </select>
            </div>
            <div class="text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
              <button type="reset" class="btn btn-danger">Reset</button>
            </div>
          </form><!-- End Multi Columns Form -->
        </div>
      </div>
    </div>
  </div>
</section>
</x-app-layout>