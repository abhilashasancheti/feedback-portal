<?xml version="1.0" ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">

<head>
<title>Form Test 1</title>
</head>

<body>
<form action="http://www.example.org" name = "frmTest1" method="get">
<table border=3>
<tr>
<td>Marital Status: </td>
<td><input type="radio" name="marital_status" value="s" id="single" checked="checked" /> <-- NOT SET
<label for="single">Single</label></td>
</tr>
<tr>
<td></td>
<td><input type="radio" name="marital_status" value="m" id="married" />
<label for="married">Married</label></td>
</tr>
<tr>
<td></td>
<td><input type="radio" name="marital_status" value="d" id="divorced" />
<label for="divorced">Divorced</label></td>
</tr>
<tr>
<td></td>
<td><input type="radio" name="marital_status" value="w" id="widow" />
<label for="widow">Widow_Widower</label></td>
</tr>
</table>

<input type="radio" name="marital_status" value="s" id="single" checked="checked" /> Single<br /> <-- THIS IS SET
<input type="radio" name="marital_status" value="m" id="married" /> Married<br />
<input type="radio" name="marital_status" value="d" id="divorced" /> Divorced<br />
<input type="radio" name="marital_status" value="w" id="widow" /> Widow/Widower<br />

</form>
</body>
</html> 