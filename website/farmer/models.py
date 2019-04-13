# -*- coding: utf-8 -*-
from __future__ import unicode_literals

from django.db import models

# Create your models here.
from django.db import models
from django.contrib.auth.models import User
from django.db.models.signals import post_save
from django.dispatch import receiver

class Login_Table(models.Model):
    username = models.CharField(max_length=100)
    password = models.CharField(max_length=100)

    def __str__(self):
        return self.username

class Bookdetail(models.Model):
    ISBN = models.CharField(max_length=50)
    Book_name = models.CharField(max_length=30)
    book_status = models.BooleanField()
    book_description = models.CharField(max_length=100)
    docfile = models.FileField(upload_to='')
    def __str__(self):
        return self.Book_name

