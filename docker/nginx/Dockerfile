FROM nginx:latest

ENV UID=1000
ENV USER=appuser
ENV HOME=/home/appuser

RUN adduser -u ${UID} --disabled-password --gecos "" ${USER} || true
RUN mkdir -p /home/${USER}/.ssh
RUN chown -R ${USER}:${USER} ${HOME}
RUN echo "StrictHostKeyChecking no" >> ${HOME}/.ssh/config
RUN echo "export COLUMNS=300" >> ${HOME}/.bashrc

RUN apt-get update --fix-missing && apt-get install -y \
    vim curl || true \
    && rm -rf /tmp/*

WORKDIR ${HOME}

COPY default.conf /etc/nginx/conf.d/
