@extends('layouts.app')
@section('content')
<div class="card contain" style="width: 700px">
                <div class="card-header">Payment of fees Form</div>
                     <div class="card-body">
			              <div class="row">
			               <div class="col-md-10">
            		        <form action="/paymentOfFees" method="POST">
            		        	@csrf
            		        	<div class="form-row">
								    <div class="col">
								      <input type="text" class="form-control" name="serial_number"  placeholder="Enter Student Serial Number">
								    </div>
								    <div class="col">
								     <button class="btn btn-success" style="width: 100px">Search</button>
								    </div>
					           </div>
            		        </form>
                             <br>
            		        <!--store form-->
                              <form>
					  <div class="form-row">
					    <div class="col">
					      <label>Name : </label>
					      <input type="text" class="form-control">
					    </div>
					    <div class="col">
					      <label>Department :</label>
					      <input type="text" class="form-control">
					    </div>
					  </div>
					  <br>
					  <div class="form-row">
					    <div class="col">
					      <label>Level :</label>
					      <input type="Email" class="form-control">
					    </div>
					    <div class="col">
					      <label>Total Payment of fees :</label>
					      <input type="text" class="form-control">
					    </div>
					  </div>
					  <br>
					  <div class="form-row">
					    <div class="col">
					      <label>Fees paid: </label>
					      <input type="text" class="form-control">
					    </div>
					    <div class="col">
					      <label>The remaining fees:</label>
					      <input type="text" class="form-control">
					    </div>
					  </div>
					  <br>
					 <div class="form-row">
					    <div class="col">
					      <input type="text" class="form-control" placeholder="Enter the amount to be paid ">
					    </div>
					    <div class="col">
					      <button class="btn btn-primary" style="width: 100px">OK</button>
					    </div>
					  </div>
				  </form>
				            <!--end store form-->
                     </div>  
            	          </div>
                    </div>
 </div>
@endsection
