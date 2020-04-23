FROM ubuntu:16.04

MAINTANER Thiago Alberto "thiago.alberto@intelbras.com.br"

RUN apt-get update -y && \
    apt-get install -y python-pip python-dev\
	apt-get install authbind


# We copy just the requirements.txt first to leverage Docker cache

WORKDIR /app

RUN pip install --upgrade pip \
	pip install flask
	touch /etc/authbind/byport/80
	chmod 777 /etc/authbind/byport/807


COPY . /app

ENTRYPOINT [ "python" ]

CMD [ "app.py" ]