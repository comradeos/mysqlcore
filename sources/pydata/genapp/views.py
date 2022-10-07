from django.shortcuts import render
from genapp.models import TestData


# Create your views here.
def genapp_page(request):
    testdata_list = TestData.objects.all()

    data = {
        'number': 987654,
        'string': 'mysql connection established',
        'testdata_list': testdata_list,
    }
    return render(request=request, template_name='genapp.html', context=data)
