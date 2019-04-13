{% extends 'master.html' %}
{% block title %}
CREATE BOOK
{% endblock %}
{% block content %}
<div class='container-fluid body-content'>
<h1>Create BOOK</h1>
<form action='createbook.php' method='post'>
{% csrf_token %}
Book Name:<input type='text' name='bname' required /><p></p>
Book ISBN no:<input type='text' name='bid' required /><p></p>
Book price:<input type='text' name='bprice' required /><p></p>
Book quantity:<input type='text' name='quantity' required /><p></p>
Book Author:<input type='text' name='bauthor' required /><p></p>
<input type='submit' value="create" />
</form>
</div>
{% endblock %}
