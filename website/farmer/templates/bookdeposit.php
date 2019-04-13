{% extends 'master.html' %}
{% block title %}
BOOK DEPOSIT
{% endblock %}
{% block content %}
<div class="container-fluid body-content">
<form action='' method='post'>
{% csrf_token %}
<h1>Book deposit</h1><hr/>
Member_ID:<input type='text' name='userid' required /><p></p>
Book_ID:<input type='text' name='bookid' required /><p></p>
<input type='submit' value="deposit" >
</form>
</div>
{% endblock %}