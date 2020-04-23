FROM python:3
ADD getHolidays.py /
RUN pip install flask \
    pip install requests
CMD [ "python", "./getHolidays.py" ]