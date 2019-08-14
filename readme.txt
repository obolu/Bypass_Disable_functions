#build an image
docker build -t apache:disable_functions .
#open an image
docker run -d -p 8080:80 apache:disable_functions
#exec docker shell
docker exec -it docker_id /bin/bash
