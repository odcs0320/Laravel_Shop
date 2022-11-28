<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') E-commerce Portal</title>
</head>
<body>
    @section('content')
        <h2>Welcome to CC Song E-commerce</h2>
        <div>bla bla ...</div>
        <p style='color:red'>全域共用變數：{{ $share_prd }}</p>
        {{-- <p style='color:red'>多視圖共用變數 (指定視圖)：{{ $partial_share }}</p> --}}
        <p style='color:red'>多視圖共用變數 (指定某資料夾內all視圖)：{{ $partial_all_share }}</p>
    @show
</body>
</html>