FROM ubuntu:16.04

MAINTANER Thiago Alberto "thiago.alberto@intelbras.com.br"

RUN python-pip python-dev

WORKDIR /app

RUN pip install --upgrade pip \
	pip install flask

COPY . /app

ENTRYPOINT [ "python" ]

CMD [ "app.py" ]