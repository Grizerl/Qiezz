@extends('layouts.home_layout')
@section('title','Додати родича')
@section('content')
<div class="pt-3 pl-3">
   <h2>Cторінка створення родича</h2>
   @if(session('success'))
   <div class="alert alert-success" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
      <h4><i class="icon fa fa-check"></i>{{session('success')}}</h4>
   </div>
   @endif
</div>
<form action="{{route('post.store')}}" method="post">
   @csrf
   <div class="card-body">
      <div class="form-group">
         <label for="exampleInputEmail1">Ім'я</label>
         <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Введіть ім'я">
      </div>
      <div class="form-group">
         <label for="exampleInputPassword1">Прізвище</label>
         <input type="text" name="surname" class="form-control" id="exampleInputPassword1" placeholder="Введіть прізвище">
      </div>
      <div class="form-group">
         <label for="exampleInputFile">Вік</label>
         <input type="text" name="age" class="form-control" id="exampleInputPassword1" placeholder="Введіть вік">
      </div>
      <div class="form-group">
         <label for="exampleInputFile">Статус</label>
         <input type="text" name="status" class="form-control" id="exampleInputPassword1" placeholder="Введіть статус">
      </div>
   </div>
   <div class="card-footer">
      <button type="submit" class="btn btn-primary">Зберегти інформацію</button>
   </div>
</form>
@endsection