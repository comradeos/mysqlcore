# Generated by Django 4.0.6 on 2022-10-07 10:54

from django.db import migrations, models


class Migration(migrations.Migration):

    initial = True

    dependencies = [
    ]

    operations = [
        migrations.CreateModel(
            name='TestData',
            fields=[
                ('id', models.BigAutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('int_value', models.IntegerField()),
                ('char_value', models.CharField(max_length=255)),
            ],
        ),
    ]
