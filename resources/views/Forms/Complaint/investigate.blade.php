@extends('layouts.app')

@section('content')

<div class="sl-mainpanel">
  <nav class="breadcrumb sl-breadcrumb">
    <a class="breadcrumb-item" href="/dashboard">Dashboard</a>
    <a class="breadcrumb-item" href="#">View Report</a>
    <span class="breadcrumb-item active">Complaint Details</span>
  </nav>

  <div class="sl-pagebody">
    <div class="sl-page-title">
      <h5>Complaint Details</h5>
    </div><!-- sl-page-title -->

    <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title mg-b-20 mg-sm-b-30" style="font-size: 20px;">Complaint {{ $complaint->id }}</h6>

              <div class="row">
                <h6 class="card-body-title col-sm-2 form-control-label">Name:</h6>
                <div class="card-info col-sm-4 mg-t-10 mg-sm-t-0">
                {{ $complaint->complainant_name }}
                </div>
                <h6 class="card-body-title col-sm-2 form-control-label">Phone Number:</h6>
                <div class="card-info col-sm-4 mg-t-10 mg-sm-t-0">
                {{ $complaint->phone_no }}
                </div>
              </div><!-- row -->
              <div class="row">
                <h6 class="card-body-title col-sm-2 form-control-label">Department:</h6>
                <div class="card-info col-sm-4 mg-t-10 mg-sm-t-0">
                {{ $complaint->department }}
                </div>
                <h6 class="card-body-title col-sm-2 form-control-label">Date:</h6>
                <div class="card-info col-sm-4 mg-t-10 mg-sm-t-0">
                {{ $complaint->complaint_date }}
                </div>
              </div><!-- row -->
              <div class="row">
                <h6 class="card-body-title col-sm-2 form-control-label">Type of complaint:</h6>
                <div class="card-info col-sm-4 mg-t-10 mg-sm-t-0">
                {{ $complaint->complaint_type }}
                </div>
                <h6 class="card-body-title col-sm-2 form-control-label">Details:</h6>
                <div class="card-info col-sm-4 mg-t-10 mg-sm-t-0">
                {{ $complaint->details }}
                </div>
              </div><!-- row -->
              <hr>
              <div class="row">
                <h6 class="card-body-title col-sm-2 form-control-label">Received by:</h6>
                <div class="col-sm-4 mg-t-10 mg-sm-t-0">
                        @if($complaint->received_by != NULL)
                            {{ $received_by }}
                        @else
                        @endif

                        @php
                            $assignstaff = (auth()->user()->assignstaff == 1);
                        @endphp

                        @if($assignstaff == 1)
                        @if($complaint->received_by == NULL)
                            <button class="btn btn-outline-primary active btn-block wd-xs-40p m-0 mr-1 table-action float-right">
                                <i class="fa fa-id-badge mg-r-10"></i>
                                <a href="{{ url('complaint/assign-staff/'.$complaint->id) }}">Assign Staff</a>
                            </button>
                        @else
                            {{ $received_by }}
                        @endif
                        @else
                        @endif
                </div>
           
                <h6 class="card-body-title col-sm-2 form-control-label">Received date:</h6>
                <div class="card-info col-sm-4 mg-t-10 mg-sm-t-0">
                {{ $complaint->received_date }}
                </div>
              </div><!-- row -->
              <hr>
              <form action="{{ url('/complaint/investigate/store/'.$complaint->id) }}" method="POST">
              @csrf
              <div class="row">
                <h6 class="card-body-title col-sm-4 form-control-label" style="text-decoration:underline;">A. Investigation and Root Cause</h6>
              </div><!-- row -->
              <br>
              <div class="row">
                <h6 class="card-body-title col-sm-4 form-control-label">Investigation details:</h6>
                <div class="card-info col-sm-6 mg-t-10 mg-sm-t-0">
                    <textarea rows="5" class="form-control" name="investigation" placeholder="Investigation details" required></textarea>
                </div>
              </div><!-- row -->
              <hr>
              <div class="row">
                <h6 class="card-body-title col-sm-4 form-control-label" style="text-decoration:underline;">B. Corrective Action Taken</h6>
              </div><!-- row -->
              <br>
              <div class="row">
                <h6 class="card-body-title col-sm-2 form-control-label">Immediate Action:</h6>
                <div class="card-info col-sm-4 mg-t-10 mg-sm-t-0">
                    <div class="row">
                    Action: 
                    <textarea rows="5" class="form-control" name="immediate_action" placeholder="Immediate Action" required></textarea>
                    </div>
                    <br>
                    <div class="row">
                    Completion date:
                    <div class="wd-200">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="icon ion-calendar tx-16 lh-0 op-6"></i></span>
                            <input type="text" name="immediate_completion" class="form-control fc-datepicker" placeholder="MM/DD/YYYY">
                        </div>
                    </div><!-- wd-200 -->
                    </div>
                </div>
                <h6 class="card-body-title col-sm-2 form-control-label">Long-term Action:</h6>
                <div class="card-info col-sm-4 mg-t-10 mg-sm-t-0">
                    <div class="row">
                    Action: 
                    <textarea rows="5" class="form-control" name="longterm_action" placeholder="Long-term Action" required></textarea>
                    </div>
                    <br>
                    <div class="row">
                    Completion date:
                    <div class="wd-200">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="icon ion-calendar tx-16 lh-0 op-6"></i></span>
                            <input type="text" name="longterm_completion" class="form-control fc-datepicker" placeholder="MM/DD/YYYY">
                        </div>
                    </div><!-- wd-200 -->
                    </div>
                </div>
              </div><!-- row -->

              <div class="btn-demo">
                <button type="submit" class="btn btn-outline-primary btn-block mg-b-10">Submit</button>
              </div><!-- btn-demo -->
            </form>
              
        </div><!-- card -->


   </div><!-- sl-pagebody -->
   
    
