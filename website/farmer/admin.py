# -*- coding: utf-8 -*-
from __future__ import unicode_literals

from django.contrib import admin
from .models import Login_Table,Bookdetail
# Register your models here.
admin.site.register(Login_Table)
admin.site.register(Bookdetail)