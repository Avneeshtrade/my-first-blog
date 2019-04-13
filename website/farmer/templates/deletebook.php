{% extends 'master.html' %}

{% load static %}

{% block title %}
DELETE BOOK
{% endblock %}
{% block content %}
<div class='container-fluid body-content'>
<h1>DELETE BOOK</h1>
<form action='createbook.php' method='post'>
{% csrf_token %}
Book ISBN no:<input type='text' required />
Student Rollno :<input type='text' required />
<input type='submit' value="delete" />
</form>
</div>
{% endblock %}