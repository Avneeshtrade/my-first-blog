# -*- coding: utf-8 -*-
from __future__ import unicode_literals
from django.shortcuts import render_to_response,render,redirect
#from .models import Login_Table
from .forms import Book_detail
from django.http import HttpResponseRedirect
#from django.core.mail import send_mail
# Create your views here.
import datetime
from django.contrib.auth.forms import UserCreationForm

def index(request):
    detail=datetime.datetime.now()
    date=datetime.date.today()
    time=datetime.time
    return render_to_response("index.html",context={'name':'index page','detail':detail,'date':date,'time':time})

def home(request):
    return render_to_response('home.php',{})

def bookcount(request):
    return render_to_response('bookcount.php',{})

def bookdeposit(request):
    return render(request,'bookdeposit.php',{})

def bookissue(request):
    return render_to_response('bookissue.php',{})

def createbook(request):
    return render_to_response('createbook.php',{})

def createstudent(request):
    return render_to_response('createstudent.php',{})



def deletebook(request):
    return render_to_response('deletebook.php',{})

def deletestudent(request):
    return render_to_response('deletestudent.php',{})

def displaybook(request):
    return render_to_response('displaybook.php',{})

def displaystudent(request):
    return render_to_response('displaystudent.php',{})

def index1(request):
    return render_to_response('index.php',{})

def updatebook(request):
    return render_to_response('updatebook.php',{})

def updatestudent(request):
    return render_to_response('updatestudent.php',{})

def register(request):
    if request.method == 'POST':
        form = UserCreationForm(request.POST)
        if form.is_valid() :
            form.save()
            return redirect('/blogs/index/')
    else:
        form = UserCreationForm()
    return render(request, 'register.html', {'form': form})


def loginmaster(request):
    data = None
    if request.method == 'POST':
        form = Book_detail(request.POST)
        if form.is_valid():
            form.save()
            data = form.cleaned_data
    else :
        form = Book_detail()
    return render(request,'loginmaster.html',{'form':form,'data':data})