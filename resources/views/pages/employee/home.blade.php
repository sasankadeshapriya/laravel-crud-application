@extends('layouts.main')

@section('title','Employee')

@section('bodyContent')
<div class="content-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12 p-5" align="center">
                <h2>Employee Management</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-1">

            </div>
            <div class="col-md-10">
                <div class="form-area p-3 border border-dashed rounded-2">
                    <form action="{{ route('emp.save') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="fullName" class="form-label">Full Name</label>
                                    <input type="text" name="emp_name" class="@error('emp_name') is-invalid @enderror form-control" id="fullName">
                                    @error('emp_name')
                                    <div class="form-text">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="contactNo" class="form-label">Contact No:</label>
                                    <input type="text" name="emp_contact" class="@error('emp_contact') is-invalid @enderror form-control" id="contactNo">
                                    @error('emp_contact')
                                    <div class="form-text">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="address" class="form-label">Address</label>
                                    <input type="text" name="emp_address" class="@error('emp_address') is-invalid @enderror form-control" id="address">
                                    @error('emp_address')
                                    <div class="form-text">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="dob" class="form-label">DOB</label>
                                    <input type="date" name="emp_dob" class="@error('emp_dob') is-invalid @enderror form-control" id="dob">
                                    @error('emp_dob')
                                    <div class="form-text">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3">
                                <label for="exampleInputEmail" class="form-label">Email address</label>
                                <input type="email" name="emp_email" class="@error('emp_email') is-invalid @enderror form-control" id="exampleInputEmail">
                                @error('emp_email')
                                <div class="form-text">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success rounded-2">Register Employee</button>
                    </form>
                </div>

                <div class="table-area mt-5 overflow-x-auto">
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Address</th>
                            <th scope="col">DOB</th>
                            <th scope="col">Email Addrees</th>
                            <th scope="col">Contact No</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($employees as $key => $employee)
                          <tr>
                            <th scope="row">{{ ++$key }}</th>
                            <td>{{ $employee->emp_name }}</td>
                            <td>{{ $employee->emp_address }}</td>
                            <td>{{ $employee->emp_dob }}</td>
                            <td>{{ $employee->emp_email }}</td>
                            <td>{{ $employee->emp_contact }}</td>
                            <td>
                                <a href="{{ route('emp.edit',$employee->id) }}" class="icon-link">
                                    <i class="bi bi-pencil" style="color: green"></i>
                                </a>
                                <a href="{{ route('emp.delete',$employee->id) }}" class="icon-link">
                                    <i class="bi bi-trash" style="color: red"></i>
                                </a>
                            </td>
                          </tr>
                          @endforeach
                        </tbody>
                    </table>
                </div>

            </div>

            <div class="col-md-1">

            </div>
        </div>
    </div>
</div>
@endsection
