{% extends 'master.html' %}
{% block title %}

{% endblock %}
{% block content %}
<div class='container-fluid body-content'>
<h1>Create Student</h1>
<form action='createstudent.php' method='post'>
<table class='table table-bordered'><tr><td>
Student Name:</td><td><input type='text' name='member_name' required /></td></tr>
<tr><td>Student Rollno:</td><td><input type='text' name='member_id' required /></td></tr>
<tr><td>Student expirydate:</td><td><input type='text' name='expiry_date' required /></td></tr>
<tr><td>Student Address:</td><td><input type='text' name='address' required /></td></tr>
<tr><td>Student type:</td><td><input type='text' name='member_type' required /></td></tr>
<tr><td colspan='2'><input type='submit' value="create"/></td></tr>
</table>
</form>
</div>
{% endblock %}