
<SCRIPT>
function passWord() {
var testV = 1;
var pass1 = prompt('Please Enter Your Password',' ');
while (testV < 3) {
if (!pass1) 
history.go(-1);
if (pass1.toLowerCase() == "letmein") {
alert('You Got it Right!');
location.href = "index.php?p=m1";
break;
} 
else if (pass1.toLowerCase() == "letmego") {
alert('You Got it Right!');
location.href = "index.php?p=m2";
break;
} 
else if (pass1.toLowerCase() == "letitgo") {
alert('You Got it Right!');
location.href = "index.php?p=m3";
break;
} 
testV+=1;
var pass1 = 
prompt('Access Denied - Password Incorrect, Please Try Again.','Password');
}
if (pass1.toLowerCase()!="password" & testV ==3) 
history.go(-1);
return " ";
} 
</SCRIPT>
<CENTER>
<FORM>
<input type="button" value="Enter Protected Area" onClick="passWord()">
</FORM>
</CENTER>

