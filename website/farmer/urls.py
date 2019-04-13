from django.conf.urls import url
from .views import *
from django.contrib.auth.views import login,logout

urlpatterns = [
    url('index/',index,name='index'),
    url('home/',home,name='home'),
    url('bookcount/', bookcount , name='bookcount'),
    url('bookdeposit/', bookdeposit, name='bookdeposit'),
    url('bookissue/', bookissue, name='bookissue'),
    url('createbook/', createbook, name='createbook'),
    url('createstudent/', createstudent, name='createstudent'),

    url('deletebook/', deletebook, name='deletebook'),
    url('deletestudent/', deletestudent, name='deletestudent'),
    url('displaybook/', displaybook , name='displaybook'),
    url('displaystudent/', displaystudent, name='displaystudent'),
   
    url('index1/', index1, name='index1'),
    url('updatebook/', updatebook, name='updatebook'),
    url('updatestudent/', updatestudent, name='updatestudent'),
    url('login/',login,{'template_name':'login.html'},name='login'),
    url('logout/', logout,{'template_name':'logout.html','next_page':'/blogs/index/'}, name='logout'),

    url('register/',register,name='register'),
url('loginmaster/',loginmaster,name='loginmaster'),
]