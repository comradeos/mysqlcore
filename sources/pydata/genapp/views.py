from django.shortcuts import render

# Create your views here.
def genapp_page(request):
    return render(request=request, template_name='genapp.html')
