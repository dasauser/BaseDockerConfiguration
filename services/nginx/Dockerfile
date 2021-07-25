FROM nginx:1.14.0

ADD ./config /etc/nginx
ADD ./hosts /etc/nginx/sites-available

RUN ln -s /etc/nginx/sites-available /etc/nginx/sites-enabled

CMD ["nginx", "-g", "daemon off;"]