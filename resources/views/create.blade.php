@extends('layouts.app')

@section('content')
	<div class="container mt-5">
		<a href="{{ url('/')}}">
			<button class="btn btn-info">Back</button>
		</a>
		<form method="post" action="{{ url('store')}}">
			@csrf
			<div class="row mt-4">
				<div class="col-md-6">
					<div class="form-group">
						<label for="inputAddress">Student name</label>
						<select class="form-control" name="student_type_id" required>
							<option value="" disabled selected> Select Student name</option>
							@foreach($student_types as $type)
								<option value="{{ $type->id }}">{{ ucwords($type->name) }}</option>
							@endforeach
						</select>

							</div>	
						<div class="form-group">
						<label for="inputAddress">Student ID</label>
						<input type="text" class="form-control" name="student_number" placeholder="Enter student number" required> 
			
						</div>
						<div class="form-group">
            	      <label for="">EnrollDate</label>
                    <input type="date" name ="EnrolledDate" class="form-control" required>
           			</div>
					<div class="form-group">
						<label for="inputAddress">Prelim</label>
						<input type="number" class="form-control" name="Prelim"  placeholder="Enter Prelim" required>
					</div>
					<div class="form-group">
						<label for="inputAddress">Midterm</label>
						<input type="number" class="form-control" name="Midterm"  placeholder="Enter Midterm" required>
					</div>
					<div class="form-group">
						<label for="inputAddress">SemiFinal</label>
						<input type="number" class="form-control" name="SemiFinal"  placeholder="Enter SemiFinal" required>
					</div>
                    <div class="form-group">
						<label for="inputAddress">Final</label>
						<input type="number" class="form-control" name="Final"  placeholder="Enter Final" required>
					</div>
					
					<button type="submit" class="btn btn-primary float-right">Submit</button>
				</div>
			</div>  
		</form>
	</div>
@endsection
