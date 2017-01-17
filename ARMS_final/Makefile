Cflag = -I/usr/include/mysql -fabi-version=2 -fno-omit-frame-pointer
Libs = -L/usr/lib/x86_64-linux-gnu -lmysqlclient -lpthread -lm -lrt -ldl
all:
	gcc -Wall -O Centralised_server.c dependencies.c $(Cflag) $(Libs) -pthread -o adms_server -w
	gcc -Wall -O Airline_client.c dependencies.c $(Cflag) $(Libs) -o airline -w 
	gcc -Wall -O Sysadmin_client.c dependencies.c $(Cflag) $(Libs) -o sysadmin -w
	gcc -Wall -O Customer_client.c dependencies.c $(Cflag) $(Libs) -o customer -w
