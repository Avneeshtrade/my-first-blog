# -*- coding: utf-8 -*-
# Generated by Django 1.11.20 on 2019-03-15 15:10
from __future__ import unicode_literals

from django.db import migrations, models


class Migration(migrations.Migration):

    initial = True

    dependencies = [
    ]

    operations = [
        migrations.CreateModel(
            name='Contact',
            fields=[
                ('id', models.AutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('subject', models.CharField(max_length=100)),
                ('message', models.CharField(max_length=100)),
                ('sender', models.EmailField(max_length=254)),
                ('cc_myself', models.BooleanField()),
            ],
        ),
    ]
