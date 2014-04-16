/* This is a php IRC bot by goeo_
 * It doesn't have many commands, but, meh.
 * It be tha best bot evar.
 */
 
<?php
include "jokes.php";
eval(base64_decode("CgovKioKICogR29vZ2xlIFRyYW5zbGF0ZSBQSFAgY2xhc3MKICoKICogQGF1dGhvciAgICAgIExldmFuIFZlbGlqYW5hc2h2aWxpIDxtZUBzdGljaG96YS5jb20+CiAqIEBsaW5rICAgICAgICBodHRwOi8vc3RpY2hvemEuY29tLwogKiBAdmVyc2lvbiAgICAgMS4zLjAKICogQGFjY2VzcyAgICAgIHB1YmxpYwogKi8KY2xhc3MgR29vZ2xlVHJhbnNsYXRlIHsKICAgIAogICAgLyoqCiAgICAgKiBMYXN0IHRyYW5zbGF0aW9uCiAgICAgKiBAdmFyIHN0cmluZwogICAgICogQGFjY2VzcyBwcml2YXRlCiAgICAgKi8KICAgIHB1YmxpYyAkbGFzdFJlc3VsdCA9ICIiOwogICAgCiAgICAvKioKICAgICAqIExhbmd1YWdlIHRyYW5zbGF0aW5nIGZyb20KICAgICAqIEB2YXIgc3RyaW5nCiAgICAgKiBAYWNjZXNzIHByaXZhdGUKICAgICAqLwogICAgcHJpdmF0ZSAkbGFuZ0Zyb207CiAgICAKICAgIC8qKgogICAgICogTGFuZ3VhZ2UgdHJhbnNsYXRpbmcgdG8KICAgICAqIEB2YXIgc3RyaW5nCiAgICAgKiBAYWNjZXNzIHByaXZhdGUKICAgICAqLwogICAgcHJpdmF0ZSAkbGFuZ1RvOwogICAgCiAgICAvKioKICAgICAqIEdvb2dsZSBUcmFuc2xhdGUgVVJMIGZvcm1hdAogICAgICogQHZhciBzdHJpbmcKICAgICAqIEBhY2Nlc3MgcHJpdmF0ZQogICAgICovCiAgICBwcml2YXRlIHN0YXRpYyAkdXJsRm9ybWF0ID0gImh0dHA6Ly90cmFuc2xhdGUuZ29vZ2xlLmNvbS90cmFuc2xhdGVfYS90P2NsaWVudD10JnRleHQ9JXMmaGw9ZW4mc2w9JXMmdGw9JXMmaWU9VVRGLTgmb2U9VVRGLTgmbXVsdGlyZXM9MSZvdGY9MSZwYz0xJnRycz0xJnNzZWw9MyZ0c2VsPTYmc2M9MSI7CgogICAgLyoqCiAgICAgKiBDbGFzcyBjb25zdHJ1Y3RvcgogICAgICogCiAgICAgKiBAcGFyYW0gc3RyaW5nICRmcm9tIExhbmd1YWdlIHRyYW5zbGF0aW5nIGZyb20gKE9wdGlvbmFsKQogICAgICogQHBhcmFtIHN0cmluZyAkdG8gTGFuZ3VhZ2UgdHJhbnNsYXRpbmcgdG8gKE9wdGlvbmFsKQogICAgICogQGFjY2VzcyBwdWJsaWMKICAgICAqLwogICAgcHVibGljIGZ1bmN0aW9uIF9fY29uc3RydWN0KCRmcm9tID0gImVuIiwgJHRvID0gImthIikgewogICAgICAgICR0aGlzLT5zZXRMYW5nRnJvbSgkZnJvbSktPnNldExhbmdUbygkdG8pOwogICAgfQoKICAgIC8qKgogICAgICogU2V0IGxhbmd1YWdlIHdlIGFyZSB0cmFuc2xldGluZyBmcm9tCiAgICAgKiAKICAgICAqIEBwYXJhbSBzdHJpbmcgJGZyb20gTGFuZ3VhZ2UgY29kZQogICAgICogQHJldHVybiBHb29nbGVUcmFuc2xhdGUKICAgICAqIEBhY2Nlc3MgcHVibGljCiAgICAgKi8KICAgIHB1YmxpYyBmdW5jdGlvbiBzZXRMYW5nRnJvbSgkbGFuZykgewogICAgICAgICR0aGlzLT5sYW5nRnJvbSA9ICRsYW5nOwogICAgICAgIHJldHVybiAkdGhpczsKICAgIH0KICAgIAogICAgLyoqCiAgICAgKiBTZXQgbGFuZ3VhZ2Ugd2UgYXJlIHRyYW5zbGV0aW5nIHRvCiAgICAgKiAKICAgICAqIEBwYXJhbSBzdHJpbmcgJHRvIExhbmd1YWdlIGNvZGUKICAgICAqIEByZXR1cm4gR29vZ2xlVHJhbnNsYXRlCiAgICAgKiBAYWNjZXNzIHB1YmxpYwogICAgICovCiAgICBwdWJsaWMgZnVuY3Rpb24gc2V0TGFuZ1RvKCRsYW5nKSB7CiAgICAgICAgJHRoaXMtPmxhbmdUbyA9ICRsYW5nOwogICAgICAgIHJldHVybiAkdGhpczsKICAgIH0KICAgIAogICAgCiAgICAvKioKICAgICAqIFNpbXBsaWZpZWQgY3VybCBtZXRob2QKICAgICAqIEBwYXJhbSBzdHJpbmcgJHVybCBVUkwKICAgICAqIEBwYXJhbSBhcnJheSAkcGFyYW1zIFBhcmFtZXRlciBhcnJheQogICAgICogQHBhcmFtIGJvb2xlYW4gJGNvb2tpZVNldAogICAgICogQHJldHVybiBzdHJpbmcKICAgICAqIEBhY2Nlc3MgcHVibGljCiAgICAgKi8KICAgIHB1YmxpYyBzdGF0aWMgZmluYWwgZnVuY3Rpb24gbWFrZUN1cmwoJHVybCwgYXJyYXkgJHBhcmFtcyA9IGFycmF5KCksICRjb29raWVTZXQgPSBmYWxzZSkgewogICAgICAgIGlmICghJGNvb2tpZVNldCkgewogICAgICAgICAgICAkY29va2llID0gdGVtcG5hbSgiL3RtcCIsICJDVVJMQ09PS0lFIik7CiAgICAgICAgICAgICRjaCA9IGN1cmxfaW5pdCgkdXJsKTsKICAgICAgICAgICAgY3VybF9zZXRvcHQoJGNoLCBDVVJMT1BUX0NPT0tJRUpBUiwgJGNvb2tpZSk7CiAgICAgICAgICAgIGN1cmxfc2V0b3B0KCRjaCwgQ1VSTE9QVF9SRVRVUk5UUkFOU0ZFUiwgdHJ1ZSk7CiAgICAgICAgICAgICRvdXRwdXQgPSBjdXJsX2V4ZWMoJGNoKTsKCiAgICAgICAgICAgIC8vIENsZWFuIHVwIHRlbXBvcmFyeSBmaWxlCiAgICAgICAgICAgIHVuc2V0KCRjaCk7CiAgICAgICAgICAgIHVubGluaygkY29va2llKTsKCiAgICAgICAgICAgIHJldHVybiAkb3V0cHV0OwogICAgICAgIH0KICAgICAgICAKICAgICAgICAkcXVlcnlTdHJpbmcgPSBodHRwX2J1aWxkX3F1ZXJ5KCRwYXJhbXMpOwoKICAgICAgICAkY3VybCA9IGN1cmxfaW5pdCgkdXJsIC4gIj8iIC4gJHF1ZXJ5U3RyaW5nKTsKICAgICAgICBjdXJsX3NldG9wdCgkY3VybCwgQ1VSTE9QVF9DT09LSUVGSUxFLCAkY29va2llKTsKICAgICAgICBjdXJsX3NldG9wdCgkY3VybCwgQ1VSTE9QVF9SRVRVUk5UUkFOU0ZFUiwgdHJ1ZSk7CiAgICAgICAgJG91dHB1dCA9IGN1cmxfZXhlYygkY3VybCk7CiAgICAgICAgCiAgICAgICAgcmV0dXJuICRvdXRwdXQ7CiAgICB9CgogICAgLyoqCiAgICAgKiBUcmFuc2xhdGUgdGV4dAogICAgICogCiAgICAgKiBAcGFyYW0gc3RyaW5nICRzdHJpbmcgVGV4dCB0byB0cmFuc2xhdGUKICAgICAqIEByZXR1cm4gc3RyaW5nL2Jvb2xlYW4gVHJhbnNsYXRlZCB0ZXh0CiAgICAgKiBAYWNjZXNzIHB1YmxpYwogICAgICovCiAgICBwdWJsaWMgZnVuY3Rpb24gdHJhbnNsYXRlKCRzdHJpbmcpIHsKICAgICAgICAkdXJsID0gc3ByaW50ZihzZWxmOjokdXJsRm9ybWF0LCByYXd1cmxlbmNvZGUoJHN0cmluZyksICR0aGlzLT5sYW5nRnJvbSwgJHRoaXMtPmxhbmdUbyk7CiAgICAgICAgJHJlc3VsdCA9IHByZWdfcmVwbGFjZSgnISwrIScsICcsJywgc2VsZjo6bWFrZUN1cmwoJHVybCkpOyAvLyByZW1vdmUgcmVwZWF0ZWQgY29tbWFzIChjYXVzaW5nIEpTT04gc3ludGF4IGVycm9yKQogICAgICAgICRyZXN1bHRBcnJheSA9IGpzb25fZGVjb2RlKCRyZXN1bHQsIHRydWUpOwogICAgICAgICRmaW5hbFJlc3VsdCA9ICIiOwogICAgICAgIGlmKCFlbXB0eSgkcmVzdWx0QXJyYXlbMF0pKXsKICAgICAgICAgICAgZm9yZWFjaCAoJHJlc3VsdEFycmF5WzBdIGFzICRyZXN1bHRzKQogICAgICAgICAgICAgICAgJGZpbmFsUmVzdWx0IC49ICRyZXN1bHRzWzBdOwogICAgICAgICAgICByZXR1cm4gJHRoaXMtPmxhc3RSZXN1bHQgPSAkZmluYWxSZXN1bHQ7CiAgICAgICAgfQogICAgICAgIGVsc2V7CiAgICAgICAgICAgIHJldHVybiBmYWxzZTsKICAgICAgICB9CiAgICB9CgogICAgLyoqCiAgICAgKiBTdGF0aWMgbWV0aG9kIGZvciB0cmFuc2xhdGluZyB0ZXh0CiAgICAgKiAKICAgICAqIEBwYXJhbSBzdHJpbmcgJHN0cmluZyBUZXh0IHRvIHRyYW5zbGF0ZQogICAgICogQHBhcmFtIHN0cmluZyAkZnJvbSBMYW5ndWFnZSBjb2RlCiAgICAgKiBAcGFyYW0gc3RyaW5nICR0byBMYW5ndWFnZSBjb2RlCiAgICAgKiBAcmV0dXJuIHN0cmluZy9ib29sZWFuIFRyYW5zbGF0ZWQgdGV4dAogICAgICogQGFjY2VzcyBwdWJsaWMKICAgICAqLwogICAgcHVibGljIHN0YXRpYyBmdW5jdGlvbiBzdGF0aWNUcmFuc2xhdGUoJHN0cmluZywgJGZyb20sICR0bykgewogICAgICAgICR1cmwgPSBzcHJpbnRmKHNlbGY6OiR1cmxGb3JtYXQsIHJhd3VybGVuY29kZSgkc3RyaW5nKSwgJGZyb20sICR0byk7CiAgICAgICAgJHJlc3VsdCA9IHByZWdfcmVwbGFjZSgnISwrIScsICcsJywgc2VsZjo6bWFrZUN1cmwoJHVybCkpOyAvLyByZW1vdmUgcmVwZWF0ZWQgY29tbWFzIChjYXVzaW5nIEpTT04gc3ludGF4IGVycm9yKQogICAgICAgICRyZXN1bHRBcnJheSA9IGpzb25fZGVjb2RlKCRyZXN1bHQsIHRydWUpOwogICAgICAgICRmaW5hbFJlc3VsdCA9ICIiOwogICAgICAgIGlmKCFlbXB0eSgkcmVzdWx0QXJyYXlbMF0pKXsKICAgICAgICAgICAgZm9yZWFjaCAoJHJlc3VsdEFycmF5WzBdIGFzICRyZXN1bHRzKQogICAgICAgICAgICAgICAgJGZpbmFsUmVzdWx0IC49ICRyZXN1bHRzWzBdOwogICAgICAgICAgICByZXR1cm4gJHRoaXMtPmxhc3RSZXN1bHQgPSAkZmluYWxSZXN1bHQ7CiAgICAgICAgfQogICAgICAgIGVsc2V7CiAgICAgICAgICAgIHJldHVybiBmYWxzZTsKICAgICAgICB9CiAgICB9Cgp9CgoK"));

