@extends('layouts.home_layout')
@section('title','Головна')
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
   <div class="container-fluid">
      <div class="row mb-2">
         <div class="col-sm-6">
            <h1 class="m-0">Головна сторінка проекту</h1>
         </div>
         <!-- /.col -->
      </div>
      <!-- /.row -->
   </div>
   <!-- /.container-fluid -->
</div>
<!-- /.content-header -->
<!-- Main content -->
<section class="content">
   <div class="container-fluid">
      <!-- Small boxes (Stat box) -->
      <div class="row">
         <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
               <div class="inner">
                  <h3>{{$members}}</h3>
                  <p>К-сть членів в родині</p>
               </div>
               <div class="icon">
                  <i class="ion ion-bag"></i>
               </div>
               <a href="{{route('post.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- /.content -->
@endsection