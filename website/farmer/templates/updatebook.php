
{% extends 'master.html' %}

{% load static %}

{% block title %}
UPDATE BOOKS
{% endblock %}
{% block content %}
<div class='container-fluid text-center body-content'>
<h1>UPDATE BOOKS</h1>
<form action='.' method='post'>
{% csrf_token %}
<table class='table-striped text-center'>
<tr><td>
Book NAME : </td>
<td><input type='text' required /></td>
</tr><tr><td>ISBN NUMBER :</td>
<td><input type='text' required /></td>
</tr><tr><td>Book NAME :</td>
<td><input type='text' required /></td>
</tr><tr>
<td>
ISBN NUMBER :
</td><td><input type='text' required /></td>
</tr>
<tr><td colspan='2' class='text-center'>
<input type='submit' value="delete" />
</td>
</tr>
</table>
</form>

</div>
{% endblock %}