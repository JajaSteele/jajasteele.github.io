<?php
	//using the class
	use MCServerStatus\MCPing;
	
	//includes composer autoload
	require_once('../lib/vendor/autoload.php');
	
	//checking the server
	$response=MCPing::check('84.105.22.115', 12000, 1);

    $response2=$response->toArray();

    $status = $response2["online"] ? 'Online' : 'Offline';
    if ($status) {
        $max_player=$response2["max_players"];
        $playercount=$response2["players"];
        $mc_version=$response2["version"];
        $motd=$response2["motd"];
    } else {
        $max_player="?";
        $playercount="?";
        $mc_version="?";
        $motd="none";
    }
?>


<html>
    <head>
        <title>Lambrettadude's Server</title>
        <style>
            body {background-color: #090c1f;}
            p {color: #99ccd1;}
            bold {color:#d4eaec;text-decoration: dotted underline white;}
        </style>
        <meta property="og:title" content="JJS-Corp" />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="http://jajasteele.rf.gd/test/mc/lambrettadude.php" />
        <meta property="og:image" content="http://jajasteele.rf.gd/test/mc_jjs.png" />
        <meta property="og:description" content="Quick status page for Lambrettadude's ATM8 Minecraft server." />
        <meta name="theme-color" content="#00FFF1">
        <link rel="stylesheet" href="/test/moo-bot/style.css">
    </head>
    <body>
        <div style="background:#0e1334;color:#fff;text-align:center;padding:1px 1px 0px 1px;">
            <p style="position:relative;top:0px;font-size:70px;font-family: 'Upheaval TT (BRK)'; src: url('upheavtt.ttf');">Status Page for Lambrettadude's ATM8 server</p>
            <img src="/test/mc_jjs.png" alt="JJS-MC-Logo" style="width:300px;height:300px;position:relative;top:-70;"> 
            <p style="position:relative;top:-80px;font-size:20px;font-family: 'Upheaval TT (BRK)'; src: url('upheavtt.ttf');"><i>Yes this site still sucks lmao<br><a href="/test/home.php" style="color:#99ccd1;">Also click here to go back on homepage</a></i></p>
        </div>
        <p class="desc2">This is just a dumb page i made cuz i'm lazy to launch the entire game to check who's online lmao</p>
        <p class="title1">The server is currently: <bold><?php echo $status ?></bold> with version <bold><?php echo $mc_version ?></bold></p>
        <div class="desc1">
            <p><?php echo $motd; ?> </p>
            <p>Online Players: (<?php echo $playercount; echo "/"; echo $max_player?>) </p>
            <p class="desc2"><?php if (!empty($response2["sample_player_list"])) {foreach($response2["sample_player_list"] as $value1) {echo "- " . $value1["name"] . "<br>";}} else {echo "No players online.";} ?> </p>
        </div>
    </body>
</html>