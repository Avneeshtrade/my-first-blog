from django import forms
from .models import Bookdetail

class LoginForm(forms.Form):
    username= forms.CharField(max_length=50)
    password = forms.CharField(widget=forms.PasswordInput)

class Book_detail(forms.ModelForm):
    docfile = forms.FileField(
        label = 'SELECT a FILE',
        help_text= 'max 42 mb'
    )
    class Meta :
         model =  Bookdetail
         fields = ['ISBN','Book_name','book_status','book_description']

    def __str__(self):
        return self.Book_name
