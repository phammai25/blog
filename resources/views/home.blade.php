<!DOCTYPE html>
<html>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}"> 
<link rel="stylesheet" type="text/css" href="{{ asset('css/test.css') }}">

<head>
    <title>BLOG</title>
</head>
<body>
<center>
    <div id="container">
        <nav class="navbar ">
            <div class="container-fluid">
                <ul style="float: left;" class="navbar-header">
                    <li > <a href="#" >HOME</a> </li>
                    <li > <a href="#">POST</a> </li>
                </ul>
                <div style="float: right;" class="dropdown"><a href=""><img src="{{asset('img/login.png')}}" style="width: 40px"></a>
                    <div class="dropdown-content">
                        <table >
                            <tr><td><a href="{{url('http://127.0.0.1:8000/login')}}">Đăng Nhập</a></td></tr>
                            <tr><td><a href="{{url("http://127.0.0.1:8000/register")}}">Đăng kí</a></td></tr>
                        </table>
                    </div>
                </div>
            </div>
        </nav>
      </center>
           @foreach ($post as $arr)

               <div style="margin-left: 20px"><p style="color: blue"><a href=""><?php echo $arr['tag']?></a></p></div> 
               <div style="margin-left: 20px"><p style="color: red;font-size:10px"><?php echo $arr['created_at']?></p></div>
                
           @endforeach
      
    </div>
    
</body>
</html>
