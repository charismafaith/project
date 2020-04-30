@extends('layouts.app')

@section('content')
	<div class="container mt-5">
		<a href="{{ url('/')}}">
			<button class="btn btn-info">Back</button>
		</a>
		<form method="post" action="{{ url('update',$student->id)}}">
			@csrf
			<div class="row mt-8">
				<div class="col-md-6">
					<div class="form-group">
						<label for="inputAddress">Student Name</label>
						<select class="form-control" name="student_type_id" required>
							<option value="" disabled selected> Select Student Type</option>
							@foreach($student_types as $type)
								<option value="{{ $type->id }}" {{ old('student_type_id',$student->student_type_id) == $type->id ? 'selected' : ''}}>
									{{ ucwords($type->name) }}
								</option>
							@endforeach
						</select>
					</div>
					<div class="form-group">
						<label for="inputAddress">ID #</label>
						<input type="text" class="form-control" name="student_number" value="{{ old('student_number',$student->student_number) }}" placeholder="Enter room number" required> 
					</div>
					<div class="form-group">
                  <label for="">EnrollDate</label>
                    <input type="date" name ="EnrolledDate" value="{{ old('EnrolledDate',$student->EnrolledDate) }}" class="form-control" required>
         		  </div>
					<div class="form-group">
						<label for="inputAddress">Prelim</label>
						<input type="text" class="form-control" name="Prelim" value="{{ old('Prelim',$student->Prelim) }}" placeholder="Enter Prelim" required>
					</div>
					<div class="form-group">
						<label for="inputAddress">Midterm</label>
						<input type="text" class="form-control" name="Midterm" value="{{ old('Midterm',$student->Midterm) }}" placeholder="Enter Midterm" required>
					</div>
					<div class="form-group">
						<label for="inputAddress">SemiFinal</label>
						<input type="text" class="form-control" name="SemiFinal" value="{{ old('SemiFinal',$student->SemiFinal) }}" placeholder="Enter SemiFinal" required>
						</div>
						<div class="form-group">
						<label for="inputAddress">Final</label>
						<input type="text" class="form-control" name="Final" value="{{ old('Final',$student->Final) }}" placeholder="Enter Final" required>
					</div>
					
                    
					<button type="submit" class="btn btn-primary float-right">Submit</button>
				</div>
			</div>  
		</form>
	</div>
@endsection