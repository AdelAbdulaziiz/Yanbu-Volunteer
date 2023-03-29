var emailmess = document.getElementById("emailmess");
emailmess.style.display = "none";
function ValidateEmail(inputText)
{
var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
if(inputText.value.match(mailformat))
{emailmess.style.display = "none";
document.form1.text1.focus();
return true;
}
else
{
	emailmess.style.display = "block";
	
document.form1.text1.focus();
return false;
}
}

var passcmess = document.getElementById("passcmess");
passcmess.style.display = "none";
function Validatepass(inputText1)
{
var pass = document.getElementById("pass");
if(inputText1.value.match(pass.value))
{passcmess.style.display = "none";
document.form1.text1.focus();
return true;
}
else
{
	passcmess.style.display = "block";
	
document.form1.text1.focus();
return false;
}
}  



         var loginText = document.querySelector(".title-text .login");
         var loginForm = document.querySelector("form.login");
         var loginBtn = document.querySelector("label.login");
         var signupBtn = document.querySelector("label.signup");
         var signupLink = document.querySelector("form .signup-link a");
         signupBtn.onclick = function(){
           loginForm.style.marginLeft = "-50%";
           loginText.style.marginLeft = "-50%";
         };
         loginBtn.onclick = function(){
           loginForm.style.marginLeft = "0%";
           loginText.style.marginLeft = "0%";
         };
         signupLink.onclick = function(){
           signupBtn.click();
           return false;
         };

