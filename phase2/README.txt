Readme -Phase2

##############################################################################
•The directory structure contains the following files:

-PubSub.war
-Dockerfile
	
##############################################################################
•Tech stack used is as follows:

-HTML and javascript for frontend 
-Apache Tomcat server
-Docker 
-Softwares used are Java and J2EE
############################################################################## 

•Instructions for executing the code:

1. Installing Docker

1.1 Download and install Docker and keep it running


2. Code Execution - (Linux OS)

2.1. Download the provided Dockerfile and .war file
2.2. Open the terminal and change directory to the location where the WAR and Dockerfile is present.
2.3. Build the docker image using the command - docker build -t <docker_image_name>.
2.4. Run the docker image which is created in the above step- docker run -d --name <container_name> -p <port_number> <docker_image_name>
2.4. Go to the URL : http://localhost:<port_number>/<"path of your project">/index.html till your project folder and run the .html file.
 

