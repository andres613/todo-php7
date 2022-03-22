FROM nginx:latest

RUN mkdir -p /home/home/phpuser/.ssh
RUN echo "StrictHostKeyChecking no" >> /home/home/phpuser/.ssh/config
RUN apt-get update --fix-missing && apt-get install -y \
    vim curl || true \
    && rm -rf /tmp/*

WORKDIR ${HOME}
