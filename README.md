Sometimes we want to run dockerized old php site that we do not want to work with, or a programmer is gone  and nobody cares to make changes to use email relay host, such as mailgun or gmail or anything else. In the Linux VM or bare metal server it is quite easy task - you run web server and mail server two in one and mail server takes care of mail routing. 

In the dockerized environment usually you want to run the least amount of services possible in the container, so sending mail using PHP's mail() function becomes a tricky.

Let's create a docker-compose.yml file, containing all required containers:

caddy - web server
php - php server for the app
mail - smtp relay server, we will use postfix

the main thing is to use ssmtp on the php container and send data to mail container

enjoy!




