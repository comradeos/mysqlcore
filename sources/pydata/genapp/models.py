from django.db import models


# Create your models here.
class TestData(models.Model):
    int_value = models.IntegerField()
    char_value = models.CharField(max_length=255)