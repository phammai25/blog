<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title>Form</title>
	<style type="text/css">
		li{
			list-style-type: none;
			margin-top: 10px;
            font-family: Arial;
            
		}
        input{
            border-radius: 5px;
            font-size: 10px;
        }
        .container{
            width: 1000px;
        }
        .row{
            width: 100%;
        }
        .col-md-12{
            width: 100%;
        }
        .error{
            color: red;
        }
        ::-webkit-input-placeholder {
   			color: #1E90FF;
   			font-size: 15px;
		}
	</style>
   <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <script type="text/javascript">
    // validate form
                    function checkEmail() {
                        var username =document.getElementById("username").value;
                        var sdt =document.getElementById("sdt").value;
                        var password=document.getElementById("password").value;
                        var email=document.getElementById("email").value;
                        var diachi = document.getElementById("diachi").value;
                        var acong= email.indexOf('@');
                        var dodai=email.length-1;
                        var daucham= email.lastIndexOf('.');
                        var daucach=email.indexOf(' ');
                       // var res = web.split('.');
                        if (username==""){
                            document.getElementById("errorusername").innerHTML = "*Vui lòng nhập tên";
                            return false;
                        }
                        else{
                           document.getElementById("errorusername").innerHTML="";
                        }
                        if (sdt==""){
                            document.getElementById("errorsdt").innerHTML = "*Vui lòng nhập số điện thoại";
                            return false;
                        }
                        else{
                           document.getElementById("errorsdt").innerHTML="";
                        }
                         if (password==""){
                            document.getElementById("errorpassword").innerHTML = "*Vui lòng nhập mật khẩu";
                            return false;
                        }
                        else{
                           document.getElementById("errorpassword").innerHTML="";
                        }

                        if (email==""){
                            document.getElementById("erroremail").innerHTML = "*Vui lòng nhập email";
                            return false;
                        }
                        else{
                            if(dodai<=5||acong<1||daucham<=acong+1||daucach!=-1){
                                document.getElementById("erroremail").innerHTML="*Địa chỉ email lỗi.Nhập lại";
                                return false;
                            }
                            else{
                               document.getElementById("erroremail").innerHTML="Nhập đúng";
                            } 
                        }
                         
                    }
    </script>
   
</head>
<body>
    <form action="http://127.0.0.1:8000/registed" name="myform" id="form1" method="POST" onsubmit="return checkEmail()" style="padding-left: 430px">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
                <ul>
                <li><b>Username:</b><br> <input type="text" style="font-size: 15px;width: 270px;height: 30px" id="username" name="username" value="">
                                    <span id="errorusername" class="error"></span>
                </li>
                <li><b>Passwword:</b><br> <input type="password" style="font-size: 15px;width: 270px;height: 30px" id="password" name="password" value="">
                                    <span id="errorpassword" class="error"></span>
                </li>
                <li><b>Số điện thoại:</b><br> <input type="text" style="font-size: 15px;width: 270px;height: 30px" id="sdt" name="sdt" value="">
                    <span id="errorsdt" class="error"></span>
                </li>
                <li><b>Email:</b><br> <input type="text" style="font-size: 15px;width: 270px;height: 30px" id="email" name="email" value="">
                    <span id="erroremail" class="error"></span>
                </li>
                
               
                <li><b>Địa chỉ:</b><br> <input type="text" style="font-size: 15px;width: 270px;height: 30px" id="diachi" name="ldiachi" value="">
                                    <span id="diachi" class="error"></span>
                </li>
                </ul>
                <p><button type="submit", style="background-color: green;color: yellow;margin-left: 116px;padding-top: 17px;width: 100px", name="register", onclick="checkEmail()"  >Submit</p>
                </button>
                </p>
            </form> 
</div>

<script src="bootstrap/jquery.min.js"></script>
<script src="bootstrap/bootstrap.js"></script>
</body>
