@extends('layouts.app')

@section('content')
	<div class="container mt-2">
		<a href="{{ url('create_student')}}">
			<button class="btn btn-info">Add name</button>
		</a>
		<a href="{{ url('create')}}">
			<button class="btn btn-info">Add student</button>
		</a>
		<table class="table mt-2">
			<thead class="thead-dark">
		
				<tr>
					<th>#</th>
				<th>Student name</th>
				<th>Student number</th>
				<th>Enrolled</th>
					<th>Prelim</th>
					<th>Midterm</th>
					<th>SemiFinal</th>
                    <th>Final</th>
					<th>Tuition</th>
                    <th>Status</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				@foreach($students as $student)
					<tr>
						<th scope="row">{{ ++$i }}</th>
						<td>{{ $student->student_type->name }}</td>
						<td>{{ $student->student_number }}</td>
						<td>{{ $student->EnrolledDate}}</td>
						<td>{{ $student->Prelim }}</td>
						<td>{{ $student->Midterm }}</td>
						<td>{{ $student->SemiFinal }}</td>
                        <td>{{ $student->Final }}</td>
						<td>{{$student->Tuition}}</td>
                        <td>{{ $student->Status }}</td> 
						
						<td>
							<a href="{{ url('edit',$student->id)}}">
								<button class="btn btn-success">Edit</button>
							</a>
							<a href="{{ url('status',$student->id)}}">
								<button class="btn btn-">50% D-Pay</button>
							</a>
							<a href="{{ url('delete',$student->id)}}">
								<button class="btn btn-danger">Delete</button>
							</a>
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
@endsection