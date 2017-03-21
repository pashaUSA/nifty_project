<h1>How-tos</h1>

<dl>
<hr>
  <dt>Upload site to my hosting account</dt>
  <dd><ol>
	<li>Download, install, and launch <a href="https://filezilla-project.org/download.php?show_all=1">FileZilla</a>.</li>
	<li>Complete the following fields, and then click <strong>Quickconnect</strong>.
		<p class="note">To make sure you use the right information, it helps to know <a href="//www.godaddy.com/help/what-type-of-hosting-account-do-i-have-6971">what type of hosting account you have</a>.</p>
	<table>
		<tbody><tr>
			<th>Field</th>
			<th>What to enter...</th>
		</tr>
		<tr>
			<td>Host</td>
			<td>Your domain name or IP address</td>
		</tr>
		<tr>
			<td>Username</td>
			<td>Your FTP username </td>
		</tr>
		<tr>
			<td>Password</td>
			<td>Your FTP password </td>
		</tr>
		<tr>
			<td>Port</td>
			<td>21</td>
		</tr>
		</tbody></table></li>
	<li>In the <strong>Remote Site</strong> area, open your website's root directory .</li>
	<li>In the <strong>Local Site</strong> area, open the folder containing your website. This folder should contain your website's index file - like <code>index.html</code> or <code>index.php</code>.</li>
	<li>To upload your website, select all of your website's files and directories, and then drag them from the <strong>Local Site</strong> area into the <strong>Remote Site</strong> area.
<p class="note">How long it takes to upload your website depends on its size and your internet connection.</p></li>
</ol>
  </dd>
  <hr>
  <dt>To Import SQL Files into MySQL Databases Using phpMyAdmin</dt>
  <dd>
  <ol>
    <li>Access your database via PHPMyAdmin .</li>
<li>Click <img src="https://img1.wsimg.com/help/images/hosting/phpmyadmin/querywindow.png" alt="Query window" align="absmiddle"> (Query window).</li>
<li>(<em>cPanel only</em>) On the left, click the database you want to use.</li>
<li>Go to the <strong>Import files</strong> tab.</li>
<li>Click <strong>Browse</strong>, locate the <code>SQL</code> file on your computer, click <strong>Open</strong>, and then click <strong>Go</strong>.</li>
</ol>
<p>This runs the SQL file and updates the database as specified in your <code>SQL</code> file. It might take several minutes to restore the database.</p>
<p class="note">If you receive an error message stating "Script timeout passed, if you want to finish import, please resubmit same file and import will resume" you can immediately select the same file to import and continue the restore where it left off.</p>
  </dd>
  
  <hr>
  <dt>Change Database credentials</dt>
  <dd><ol>
        <li>Open file '/submit/connection.php' </li>
        <li>Find variable $databaseName, $databaseUser, and $databasePassword </li>
        <li>Assign new values to all three variables, make sure that email is surrounded by single quotes</li>
        <li>Save file and upload it back to the server</li>
      </ol>
  </dd>
  <hr>  
  
  
  <dt>Change recipient's email address for both forms ("contact form" and "request more information form")</dt>
  
  <dd><ol>
        <li>Open file '/sections/functions/variables.php' </li>
        <li>Find variable $emailTo </li>
        <li>Assign new email address to $emailTo, make sure that email is surrounded by single quotes</li>
        <li>Save file and upload it back to the server</li>
        </ol></dd>
        <hr>

</dl>
