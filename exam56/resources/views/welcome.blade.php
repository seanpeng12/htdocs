{{-- inheritance from layouts/app.blade.php --}}
@extends('layouts.app')
@section('content')
    {{-- 
    <div class="container">
        <h1>隨機題庫測試系統</h1>
    </div> 
    --}}
    <h1>隨機題庫測試系統</h1>
   
        @role('管理員')
        <h1>管理員確認</h1>
        @endrole
        @role('老師')
        <h1>老師確認</h1>
        @endrole
        @role('學生')
        <h1>學生確認</h1>
        @endrole
@endsection

@section('my_menu')
    <li><a class="nav-link" href="/home">我的選項</a></li>
    @parent
@stop