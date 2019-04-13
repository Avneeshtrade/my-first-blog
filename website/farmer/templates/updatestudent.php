

{% extends 'master.html' %}

{% load static %}

{% block title %}
UPDATE STUDENT
{% endblock %}
{% block content %}
<div class='container-fluid body-content'>
<h1>UPDATE STUDENT</h1>
<form action='.' method='post'>
{% csrf_token %}
Book NAME : <input type='text' required />
ISBN NUMBER :<input type='text' required />
<input type='submit' value="delete" />
</form>
</div>
{% endblock %}