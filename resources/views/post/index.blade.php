@extends('layouts.home_layout')
@section('title','Всі члени родини')
@section('content')
<div class="pt-3 pl-3 pb-3">
   <h2>Вся родина </h2>
</div>
<section class="content">
@if(session('success'))
<div class="alert alert-success" role="alert">
   <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
   <h4><i class="icon fa fa-check"></i>{{session('success')}}</h4>
</div>
@endif
<section class="content">
   <div class="card">
      <div class="card-header">
         <h3 class="card-title">Дані про склад сім'ї</h3>
         <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
            <i class="fas fa-minus"></i>
            </button>
         </div>
      </div>
      <div class="card-body p-0">
         <table class="table table-striped projects">
            <thead>
               <tr>
                  <th style="width: 1%">
                     id
                  </th>
                  <th style="width: 20%">
                     Ім'я
                  </th>
                  <th style="width: 30%">
                     Прізвище
                  </th>
                  <th>
                     Вік
                  </th>
                  <th style="width: 8%" class="text-center">
                     Статус
                  </th>
                  <th style="width: 20%">
                  </th>
               </tr>
            </thead>
            <tbody>
               @foreach ($posts as $post)
               <tr>
                  <td>
                     {{$post['id']}}
                  </td>
                  <td>
                     <a>
                     {{$post['name']}}
                     </a>
                     <br>
                  </td>
                  <td>
                     {{$post['surname']}}
                  </td>
                  <td class="project_progress">
                     {{$post['age']}}
                  </td>
                  <td class="project-state">
                     {{$post['status']}}
                  </td>
                  <td class="project-actions text-right">
                     <a class="btn btn-info btn-sm mr-3" href="{{route('post.edit',$post['id'])}}">
                     <i class="fas fa-pencil-alt">
                     </i>
                     Редагування
                     </a>
                     <form action="{{route('post.destroy',$post['id'])}}" method="post" style="display: inline-block;" >
                        @csrf
                        @method('DELETE')
                        <button type="submit"  class="btn btn-danger btn-sm delete-btn">
                        <i class="fas fa-trash">
                        </i>
                        Видалення
                        </button>
                     </form>
                  </td>
               </tr>
               @endforeach
            </tbody>
         </table>
      </div>
   </div>
</section>
@endsection