</div><!-- sl-mainpanel -->

<!-- <script src="https://unpkg.com/@themesberg/flowbite@1.3.0/dist/datepicker.bundle.js"></script> -->

  <!-- <div class="-my-2 w-full mx-auto overflow-x-auto sm:-mx-6 lg:-mx-8">
    <div class="align-middle inline-block min-w-full sm:px-6 lg:px-8">

      <div class="px-3 text-2xl font-bold">
      Complaint Details
      </div>

      <div class="p-8">
  <div class="max-w-full border-dashed border-4 border-gray-600 bg-white flex flex-col rounded overflow-hidden shadow-lg">

    <div class="flex justify-center">
    <div class="flex flex-col w-full p-5 mx-auto card">
            <div class="flex flex-row justify-between ">
                <div class="flex flex-col w-full mx-auto">
                <div class="mb-2 md:mb-1 md:flex items-center">
					<label class="w-52 text-gray-800 block font-bold text-lg uppercase tracking-wide">Name</label>
					<span class="mr-4 inline-block hidden md:block">:</span>
					<div class="flex-1 text-lg">
                    {{ $complaint->complainant_name }}
					</div>
				</div>

				<div class="mb-2 md:mb-1 md:flex items-center">
					<label class="w-52 text-gray-800 block font-bold text-lg uppercase tracking-wide">Phone Number</label>
					<span class="mr-4 inline-block hidden md:block">:</span>
					<div class="flex-1 text-lg">
					{{ $complaint->phone_no }}
					</div>
				</div>

				<div class="mb-2 md:mb-1 md:flex items-center">
					<label class="w-52 text-gray-800 block font-bold text-lg uppercase tracking-wide">Department</label>
					<span class="mr-4 inline-block hidden md:block">:</span>
					<div class="flex-1 text-lg">
					{{ $complaint->department }}
					</div>
				</div>

                <div class="mb-2 md:mb-1 md:flex items-center">
					<label class="w-52 text-gray-800 block font-bold text-lg uppercase tracking-wide">Type of Complaint</label>
					<span class="mr-4 inline-block hidden md:block">:</span>
					<div class="flex-1 text-lg">
					{{ $complaint->complaint_type }}
					</div>

                    <div class="px-6 py-3 text-lg text-right font-semibold">
                    Complaint Date: {{ $complaint->complaint_date }}
                    </div>

				</div>
                <div class="mb-2 md:mb-1 md:flex items-center">
					<label class="w-52 text-gray-800 block font-bold text-lg uppercase tracking-wide">Details</label>
					<span class="mr-4 inline-block hidden md:block">:</span>
					<div class="flex-1 text-lg">
					{{ $complaint->details }}
					</div>
				</div>
                </div>
            </div>

            <div class="mt-4 border-t-2 border-gray-200 "></div>
            
            <div class="pt-6 flex flex-row justify-between ">
                <div class="flex flex-col w-full mx-auto">
                    <div class="mb-2 md:mb-1 md:flex items-center">
                        <label class="w-52 text-gray-800 block font-bold text-lg uppercase tracking-wide">Received by</label>
                        <span class="mr-4 inline-block hidden md:block">:</span>
                        <div class="flex-1 text-lg">
                        {{ $complaint->received_by }}
                        </div>

                    </div>
                    <div class="mb-2 md:mb-1 md:flex items-center">
                        <label class="w-52 text-gray-800 block font-bold text-lg uppercase tracking-wide">Received date</label>
                        <span class="mr-4 inline-block hidden md:block">:</span>
                        <div class="flex-1 text-lg">
                        {{ $complaint->received_date }}
                        </div>
                    </div>
                </div>
            </div>
			<form action="{{ url('/complaint/investigate/store/'.$complaint->id) }}" method="POST">
              @csrf
            <div class="flex justify-between mt-3">
                <div class="flex flex-col ">
                    <div class="text-gray-800 block font-bold text-lg uppercase underline underline-offset-4 tracking-wide">A. Investigation and Root Cause</div>
                    <div class="pt-4 mb-2 md:mb-1 md:flex">
					<label class="pr-2 text-gray-800 block font-bold text-lg uppercase tracking-wide">Investigation Details</label>
					<span class="mr-4 inline-block hidden md:block">:</span>
					<div class="flex-1 text-lg">
					<textarea class="form-control block w-96 px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300
							rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
						id="exampleFormControlTextarea1"
						rows="3"
						name="details"
						placeholder="Investigation Details">
					</textarea>
					</div>
				    </div>
                </div>
               
            </div>
            <div class="mt-3 ">

                <div class="flex text-gray-800 block font-bold text-lg uppercase underline underline-offset-4 tracking-wide">B. Corrective Action Taken</div>
                <table class="table w-full mt-3 table_striped">
                    <thead>
                        <tr>
                            <th class="ltr:text-left rtl:text-right"></th>
                            <th class="ltr:text-left rtl:text-right"></th>
                            <th class="ltr:text-left rtl:text-right"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                            <div class="mb-2 md:mb-1 md:flex">
                                <label class="pr-2 text-gray-800 block font-bold text-lg uppercase tracking-wide">Immediate Action </label>
                                <span class="mr-4 inline-block hidden md:block">:</span>
                                <div class="flex-1 text-lg">
								<textarea class="form-control block w-96 px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300
												rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
											id="exampleFormControlTextarea1"
											rows="3"
											name="immediate_action"
											placeholder="Immediate Action">
								</textarea>
                                <br>
								<div class="w-96 relative">
									<div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
									<svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
									</div>
									<input name="immediate_completion" datepicker-format="yyyy/mm/dd" datepicker="" datepicker-buttons="" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 datepicker-input" placeholder="Select date">
									</div>
                                </div>
                            </div>
                            </td>
                        </tr>
						<tr>
							<td>
							<div class="mb-2 md:mb-1 md:flex">
                                    <label class="pr-2 text-gray-800 block font-bold text-lg uppercase tracking-wide">Long-term Action</label>
                                    <span class="mr-4 inline-block hidden md:block">:</span>
                                    <div class="flex-1 text-lg">
                                    <textarea class="form-control block w-96 px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
										id="exampleFormControlTextarea1"
										name="longterm_action"
										rows="3"
										placeholder="Long-term Action"
										></textarea>
                                    <br>
									<div class="w-96 relative">
									<div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
									<svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
									</div>
									<input name="longterm_completion" datepicker-format="yyyy/mm/dd" datepicker="" datepicker-buttons="" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 datepicker-input" placeholder="Select date">
									</div>
                                	</div>
                                    </div>
                                </div>
							</td>
						</tr>
                    </tbody>
                </table>
				<button type="submit"
						class="flex float-right rounded-sm px-3 py-1 bg-blue-700 hover:bg-blue-500 text-xl text-white focus:shadow-outline focus:outline-none">
						Submit</button>
				</form>
            </div>
    </div>
    </div>
    </div>
 </div> -->

@endsection