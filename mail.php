<!DOCTYPE html>
<html>
<body>
<form onsubmit="regEx(); return false">
Name:<br/>
<input type="text" /><br/>
<br/>
Post/ZIP code (5 digits):<br/>
<input type="text" /><br/>
<br/>
<input type="submit" />
</form>
<script>
function regEx(){
function testName(){
var name = document.getElementsByTagName("input")[0].value;
var nameTest = name.search(/[a-zA-Z]/g);
if (nameTest == -1||name == ""){
alert("Please enter only letters in this field.");
}
}
function testZip(){
var zip = document.getElementsByTagName("input")[1].value;
var zipTest = zip.match(/\d/g);
if (zipTest.length != 5||zip == ""){
alert("Please enter 5 numbers in this field.");
}
}
testName();
testZip();
}
</script>
</body>