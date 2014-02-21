/* This is a php IRC bot by goeo_



 * It doesn't have many commands, but, meh.



 * It be tha best bot evar.



 */



 



<?php



set_time_limit(0);



$server = "irc.freenode.org";



$nick = "phonebot";



$channels = "#goeosbottest";



$port = 6667;



$connection = fsockopen("$server", $port);











fputs ($connection, "USER $nick $nick $nick $nick :$nick\n");//lulz



fputs ($connection, "NICK $nick\n");



fputs ($connection, "JOIN {$channels}\n");



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



			fputs($connection, "PRIVMSG {$channels} : {$all}\n");



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

fputs($connection, "PRIVMSG {$inchannel} :{$user}: Googling for {$q}\n");

$q = urlencode($q);
$result = google($q)['responseData']['results'][0];
$ress = $result['content'];
$ress = str_replace("<b>","\x02",$ress);
$ress = str_replace("</b>","\x02",$ress);
$ress = str_replace("&lt;","<",$ress);
$ress = str_replace("&gt;",">",$ress);
$ress = str_replace("&amp;","&",$ress);
$ress = str_replace("&quot;","\"",$ress);
fputs($connection, "PRIVMSG {$inchannel} :{$user}: " . $result['url'] . " - \x02 " . $result['titleNoFormatting'] . "\x02: " .  $ress . "\n");
}
				elseif(strpos($firstword,'help')!== false){



					fputs($connection, "PRIVMSG {$inchannel} :{$user}: I'm an egotist IRC bot by goeo\n");



					fputs($connection, "PRIVMSG {$inchannel} :{$user}: That's why I don't want *you* to use me.\n");



					fputs($connection, "PRIVMSG {$inchannel} :{$user}: My maker will add even more hidden features to me as he gains nice bot ideas.\n");



					fputs($connection, "PRIVMSG {$inchannel} :{$user}: No I won't explode for you.\n");



				}



				



				elseif(strpos($all,'fuck you')!== false){



					fputs($connection, "PRIVMSG {$inchannel} :{$user}: You're insulting me because you know i'm smarter than you even though you are a human. Fuck *you*.\n");



		}



		elseif(strpos($firstword, 'source')!== false){



					fputs($connection, "PRIVMSG {$inchannel} :{$user}: One does not simply see my code.\n");



					sleep(10);



					fputs($connection, "PRIVMSG {$inchannel} :{$user}: But seriously, if you really want to, you can see it in http://www.github.com/goeo-/best_bot_evar\n");



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



					fputs($connection, "PRIVMSG {$inchannel} : {$user}: My commands are:\n");



 fputs($connection, "PRIVMSG {$inchannel} : help - gives unuseful help\n");



fputs($connection, "PRIVMSG {$inchannel} : commands - gives a list of commands\n");



fputs($connection, "PRIVMSG {$inchannel} : source - returens sourcecode of the original bot by goeo\n");



fputs($connection, "PRIVMSG {$inchannel} : antiroll - searches trough an array after the 1 argument\n");



fputs($connection, "PRIVMSG {$inchannel} : fuck you - returens - yeah, you have to try it ;)\n");



fputs($connection, "PRIVMSG {$inchannel} : thank you - says No problem\n");



fputs($connection, "PRIVMSG {$inchannel} : hello - returns Hi, a nice day, what?\n");



fputs($connection, "PRIVMSG {$inchannel} : which date is it - returns date & time\n");



fputs($connection, "PRIVMSG {$inchannel} : die - kills the bot\n");



fputs($connection, "PRIVMSG {$inchannel} : log - dumps all variables to console\n");



fputs($connection, "PRIVMSG {$inchannel} : save <file> <text> - saves text as /tmp/file\n");

sleep(1);

fputs($connection, "PRIVMSG {$inchannel} : done - says done\n");



//fputs($connection, "PRIVMSG {$inchannel} : ts - returns actual source\n");



fputs($connection, "PRIVMSG {$inchannel} : say - a pm to the bot says the text given on the main channel\n");



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



			fputs($connection, "PRIVMSG {$inchannel} :{$user}:Hi, a nice day, what?\n");







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



elseif(strpos($all, 'die')!== false){



			die("Someone said die!!!!\n");







				}



elseif(strpos($firstword, 'log')!== false){



print_r(get_defined_vars());



echo "\nPRIVMSG {$nick} :\n";



				}



				else {



				   fputs($connection, "PRIVMSG {$inchannel} :{$user}: Sorry, I am just a bot, ask a real human being instead, or maybe my brother, best_bot_evar.\n");



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
    . "q=" . $q . "&userip=" .$_SERVER["REMOTE_ADDR"])));}

?>
