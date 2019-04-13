{% extends 'master.html' %}
{% load static %}
{% block message %}

{{ user.username }}

{% endblock %}
{% block content %}

{% endblock %}

{% block footer %}
<div class='jumbotron text-center'>
<a href='https://www.google.com/'><img class="img-thumbnail" src="{% static 'google.jpg' %}"></a></abbr>
<a href='https://www.facebook.com/'><img class="img-thumbnail" src="{% static 'socialicon.jpg' %}"></abbr></a>
<a href='https://twitter.com/login'><img class="img-thumbnail" src="{% static 'twi.jpg' %}"></abbr></a>
<a href='https://www.whatsapp.com/'><img class="img-circle" src="{% static 'whatsapp.png' %}"></abbr></a>
<a href='https://www.quora.com/'><img class="img-circle" src="{% static 'qoura.jpg' %}"></abbr></a>
<a href='https://www.youtube.com/'><img class="img-thumbnail" src="{% static 'youtube.png' %}"></abbr></a>
</div>
{% endblock %}

