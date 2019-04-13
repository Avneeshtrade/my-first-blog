


{% extends 'master.html' %}

{% load static %}

{% block title %}
DISPLAY STUDENT
{% endblock %}
{% block content %}
<div class='container-fluid body-content'>
<h1>DISPLAY STUDENT</h1>
<form action='.' method='post'>
{% csrf_token %}
 STUDENT NAME : <input type='text' required />
ROLL NUMBER :<input type='text' required />
<input type='submit' value="delete" />
</form>
</div>
{% endblock %}