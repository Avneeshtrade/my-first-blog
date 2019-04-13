
{% extends 'master.html' %}

{% load static %}

{% block title %}
DELETE STUDENT
{% endblock %}
{% block content %}
<div class='container-fluid body-content'>
<h1>DELETE STUDENT</h1>
<form action='.' method='post'>
{% csrf_token %}
Book IS<input type='text' required />
Student Rollno :<input type='text' required />
<input type='submit' value="delete" />
</form>
</div>
{% endblock %}