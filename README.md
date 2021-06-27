# webApp
PARA HACER FUNCIONAR EL DOCKER
docker build -t webapp:v1 .

CREACIÓN DEL CONTENEDOR
docker run -it -p 8080:8080 -v /workspace/webApp/docker:/docker --name webapp -h webapp webapp:v1