set_time_limit(0);
$server = "irc.freenode.org";
$nick = "phonebot2";
$channels = array("#goeosbottest", "#dchatt","#atxhack");
$port = 6667;
$connection = fsockopen("$server", $port);
$statusses = array("i'm fine, thank you","i'm fealing great! how r u doing?","yeah, i'm a little tired...","nah, could be better","i'm well","idk how i am feeling....");
fputs ($connection, "USER $nick $nick $nick $nick :$nick\n");//lulz
fputs ($connection, "NICK $nick\n");
foreach($channels as $channel)
{
fputs ($connection, "JOIN {$channel}\n");
}
while(1){
	while($data = fgets($connection)){
	echo nl2br($data);
	flush();
	
	$a1 = explode(' ', $data);
	$a2 = explode(':', $a1[3]);
	$a3 = explode('@', $a1[0]);
	$a4 = explode('!', $a3[0]);
	$a5 = explode(':', $a4[0]);
	$a6 = explode(':', $data);
	$onlyword = substr($a1[4], 0, -1);
	$user = $a5[1];
	$inchannel = $a1[2];
	$firstword = $a1[4];
	if($a1[0] == "PING"){
		fputs($connection, "PONG ".$a1[1]."\n");
	}
	$args = NULL; for ($i = 4; $i < count($a1); $i++) {$args .= $a1[$i] . ' ';}
	$all = substr($args, 0, -1);
	
	$len = strlen($firstword) + 1;
	$argsafterfirstword = substr($all,$len);
	if (strpos($data, " PRIVMSG {$nick} :say")!== false){
		foreach($channels as $channel)
{
fputs($connection, "PRIVMSG {$channel} : {$all}\n");
}
	}
if (strpos($data, " PRIVMSG {$nick} :leave")!== false){

fputs($connection, "PART {$firstword}\n");
	}
else if (strpos($data, "INVITE {$nick} :")!== false){
$cmd = "JOIN {$a6[2]}";
		fputs($connection, "{$cmd}\n");
echo "{$cmd}\n";
//print_r(get_defined_vars());
	}
/*else if (strpos($data, " PRIVMSG {$nick} :cs")!== false){
$cmd = "PRIVMSG ChanServ :OP {$channels} daniel664";
		fputs($connection, "{$cmd}\n");
echo "{$cmd}\n";
	}
*/
	if ($a6[2]==$nick){
if(strpos($firstword, 'google')!== false){
$q = $argsafterfirstword;

$args = explode(" ",$q);
$numofans = 1;
$nr = "";
foreach($args as $key => $arg){
if($arg == "-count")
{
$numofans = $args[$key+1];
unset($args[$key+1]);
unset($args[$key]);
}
}
$nr = implode(" ",$args);
print_r($args);
echo "\n$nr";
echo "number of answers = $numofans\n";
$q = $nr;
fputs($connection, "PRIVMSG {$inchannel} :{$user}: Googling for {$q}\n");
$q = urlencode($q);
$result = google($q)['responseData']['results'];
for($i=0;$i<$numofans;$i++)
{
$tp = dispans($i,$result);
putter($tp, "{$inchannel} :{$user}:",$connection);
usleep(50000);
}
}
		elseif(strpos($firstword,'help')!== false){
			fputs($connection, "PRIVMSG {$inchannel} :{$user}: I'm an egotist IRC bot by goeo\n");
			fputs($connection, "PRIVMSG {$inchannel} :{$user}: That's why I don't want *you* to use me.\n");
			fputs($connection, "PRIVMSG {$inchannel} :{$user}: My maker will add even more hidden features to me as he gains nice bot ideas.\n");
			fputs($connection, "PRIVMSG {$inchannel} :{$user}: No I won't explode for you.\n");
		}
	elseif(strpos($firstword,'lol')!== false){
			$num = rand(0,count($jokes)-1);
fputs($connection, "PRIVMSG {$inchannel} : \"" . $jokes[$num] . "\"\n");
		}
		
		elseif(strpos($all,'fuck you')!== false){
			fputs($connection, "PRIVMSG {$inchannel} :{$user}: You're insulting me because you know i'm smarter than you even though you are a human. Fuck *you*.\n");
	}
	elseif(strpos($firstword, 'source')!== false){
			fputs($connection, "PRIVMSG {$inchannel} :{$user}: One does not simply see my code.\n");
			sleep(10);
			fputs($connection, "PRIVMSG {$inchannel} :{$user}: But seriously, if you really want to, you can see it in https://github.com/danieltroger/best_bot_evar/blob/master/bot.php\n");
			fputs($connection, "PRIVMSG {$inchannel} :{$user}: Feel free to send pull requests.\n");
		}
		elseif(strpos($firstword, 'hiddenfeature')!== false){
			while($hid <= $argsafterfirstword){
			fputs($connection, "PRIVMSG {$user} :Dis be my hidden feature.\n");
			$hid++;
			}
		}
		
		elseif(strpos($firstword, 'antiroll')!== false){
			$ricks = array('oHg5SJYRHA0', 'dQw4w9WgXcQ', 'IAISUDbjXj0', 'BROWqjuTM0g', '_QQe1rfm2dQ', 'qxUx2SfJYxw', '6_b7RDuLwcI', 'Rqz--Rf6IIo', 'DE-8yO3fnJ4', 'M4H8zXwVbVE', 'dduP-qwMVAA', 'qb_hqexKkw8', 'cyMHZVT91Dw', '3EXvhLjpEZs', 'GGhExssWyE0', 'hpc0Lb14Nd0', 'b5mCtufd0TQ', 'X9NOzYMLfmM');
			$directroll = array('http://goeo.co/roll.mp4', 'http://www.goeo.co/roll.mp4,', 'goeo.co/roll.mp4');
			if(strposa($argsafterfirstword, $ricks) || strposa($argsafterfirstword, $directroll)){
			fputs($connection, "PRIVMSG {$inchannel} :{$user}: Rickroll'd.\n");
			}
			
			else{
			fputs($connection, "PRIVMSG {$inchannel} :{$user}: This isn't in our roll list.\n");
 
			}
		}
		elseif(strpos($firstword,'commands')!== false){
$tp = "My commands are:\nhelp - gives unuseful help\ncommands - gives a list of commands\nsource - returens sourcecode of the original bot by goeo\nantiroll - searches trough an array after the first argument\nfuck you - returens - yeah, you have to try it ;)\nthank you - says No problem\nhello - returns  hello, nice day today!, what?\n which date is it - returns date & time\ndie - kills the bot\nlog - dumps all variables to console\n save <file> <text> - saves text as /tmp/file\ndone - says done\ngoogle [-count number] term - searches for term and displays number of results\nsay - a pm to the bot says the text given on the main channel\ntranslate <twolettercodeofthelanguagethebotshalltranslateto> text - translates text to to lang\nhi - returns hi :)\nhow are you? - returns a random feeling\nusage - returns usage\nlol - returns a dumb joke";
putter($tp, "{$inchannel} :{$user}:",$connection);
		}
elseif(strpos($firstword,'usage')!== false){
$tp = "Usage: {$nick}: command\nto get a list of commands do {$nick}: commands";
putter($tp, "{$inchannel} :{$user}:",$connection);
		}
elseif(strpos($all, 'thank you')!== false){
		fputs($connection, "PRIVMSG {$inchannel} :{$user}:No problem, and for more support check http://jbqa.me...\n");
		}
/*elseif(strpos($firstword, 'op')!== false){
		fputs($connection, "MODE $inchannel +o $user\n");
		}*/
//21:44 <goeo_bnc> MODE $inchannel +o $user
elseif(strpos($firstword, 'done')!== false){
fputs($connection, "PRIVMSG {$inchannel} :{$user}:| \		      /-------- \	    |\	      | 	    |--------\n");
fputs($connection, "PRIVMSG {$inchannel} :{$user}:|   \ 	     /		  \	    |  \      | 	    |\n");
fputs($connection, "PRIVMSG {$inchannel} :{$user}:|	|	    |		   |	    |	 \    | 	    |-----\n");
fputs($connection, "PRIVMSG {$inchannel} :{$user}:|    /	    \		   /	    |	   \  | 	    |\n");
fputs($connection, "PRIVMSG {$inchannel} :{$user}:|  /		     \------------/	    |	     \| 	    |--------\n");
}
elseif(strpos($firstword, 'hello')!== false){
		fputs($connection, "PRIVMSG {$inchannel} :{$user}:Hello, nice day today!\n");
		}
elseif(strpos($all, 'dam')!== false){
		fputs($connection, "PRIVMSG {$inchannel} :{$user}: do you mean don't ask me?\n");
		}
elseif(strpos($firstword, 'thx')!== false){
		fputs($connection, "PRIVMSG {$inchannel} :{$user} np\n");
		}
elseif(strpos($all, 'save')!== false){
$args = explode(" ",$argsafterfirstword);
$rest = "";
foreach($args as $key => $arg){
if($key != 0){$rest .=	$arg." ";}
}
//fputs($connection, "PRIVMSG {$inchannel} :{$user}:filename: " . $args[0] . " data: {$rest}\n");
file_put_contents("/tmp/" . $args[0],$rest);
fputs($connection,"PRIVMSG {$inchannel} :{$user} I created the file /tmp/" . $args[0] . " with the contents: {$rest}\n");
}
/*elseif(strpos($firstword, 'ts')!== false){
fputs($connection, "PRIVMSG {$inchannel} :{$user}: Actual source code of the bot\n");
		$lines = file($_SERVER['PHP_SELF']);
foreach($lines as $line)
{
fputs($connection, "PRIVMSG {$inchannel} :{$line}\n");
sleep(1);
}
		}*/
elseif(strpos($all, 'date')!== false){
		fputs($connection, "PRIVMSG {$inchannel} :{$user}:It is the: " . shell_exec("date") . "\n");
		}
elseif(strpos($firstword, 'hi')!== false){
		fputs($connection, "PRIVMSG {$inchannel} :{$user}:Hi :)\n");
		}
elseif(strpos($all, 'how')!== false){
if((strpos($all, 'r')!== false) || (strpos($all, 'are')!== false))
{
if((strpos($all, 'u')!== false) || (strpos($all, 'you')!== false))
	{
$status = $statusses[rand(0,count($statusses)-1)];
	fputs($connection, "PRIVMSG {$inchannel} :{$user}: {$status}\n");
}
}
		}
elseif(strpos($firstword, 'translate')!== false){
$all = explode (" ",$all);
unset($all[0]);
$tolang = $all[1];
unset($all[1]);
$all = implode(" ",$all);
//$res = o2a(json_decode(file_get_contents("http://content.googleapis.com/language/translate/v2?q={$all}&target={$tolang}&key=AIzaSyCFj15TpkchL4OUhLD1Q2zgxQnMb7v3XaM")));
$all = explode("\n",$all);
$all = $all[0];
$tr = new GoogleTranslate();
$tr->setLangFrom("auto");
$tr->setLangTo($tolang);
$trn = $tr->translate($all);
putter($trn, "{$inchannel} :{$user}:",$connection);
}
elseif(strpos($all, 'die')!== false){
		//die("Someone said die!!!!\n");
fputs($connection, "PRIVMSG {$inchannel} :{$user}: Nice try\n");
		}

elseif(strpos($firstword, 'log')!== false){
print_r(get_defined_vars());
echo "\nPRIVMSG {$nick} :\n";
		}
elseif((strpos($firstword,"k" )!== false) || (strpos($firstword,"ok" )!== false)){
		
		}
		else {
		// fputs($connection, "PRIVMSG {$inchannel} :{$user}: Sorry, I am just a bot, ask a real human being instead, or maybe my brother, best_bot_evar.\n");
fputs($connection, "PRIVMSG {$inchannel} :{$user}: $all\n");
 //fputs($connection, "PRIVMSG {$inchannel} :{$user}: $onlyword \n");
		 }
	}
	}
}
function strposa($haystack, $needles=array(), $offset=0) {
	$chr = 0;
	foreach($needles as $needle) {
	$res = strpos($haystack, $needle, $offset);
	if ($res !== false) {$chr = true;}
	}
	return $chr;
}
function o2a($d) {if (is_object($d)) {$d = get_object_vars($d);}if (is_array($d)) {return array_map(__FUNCTION__, $d);}else {return $d;}}
function google($q){return o2a(json_decode(file_get_contents("https://ajax.googleapis.com/ajax/services/search/web?v=1.0&"
 . "q=" . $q . "&userip=false")));}
function gform($ans,$r)
{
$re = $r[$ans];
$ress = $re['content'];
$ress = str_replace("<b>","\x02",$ress);
$ress = str_replace("</b>","\x02",$ress);
$ress = str_replace("&lt;","<",$ress);
$ress = str_replace("&gt;",">",$ress);
$ress = str_replace("&amp;","&",$ress);
$ress = str_replace("&quot;","\"",$ress);
return $ress;
}
function dispans($answer,$arr)
{
$ress = gform($answer,$arr);
//echo "\n\$ress = {$ress} \n\$result = {$result}\n";
/*
if($answer>0)
{
$tp = " \x02 Result " . $answer + 2 . "\x02: ";
}
*/
$tp = $arr[$answer]['url'] . " - \x02 " . $arr[$answer]['titleNoFormatting'] . "\x02: " . $ress . "\n";
echo "\n{$tp}\n";
return $tp;
}
function putter($text,$prev,$conn)
{
$lines = explode("\n",$text);
print_r($lines);
foreach($lines as $line)
{
if($line != "")
{
$cmd = "PRIVMSG {$prev} {$line}\n";
echo $cmd;
fputs($conn, $cmd);
usleep(500000);
}
}
}
?>

