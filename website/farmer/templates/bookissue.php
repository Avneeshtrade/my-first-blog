{% extends 'master.html' %}
{% block title %}
BOOK ISSUE PAGE
{% endblock %}
{% block content %}
<div class="container-fluid body-content">
<form action='' method='post'>
<h1>Book Issue</h1><hr/>
Member_ID:<input type='text' name='userid' required /><p></p>
Book_ID:<input type='text' name='bookid' required /><p></p>
<input type='submit' value='issue'>
</form>
</div>
{% endblock %}