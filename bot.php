/* yep. in php. lol.
 * 
 * This is a php IRC bot by goeo_
 * It doesn't have much commands, but, meh.
 * It be tha best bot evar.
 */
 
 <?php
set_time_limit(0);
$server = "irc.freenode.org";
$nick = "best_bot_evar";
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
        $a7 = explode(' ', $a6[3]);
        $a8 = substr($a7[1], 0, -1);
        $user = $a5[1];
        $inchannel = $a1[2];
		
        if($a1[0] == "PING"){
			fputs($connection, "PONG ".$a1[1]."\n");
		}
		
        $args = NULL; for ($i = 4; $i < count($a1); $i++) {$args .= $a1[$i] . ' ';}
        $all = substr($args, 0, -1);
        
        $len = strlen($a1[4]) + 1;
        $all1 = substr($all,$len);
        if (strpos($data, ':goeo_!uid7911@gateway/web/irccloud.com/x-ffhwgljwtgznidil PRIVMSG best_bot_evar :join')!== false){
            fputs ($connection, "JOIN {$a1[4]}\n");
        }
        
        elseif (strpos($data, ':goeo_!uid7911@gateway/web/irccloud.com/x-ffhwgljwtgznidil PRIVMSG best_bot_evar :part')!== false){
            fputs ($connection, "PART {$a1[4]}\n");
        }
        
        elseif (strpos($data, ':goeo_!uid7911@gateway/web/irccloud.com/x-ffhwgljwtgznidil PRIVMSG best_bot_evar :say')!== false){
            fputs($connection, "PRIVMSG {$a1[4]} :{$all1}\n");
            
        }
        
        if ($a6[2]==$nick){
                if(strpos($a8,'help')!== false){
					fputs($connection, "PRIVMSG {$inchannel} :{$user}: I'm an egotist IRC bot by goeo_\n");
					fputs($connection, "PRIVMSG {$inchannel} :{$user}: That's why I don't want *you* use me.\n");
					fputs($connection, "PRIVMSG {$inchannel} :{$user}: My maker will add even more hidden features to me as he gains nice bot ideas.\n");
					fputs($connection, "PRIVMSG {$inchannel} :{$user}: No I won't explode for you.\n");
				}
				elseif(strpos($a8,'explode')!== false){
					fputs($connection, "PRIVMSG {$inchannel} :\001ACTION makes {$user} explode.\001\n");
				}
				elseif(strpos($all,'fuck you')!== false){
					fputs($connection, "PRIVMSG {$inchannel} :{$user}:You're insulting me because you know i'm smarter than you even though you are a human. Fuck *you*.\n");
                }
                elseif(strpos($a8, 'source')!== false){
					fputs($connection, "PRIVMSG {$inchannel} :{$user}:One does not simply see my code.\n");
					sleep(10);
					fputs($connection, "PRIVMSG {$inchannel} :{$user}:But seriously, if you really want to, you can see it in http://www.github.com/goeo-/best-bot-evar\n");
					fputs($connection, "PRIVMSG {$inchannel} :{$user}:Feel free to send pull requests.\n");
				}
			    else {
				    fputs($connection, "PRIVMSG {$inchannel} :{$user}: No. Just... No.\n");
			    }
        }
	}
}
?>
