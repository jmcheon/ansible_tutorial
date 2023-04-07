NAME = inception

RM = /bin/rm -rf

all : $(NAME) 

$(NAME) :
	@sudo mkdir -p ${HOME}/data/mariadb ${HOME}/data/wordpress
	@sudo docker-compose -f srcs/docker-compose.yml up --force-recreate --build -d

clean :
	@sudo docker-compose -f srcs/docker-compose.yml down --rmi all

fclean : clean
	@sudo ${RM} ${HOME}/data/
	@sudo docker system prune --all --force
	@sudo docker network prune --force
	@sudo docker volume prune --force

re : fclean all
	
stop :
	@sudo docker-compose -f srcs/docker-compose.yml stop

restart :
	@sudo docker-compose -f srcs/docker-compose.yml restart

ps :
	@sudo docker-compose -f srcs/docker-compose.yml ps

.PHONY: all clean fclean re stop restart ps
