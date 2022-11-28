@extends('ec.master.portal');

@section('title','CC Song');

@section('content')
    @parent
    <h3 style='color:blue'>子頁面內容</h3>
    <b style='color:blue'>全域共用變數：{{ $share_prd }}</b><br>
    {{-- <b style='color:blue'>多視圖共用變數 (指定視圖)：{{ $partial_share }}</b><br> --}}
    <b style='color:blue'>多視圖共用變數 (指定某資料夾內all視圖)：{{ $partial_all_share }}</b><br>
@endsection

