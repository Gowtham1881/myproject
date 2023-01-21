<!--nav class="navbar  navbar bg-white fixed-top">
  <div class="container">
    <a class="navbar-brand col-8  col-md-3 text-left " href="{{ URL::to('/') }}"><img src="{{ asset('images/logo.svg') }}" alt="Growing Networks"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas show offcanvas-start text-bg-white text-warning" tabindex="-1" id="offcanvasDarkNavbar">
      <div class="offcanvas-header ">
        <div class="container">
            <div class="text-end">
            <button type="button" class="btn-close btn-close-warning" data-bs-dismiss="offcanvas" ></button>
            </div>
        <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel"> <a href="{{ URL::to('/') }}"><img src="{{ asset('images/logo.svg') }}" alt="Growing Networks"></a></h5>
        </div>
      </div>
      <div class="offcanvas-body d-lg-block text-center">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active"  href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Product</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Client</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Portfolio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Support</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Privacy Policy</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Terms of Use</a>
          </li>
        </ul>
      </div>
      <div class="container d-flex justify-content-between p-5 mb-5" >
      <div class="icon"><a href="https://linkedin.com/company/growing-networks">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                  <path fill="none" d="M0 0h24v24H0z" />
                  <path d="M18.335 18.339H15.67v-4.177c0-.996-.02-2.278-1.39-2.278-1.389 0-1.601 1.084-1.601 2.205v4.25h-2.666V9.75h2.56v1.17h.035c.358-.674 1.228-1.387 2.528-1.387 2.7 0 3.2 1.778 3.2 4.091v4.715zM7.003 8.575a1.546 1.546 0 0 1-1.548-1.549 1.548 1.548 0 1 1 1.547 1.549zm1.336 9.764H5.666V9.75H8.34v8.589zM19.67 3H4.329C3.593 3 3 3.58 3 4.297v15.406C3 20.42 3.594 21 4.328 21h15.338C20.4 21 21 20.42 21 19.703V4.297C21 3.58 20.4 3 19.666 3h.003z" />
                </svg>
              </a>
            </div>
            <div class="icon"><a href="https://instagram.com/growingnetworks">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                  <path fill="none" d="M0 0h24v24H0z" />
                  <path d="M12 2c2.717 0 3.056.01 4.122.06 1.065.05 1.79.217 2.428.465.66.254 1.216.598 1.772 1.153a4.908 4.908 0 0 1 1.153 1.772c.247.637.415 1.363.465 2.428.047 1.066.06 1.405.06 4.122 0 2.717-.01 3.056-.06 4.122-.05 1.065-.218 1.79-.465 2.428a4.883 4.883 0 0 1-1.153 1.772 4.915 4.915 0 0 1-1.772 1.153c-.637.247-1.363.415-2.428.465-1.066.047-1.405.06-4.122.06-2.717 0-3.056-.01-4.122-.06-1.065-.05-1.79-.218-2.428-.465a4.89 4.89 0 0 1-1.772-1.153 4.904 4.904 0 0 1-1.153-1.772c-.248-.637-.415-1.363-.465-2.428C2.013 15.056 2 14.717 2 12c0-2.717.01-3.056.06-4.122.05-1.066.217-1.79.465-2.428a4.88 4.88 0 0 1 1.153-1.772A4.897 4.897 0 0 1 5.45 2.525c.638-.248 1.362-.415 2.428-.465C8.944 2.013 9.283 2 12 2zm0 5a5 5 0 1 0 0 10 5 5 0 0 0 0-10zm6.5-.25a1.25 1.25 0 0 0-2.5 0 1.25 1.25 0 0 0 2.5 0zM12 9a3 3 0 1 1 0 6 3 3 0 0 1 0-6z" />
                </svg>
              </a>
            </div>
            <div class="icon"><a href="https://fb.me/growingnetworks">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                  <path fill="none" d="M0 0h24v24H0z" />
                  <path d="M15.402 21v-6.966h2.333l.349-2.708h-2.682V9.598c0-.784.218-1.319 1.342-1.319h1.434V5.857a19.19 19.19 0 0 0-2.09-.107c-2.067 0-3.482 1.262-3.482 3.58v1.996h-2.338v2.708h2.338V21H4a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h16a1 1 0 0 1 1 1v16a1 1 0 0 1-1 1h-4.598z" />
                </svg></a>

            </div>
      </div>
    </div>
  </div>

</nav-->


<nav class="navbar">
<span class="brand col-10" href="{{ URL::to('/') }}"><img src="{{ asset('images/logo.svg') }}" alt="Growing Networks"></span>
<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="sidebar" id="navbarNav" >
<ul class="navbar-nav justify-content-end flex-grow-1 pe-3 text-center" >

          <li class="nav-item mb-2">
            <a class="nav-link active"  href="#">Home</a>
          </li>
          <li class="nav-item mb-2">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item mb-2">
            <a class="nav-link" href="#">Services</a>
          </li>
          <li class="nav-item mb-2">
            <a class="nav-link" href="#">Product</a>
          </li>
          <li class="nav-item mb-2">
            <a class="nav-link" href="#">Client</a>
          </li>
          <li class="nav-item mb-2">
            <a class="nav-link" href="#">Portfolio</a>
          </li>
          <li class="nav-item mb-2">
            <a class="nav-link" href="#">Support</a>
          </li>
          <li class="nav-item mb-2">
            <a class="nav-link" href="#">Privacy Policy</a>
          </li>
          <li class="nav-item mb-2">
            <a class="nav-link" href="#">Terms of Use</a>
          </li>
        </ul>
        </div>
    </nav>  







    function jobApplicantAddupdate(Request $request){
    if($request->id !== null) {

        $jobapplicant = JobApplicant::where('id',$request->id)->first();
     } else {
        $jobapplicant = new JobApplicant();
     }

     if ($request->file('resume') !== null){
        $imagePath = $request->file('resume')->store('resumes');
        $jobapplicant->resume = $imagePath;
    }
    $jobapplicant->name = $request->name;
    $jobapplicant->phone = $request->phone;
    $jobapplicant->email = $request->email;
    $jobapplicant->address_1 = $request->address_1;
    $jobapplicant->address_2 = $request->address_2;
    $jobapplicant->country_id = $request->country;
    $jobapplicant->state_id = $request->state;
    $jobapplicant->city_id = $request->city;
    $jobapplicant->pincode = $request->pincode;
    $jobapplicant->resume = $request->resume;
    $jobapplicant->save();

    if($request->id === null) {
        session()->flash('success', 'Jobapplicant Added successfully');
     } else {
        session()->flash('success', 'Jobapplicant Detail Updated successfully');
     }
     
    return redirect()->back();
  }

    