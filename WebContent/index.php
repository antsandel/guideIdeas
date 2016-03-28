<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>Getting started Idea Studio</title>
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/prism.css" rel="stylesheet">
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link href="css/styles.css" rel="stylesheet">
		<script src="js/jquery-1.12.0.min.js" type="text/javascript"></script> 
		<script src="js/funciones.js" type="text/javascript"></script>
		<script type="text/javascript">
		</script>
	</head>
	<body>
<div id="masthead">  
  <div class="container">
      <div class="row">
        <div class="col-md-7">
          <h1>Getting started:
            <p>Ideas Studio</p>
          </h1>
        </div>
      </div> 
  </div><!--/container-->
</div><!--/masthead-->

<!--main-->
<div class="container">
	<div class="row">
      <!--left-->
      <div class="col-md-3" id="leftCol">
        <ul class="nav nav-stacked" id="sidebar">
          <li><a href="#sec0">Introduction</a></li>
          <li><a href="#sec1">Requirements</a></li>
          <li><a href="#sec2">Installation</a>
          <!-- <ul class="subnav"> -->
          	<li><a href="#secInstallationGit">Git and Sourcetree</a></li>
          	<li><a href="#secInstallationJava">Java</a></li>
          	<li><a href="#secInstallationEclipse">Eclipse</a></li>
          	<li><a href="#secInstallationNetBeans">NetBeans</a></li>
          	<li><a href="#secInstallationTomcat">Tomcat</a></li>
          	<li><a href="#secInstallationDB">DataBase</a></li>
          	<li><a href="#secInstallationDeploy">Deploy</a></li>
          <!-- </ul> -->
		  
        </ul>
      </div><!--/left-->
      
      <!--right-->
      <div class="col-md-9">
      	<div id="sec0">
	        <h2 id="sec0_">Introduction</h2>
	        	<hr>
	        <p>IDEAS is a Java application environment made up of three projects:</p>
			
			<ul><li>ideas-studio : <a href="https://github.com/isa-group/ideas-studio.git">https://github.com/isa-group/ideas-studio.git</a></ul>
			<p>ideas-studio is a java web project which uses functionalities of ideas-repo, and it is ready to connect with modules containing different languages.</p>
			
			<ul><li>ideas-base-module : <a href="https://github.com/isa-group/ideas-base-module.git">https://github.com/isa-group/ideas-base-module.git</a></li></ul>
			<p>ideas-base-module is a java library which collects functionality to create a language module. Every language module uses this library.</p>
			
			<ul><li>ideas-repo : <a href="https://github.com/isa-group/ideas-repo.git">https://github.com/isa-group/ideas-repo.git</a></li></ul>
			<p>ideas-repo is a java library which collects all the functionality of file management, user, etc…</p>
	        
	        <h2>Design</h2> 
	        	<hr>
	        <p>IDEAS is designed to be deployed independently to the language modules. Each language module is a standalone web application that provide a REST API that makes use of IDEAS.</p>
	        <br>
        </div>
        <div id="sec1">
	        <h2 id="sec1_">Requirements</h2>
	        	<hr>
	        <ol>
	        <li><a href="http://www.oracle.com/technetwork/java/javase/downloads/index.html">Java</a> JDK 6 or 7. JRE won’t work. You will need JDK for developing with Maven.Developers.</li>	        
	        <li><a href="http://www.eclipse.org/downloads/">Eclipse</a> for Java EE or <a href="https://netbeans.org/downloads/">Netbeans IDE</a>.</li>
	        <li>Tomcat 7 (<strong>don't</strong> use a higher or lower version). You can also use <a href="https://www.apachefriends.org/es/download.html">XAMPP</a> if you are using Windows.</li>
	        <li>MySQL. You can use <a href="https://www.apachefriends.org/es/download.html">XAMPP</a>.</li>
	        <li><a href="https://www.sourcetreeapp.com/">SourceTree</a>.</li>
	        </ol>
	        <br>
        </div>
	    <div id="sec2">
	 		<h2 id="sec2_">Installation</h2>
	 			<hr>
	 			<p>Follow this guide to setup IDEAS environment in your system.</p>
	 		<div id="secInstallationGit">
	 			<h4 id="secInstallationGit_">Git and Sourcetree:</h4>
	 			<p>The first thing you have to do is to install <a href="https://www.sourcetreeapp.com/">Sourcetree</a>. 
	 			It's an easy and intuitive way to work with git repositories. 
	 			Clone <a href="https://github.com/isa-group/ideas-studio.git">ideas-studio</a> and <a href="https://github.com/isa-group/ideas-repo.git">ideas-repo</a> repositories. 
	 			In this step, <a href="https://github.com/isa-group/ideas-base-module.git">ideas-base-module</a> is not required, because is only used to deploy modules.</p>
	 			
	 			<p>To clone the repositories you can use the following steps on SourceTree:</p>
	 			
	 			<ol class="romanos">
	 			<li>Press Clone/New: <img src="img/buttonClone.png"></li>
	 			<li>Now the clone repository tab , put the url of the repository in "Source Path / URL".</li>
	 			<li>In "Destination Path" you can change the destination where the repository is stored.</li>
	 			<li>Once completed the steps above press "Clone" and wait a few minutes.</li>
	 			<li>When you have finished cloning the repository, we repeat these steps for the other repository.</li>
	 			</ol>
	 			
	 			<p>If you want, you can use the terminal for clone repositories with next commands:</p>
	 			
	 			<pre><code class="language-git">$ git clone https://github.com/isa-group/ideas-studio.git myideasstudio

$ git clone https://github.com/isa-group/ideas-repo.git myideasrepo</code></pre>
	 			
	 			<p>Where myideasstudio and myideasrepo is the folder where the repository is stored.</p>
	 			
	 			<p>Now we have to change the master branch to branch develop. To make this change , follow these steps:</p>
	 			
	 			<ol class="romanos">
	 			<li>Double click on the repository ideas-studio.</li>
	 			<li>Right button in branches and press "New Branches ..."</li>
	 			<li>The label "New Branch" write "develop" and press "Create Branch".</li>
	 			<li>Now, right button on master branch and press "Delete master".</li>
	 			<li>Follow the same steps for ideas-repo.</li>
	 			</ol>
	 			<p>If you have any questions, check the guide <a href="https://www.sourcetreeapp.com/">Sourcetree</a> available in section guides.</p>
	 		
	 		</div>
	 		<div id="secInstallationJava">
		 		<h4>Java:</h4>
		 		<p>A version of the JDK (JRE is not valid) is required. If you don't have it yet, can download and install it.</p>
			
				<p>To set the use JDK instead of JRE in Eclipse:</p>
				<ol class="romanos">
				<li>Go to Eclipse preferences.</li>
				<li>In the left panel:<pre>Java > Installed JREs</pre></li>
				<li>Add JDK using the installation directory. Default directory is: "C:\Program Files\Java\jdkX.X"</li>
				<li>Make sure that you have checked JDK and <strong>uncheck</strong> JREs.</li>
				
				</ol>
	 		</div>
	 		<div id="secInstallationEclipse">
	 			<h4>Eclipse:</h4>
	 			<ol class="romanos">
	 			<li>Once we have all the necessary products, we proceed to import it into Eclipse. Install Eclipse for Java EE Developers version. It will save a lot of time. At least it would be necessary to have a maven plugin for Eclipse, eg: m2e - Maven Eclipse Integration.</li>
	 			<li>Import projects:<pre>Import > Maven > Maven Existing Projects</pre></li>
	 			<li>When you import each project conducted a mvn install: <pre>Right click on the Project > Run As > Maven install</pre></li>
	 			
	 			</ol>
	 		</div>
	       	<div id="secInstallationNetBeans">
	       		<h4>NetBeans IDE:</h4>
	       		<ol class="romanos">
	       		<li>Once we have all the necessary products, we proceed to import it into NetBeans. First of all, Install Netbeans. You can download it from: <a href="https://netbeans.org/downloads/">https://netbeans.org/downloads/</a>. You don’t have to download Maven because it is installed by default in Netbeans.</li>
	       		<li>Open projects: <pre>File > Open project…</pre></li>
	       		<li>When you import each project conducted a mvn install:<pre>Right click on the Project > Clean and build.</pre></li>
	       		</ol>
	       	</div>
	       	<div id="secInstallationTomcat">
	       		<h4>Tomcat and MySQL:</h4>
	       		<p>We will need to install a MySQL server so a simple option would be to install XAMPP that comes with Tomcat v7. You can also install Tomcat separately.</p>
	       		<p>You need to configure the server to work under <strong>SSL</strong> on port 8181, because IDEAS uses https protocol. To do this, follow the next steps:</p>
	       		
	       		<ol class="romanos">
	       		<li>Create a keystore file to store the server's private key and self-signed certificate by executing the following command on console:
	       		<p>Windows:  <pre>"%JAVA_HOME%\bin\keytool" -genkey -alias tomcat -keyalg RSA</pre></p>
	       		<p>Linux: <pre>$JAVA_HOME/bin/keytool -genkey -alias tomcat -keyalg RSA</pre></p>
	       		<p>JAVA_HOME is where we installed the version of java and specify a password value of "changeit".</p></li>
	       		<li>Uncomment the "SSL HTTP/1.1 Connector" entry in <pre>$CATALINA_BASE/conf/server.xml</pre> $CATALINA_BASE is where we have installed Tomcat server. If you have installed xampp in the default path , $CATALINA_BASE will be: "C:\xampp\tomcat".</li>
	       		<li>To configure an SSL connector that uses JSSE, you will need to remove the comments and edit it so it looks something like this:
	       		<pre><code><!--<Connector port="8181" protocol="org.apache.coyote.http11.Http11Protocol"
               maxThreads="150" SSLEnabled="true" scheme="https" secure="true" keystoreFile="${user.home}/.keystore"
			   keystorePass="CHANGEIT"
               clientAuth="false" sslProtocol="TLS"/> --></code></pre>
	       		</li>
	       		<li>Edit redirectPort on "SSL HTTP/1.1 Connector" to:
	       		<pre><code>redirectPort="8181"</code></pre></li>
	       		</ol>
	       		<p>If you have any questions, check the guide <a href="https://tomcat.apache.org/tomcat-7.0-doc/ssl-howto.html">"SSL/TLS Configuration HOW-TO"</a>.
	       		<p>Note: Important: Avoid having to configure more advanced settings and use the password "changeit" for both the certificate and keys store.</p>
	       	</div>
	       	<div id="secInstallationDB">
	       		<h4>Database configuration:</h4>
	  			<p>To install Ideas -studio , we need to create a database.</p>
	       		<ol class="romanos">
	       		<li>For starters , make sure Apache and MySQL are running.</li>
	       		<li>Go to phpmyadmin:
	       		<pre>http://localhost/phpmyadmin/</pre></li>
	       		<li>Create a database with the example name "ideas" or any other you want, and give it a user account privilege, in our example we will use "user" and "password". ideas-studio is configured by default with these example values.</li>
	       		<li>Download <a href="https://raw.githubusercontent.com/wiki/isa-group/ideas-studio/resources/doc/settings.xml">settings.xml</a> and place it on M2_HOME. M2_HOME is "C:\users\%user%\.m2".</li>
	       		<li>If you need, change the database settings by changing the database parameters specified by setting.xml using properties:
	       		<pre><settings.mysqlDB>your-database</settings.mysqlDB>
<settings.mysqlUser>your-database-user</settings.mysqlUser>
<settings.mysqlPass>your-database-password</settings.mysqlPass>
	       		</pre>
	       		</li>
	       		<li>Create the database user with his respectively password, and give him privilege to access and modify the database.</li>
	       		<li>Create ideas database basic schema by importing <a href="https://raw.githubusercontent.com/wiki/isa-group/ideas-studio/resources/doc/ideas_db_dump.sql">ideas_db_dump.sql</a>.</li>
	       		</ol>
	       	</div>
	       	<div id="secInstallationDeploy">
	       		<h4>Deploy:</h4>
	       		<p>To deploy the application, you need to:</p>
	       		<ol class="romanos">
		       		<li>Create a Tomcat server on Eclipse, if it is the first time, you will need to reference Tomcat installation path.</li>
		       		<li>Add the required projects you have cloned to Tomcat server:
		       			<ul><li>ideas-studio</li></ul></li>
		       		<li>We recommend you to configure your <strong>PermGen</strong>:
		       			<ol>
			       			<li>In Eclipse, go to Run > Run Configurations</li>
			       			<li>Select Tomcat server.</li>
			       			<li>Open "Arguments" tab and add into "VM arguments":
			       			<pre>-Xms512m -Xmx1024m -XX:MaxPermSize=256m</pre></li>
			       			<li>Press "Apply".</li>
		       			</ol>
		       			<p>(Netbeans' alternative)</p>
		       			<ol>
			       			<li>In Netbeans, Go to Services.</li>
			       			<li>Left click on Servers > Apache Tomcat or TomEE and right click on Properties.</li>
			       			<li>Open ‘Platform’ tab and add into “VM Options” :
			       			<pre>-Xms512m -Xmx1024m -XX:MaxPermSize=256m</pre></li>
			       			<li>Press "Close".</li>
		       			</ol>
		       		<p>At this point, you are ready to run Tomcat server, and deploy ideas-studio.</p></li>
		       		<li>Press "Start the server".</li>
		       		<li>Once the server was successfully deployed, access <pre>https://localhost:8181/IDEAS</pre> to view the application workbench.</li>
	       		</ol>
			<br>
			<p>Now you have everything ready, it's time to create your own language module here <a href="module.html">Language Module</a>.</p>
			<br>
	       	</div>	
	    </div>
        </div><!--/right-->
  	</div><!--/row-->
</div><!--/container-->



	<!-- script references -->
		<!--<script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>-->
		<script src="js/bootstrap.min.js"></script>
		<script src="js/scripts.js"></script>
		<script src="js/prism.js"></script>
	</body>
</html>