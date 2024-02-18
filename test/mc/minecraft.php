<?php
	//using the class
	use MCServerStatus\MCPing;
	
	//includes composer autoload
	require_once('../lib/vendor/autoload.php');
	
	//checking the server
	$response=MCPing::check('jjs.craft.gg', 10168, 1);

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
        <title>JJS Server Status</title>
        <style>
            body {background-color: #090c1f;}
            p {color: #99ccd1;}
            bold {color:#d4eaec;text-decoration: dotted underline white;}
        </style>
        <meta property="og:title" content="JJS-Corp" />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="http://jajasteele.rf.gd/test/mc/minecraft.php" />
        <meta property="og:image" content="http://jajasteele.rf.gd/test/mc_jjs.png" />
        <meta property="og:description" content="Welcome to the status page of Jaja Steele's Minecraft server." />
        <meta name="theme-color" content="#00FFF1">
        <link rel="stylesheet" href="/test/moo-bot/style.css">
    </head>
    <body>
        <div style="background:#0e1334;color:#fff;text-align:center;padding:1px 1px 0px 1px;">
            <p style="position:relative;top:0px;font-size:70px;font-family: 'Upheaval TT (BRK)'; src: url('upheavtt.ttf');">Welcome to JJS's Minecraft server status page!</p>
            <img src="/test/mc_jjs.png" alt="JJS-MC-Logo" style="width:300px;height:300px;position:relative;top:-70;"> 
            <p style="position:relative;top:-80px;font-size:20px;font-family: 'Upheaval TT (BRK)'; src: url('upheavtt.ttf');"><i>Yes this place still sucks lmao<br><a href="/test/home.php" style="color:#99ccd1;">Also click here to go back on homepage</a></i></p>
        </div>
        <p class="title1">The server is currently: <bold><?php echo $status ?></bold> with version <bold><?php echo $mc_version ?></bold></p>
        <div class="desc1">
            <p><?php echo $motd; ?> </p>
            <p>Online Players: (<?php echo $playercount; echo "/"; echo $max_player?>) </p>
            <p class="desc2"><?php if (!empty($response2["sample_player_list"])) {foreach($response2["sample_player_list"] as $value1) {echo "- " . $value1["name"] . "<br>";}} else {echo "No players online.";} ?> </p>
            <p> DM <bold>Superjaja05#3621</bold> on Discord or join my <a href="https://discord.gg/ryvRTyR6"><bold>Discord Server</bold></a> to get the IP!</p>
        </div>
    </body>
</html>