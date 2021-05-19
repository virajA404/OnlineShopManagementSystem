@extends('layouts.master')

@section('title', 'HRM')
@section('page-title', 'HRM')
@section('card-title', 'Payroll Management')

@section('content')

<div id="app">
        <div id="navbar">
<<<<<<< HEAD
<<<<<<< HEAD
		<nav class="navbar navbar-expand-lg navbar-dark bg-primary" style="background-color: #e3f2fd;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">HRM</a>
=======
		<nav class="navbar navbar-expand-lg navbar-dark bg-info" style="background-color: #e3f2fd;">
  <div class="container-fluid">
    <h5><a class="navbar-brand" href="#">HRM</a></h5>
>>>>>>> e1872a383f65a428f506c0704f65e55287986f03
=======
		<nav class="navbar navbar-expand-lg navbar-dark bg-info" style="background-color: #e3f2fd;">
  <div class="container-fluid">
    <h5><a class="navbar-brand" href="#">HRM</a></h5>
>>>>>>> 2064e6ee1c0bce3e7a69234813ff91137aac8ca1
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
<<<<<<< HEAD
<<<<<<< HEAD
          <a class="nav-link active" aria-current="page" href="/HRM" >Employee</a>
=======
          <h4><a class="nav-link active" aria-current="page" href="/HRM" >Employee</a></h4>
>>>>>>> 2064e6ee1c0bce3e7a69234813ff91137aac8ca1
        </li>
        <li class="nav-item">
          <h4><a class="nav-link" href="/Attendance" >Attendance</a></h4>
        </li>
        <li class="nav-item">
<<<<<<< HEAD
          <a class="nav-link" href="/Payroll" >Payroll</a>
=======
          <h4><a class="nav-link active" aria-current="page" href="/HRM" >Employee</a></h4>
        </li>
        <li class="nav-item">
          <h4><a class="nav-link" href="/Attendance" >Attendance</a></h4>
        </li>
        <li class="nav-item">
          <h4><a class="nav-link" href="/Payroll" >Payroll</a></h4>
>>>>>>> e1872a383f65a428f506c0704f65e55287986f03
=======
          <h4><a class="nav-link" href="/Payroll" >Payroll</a></h4>
>>>>>>> 2064e6ee1c0bce3e7a69234813ff91137aac8ca1
        </li>
    
      </ul>
    </div>
  </div>
</nav>
</div>

<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="display-5">Add Payroll</h1>
  <div>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('Payroll.store') }}">
          @csrf
         
<<<<<<< HEAD
<<<<<<< HEAD
      <div class="form-group" class="mb-3">
          <label for="empName">Employee Name :</label>
          <input type="text" class="form-control" name="empName" id="empName" />

        </div>
=======
=======
>>>>>>> 2064e6ee1c0bce3e7a69234813ff91137aac8ca1
     
          <div  class="mb-3" class="dropdown">    
              <label for="empName">Employee Name:</label>
                  <select class="form-control" name="empName">
                      @foreach ($employees as $employee)
                          <option value="{{ $employee->id}} &nbsp&nbsp {{$employee ->name}}">{{$employee ->name}}</option>
                      @endforeach
                  
                  </select>
          </div>
<<<<<<< HEAD
>>>>>>> e1872a383f65a428f506c0704f65e55287986f03
=======
>>>>>>> 2064e6ee1c0bce3e7a69234813ff91137aac8ca1
        

          <div class="form-group" class="mb-3">
              <label for="monthYear">Month/Year:</label>
              <input type="month" class="form-control" name="monthYear" id="monthYear" />
          </div>

      <table>
          <tr>
              <td>
                <div class="form-group" class="mb-3">
                    <label for="totalWorkDur">Total Work Duration:</label>
                    <input type="text" class="form-control" name="totalWorkDur" id="totalWorkDur" />
                </div>
              </td>
              <td>
                <div class="form-group" class="mb-3">
                    <label for="durUnit">Duration Unit:</label>
                    <input type="text" class="form-control" name="durUnit" id="durUnit" value="Hour" readonly />
                </div>
              </td>
                <td>
                <div class="form-group" class="mb-3">
                    <label for="amtPerDur">Amount per Duration Unit:</label>
                    <input type="text" class="form-control" name="amtPerDur" id="amtPerDur" />
                </div>
                </td>
          
          </tr>

          </table>

          <div class="form-group" class="mb-3">
              <label for="allow">Allowances:</label>
              <input type="text" class="form-control" name="allow" id="allow" />
          </div>

          <div class="form-group" class="mb-3">
              <label for="deduct">Deductions:</label>
              <input type="text" class="form-control" name="deduct" id="deduct" />
          </div>

          <input type="hidden"  class="form-control" name="gross" id="gross"/>

          <br/><br>
          <button type="submit" class="btn btn-primary">Save</button>
      </form>
  </div>
</div>
</div>

@endsection