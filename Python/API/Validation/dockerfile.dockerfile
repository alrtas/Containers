FROM ubuntu:16.04

RUN apt-get update -y && \
    apt-get install -y python-pip python-dev

# We copy just the requirements.txt first to leverage Docker cache

WORKDIR /app

RUN pip install --upgrade pip \
	pip install flask

COPY . /app

EXPOSE 80 8080

ENTRYPOINT ["python3"]

CMD [ "app.py" ]