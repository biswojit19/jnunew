@extends('layouts.backend.main')

@section('title', 'MyBlog | Add new department')

@section('content')

    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Departments
          <small>Add new department</small>
        </h1>
        <ol class="breadcrumb">
          <li>
              <a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Dashboard</a>
          </li>
          <li><a href="{{ route('departments.index') }}">Departments</a></li>
          <li class="active">Add new</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
          <div class="row">
              {!! Form::model($department, [
                  'method' => 'POST',
                  'route'  => 'departments.store',
                  'files'  => TRUE,
                  'id' => 'department-form'
              ]) !!}

              @include('backend.departments.form')

            {!! Form::close() !!}
          </div>
        <!-- ./row -->
      </section>
      <!-- /.content -->
    </div>

@endsection

@include('backend.departments.script')
