@extends('layouts.Newmaster')

@section('title', 'Expense')
@section('page-title', 'Expense')
@section('card-title', 'All Expense')

@section('content')

  <div class="row">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">
          <h5 class="title">All Expense Category With Budget</h5>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead class=" text-primary">
                <th>ID</th>
                <th>Name</th>
                <th>Budget</th>
                <th>timeline</th>
                <th>Description</th>
                <th>action</th>
              </thead>
              <tbody>
                @foreach ($Ex_category as $ex_category)
                <tr>
                  <td>{{$ex_category->id}}</td>
                  <td>{{$ex_category->name}}</td>
                  <td>{{$ex_category->amount}}</td>
                  <td>{{$ex_category->timeline}}{{$ex_category->period}}</td>
                  <td>{{$ex_category->description}}</td>
                  <td>
                    <a class="btn btn-success" href="/editexcategoryview/{{$ex_category->id}}" role="button" value="">Edit</a>
                    <a class="btn btn-danger" href="/deleteexcategory/{{$ex_category->id}}" role="button" value="">Delete</a>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card">
        <div class="card-header">
          <h5 class="title">Add Category With Budget</h5>
        </div>
        <div class="card-body">
          <form method="POST" action="/addcategory">
            {{ csrf_field() }}
            <div class="row">
              <div class="col-md-12">
                @foreach($errors->all() as $error)
                <div class="alert alert-danger" role="alert">
                  <button type="button" aria-hidden="true" class="close">
                    <i class="now-ui-icons ui-1_simple-remove"></i>
                  </button>
                  {{$error}}
                </div>
                @endforeach
                <div class="form-group">
                  <label>Name</label>
                  <input type="text" class="form-control" name="name" placeholder="Enter Expense Category" >
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label>Budget</label>
                  <input type="text" class="form-control" name="amount" placeholder="Enter Your Budget Amount" >
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Budget Timeline</label>
                  <input type="text" class="form-control" name="timeline" placeholder="Enter Your Budget Timeline" >
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Period</label>
                  <input class="form-control" list="Options" name="period" id="brand" placeholder="Select Your Budget Timeline">
                  <datalist id="Options">
                      <option value="Day"">
                      <option value="Month">
                      <option value="Year">
                  </datalist>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label>Description</label>
                  <textarea rows="4" cols="80" class="form-control" name="description" placeholder="Here can be your description"></textarea>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <input type="submit" class="btn btn-primary btn-lg btn-block" value="Add">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <a class="btn btn-danger btn-lg btn-block" href="/Expenses" role="button" value="">Back</a>
                </div>
              </div>
            </div>

          </form>
        </div>
    </div>
  </div>


@endsection