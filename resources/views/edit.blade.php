@extends('layouts.app')


@section('content')
  @include('form', ['id' => $task->id])
@endsection