<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
 	<form action="http://127.0.0.1:8000/adminchecked" name="myform" id="form1" method="POST" onsubmit="return checkEmail()" style="padding-left: 430px">
 	<input type="hidden" name="_token" value="{{csrf_token()}}">
                <ul>
                <li><b>Email:</b><br> <input type="text" style="font-size: 15px;width: 270px;height: 30px" id="email" name="email" value="">
                                    <span id="erroremail" class="error"></span>
                </li>
                  <li><b>Passwword:</b><br> <input type="password" style="font-size: 15px;width: 270px;height: 30px" id="password" name="password" value="">
                                    <span id="errorpassword" class="error"></span>
                </li>
                <a href="">Quên mật khẩu
                </ul>
                <p><button type="submit", style="background-color: green;color: yellow;margin-left: 116px;padding-top: 17px;width: 100px", name="login", onclick="checkEmail()"  >LOGIN</button>
               	</p>
               
    </form>
 
</body>
</html>


