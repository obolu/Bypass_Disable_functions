tips:

php1.ini是用disable_function防护了system

php2.ini没做防护

可在dockerfile文件修改使用哪个

创建docker镜像
docker build -t apache:disable_functions .



启动镜像
docker run -d -p 8080:80 apache:disable_functions



使用镜像bash
docker exec -it docker_id /bin/bash
