<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    @include("admin/include.maincss") 

</head>

<body>

    @include("admin/include.navbar")

    <div class="wrapper">
        <!-- Sidebar  -->
      @include("admin/include.sidebar")
      <div id="content">
        <!-- Page Content  -->
        @yield('content')
     
        
        @include("admin/include.footer")
      </div>
    </div>
     


    @include("admin/include.script")

</body>

</html>