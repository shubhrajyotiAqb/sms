<form action="{{ route('admin.students.paymentDetails') }}" method="POST">

@csrf
<div class="modal-header">
    <h4 class="modal-title">
      Payment Details
    </h4>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
</div>

<div class="modal-body">            
	<div class="row">
	<div class="col-md-12">
                @if(!empty($arr_payment_data))
                <div class="card">
                 
                 
                    <div class="card-body p-0">
                        <table class="table table-sm table-hover">
                          <thead>
                            <tr>
                              <th style="width: 10px">#</th>  
                              <th> Mode</th>
                              <th style="width: 90px"> Date</th>
							  <th>Txn. Number</th>
                              <th>Amount</th>
							  <th>Note</th>
                            </tr>
                          </thead>
                          <tbody>
                          @foreach ($arr_payment_data as $fee_data)
                             <tr>

							 <td>{{$fee_data['id']}}</td>  
                              <td>{{$fee_data['payment_mode']}}</td>   
                              <td>{{$fee_data['payment_date']}} </td>
                              <td>{{$fee_data['transaction_number']}}</td>
							  <td>{{$fee_data['paid_amount']}}</td>
                              <td >
							  	
							  <small> {{$fee_data['transaction_note']}}</small>
								
							 </td>
                              
                              
                              
                            </tr>

                            
                            @endforeach
                            
                          
                            
                          </tbody>
                        </table>          
                    </div>
      
                </div>
                @else

					<div class="callout callout-danger">
						<h5>No fees is assign please click on assign fees button </h5>
						
					
					</div>
                	
					
                @endif
              </div>
	
	</div>


</div>

<div class="modal-footer justify-content-between">
	<button type="button" class="btn btn-outline-danger" data-dismiss="modal"><i class="fas fa-times"></i> Close</button>
	@if(!empty($arr_payment_data))
	<button type="submit" class="btn btn-outline-primary"><i class="far fa-check-square"></i> Print</button>
	@endif
</div>
</form>
