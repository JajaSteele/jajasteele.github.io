<?php
    $page = $_SERVER['PHP_SELF'];
    session_start();
    if (!empty($_GET['address'])) {
        $_SESSION["address"] = $_GET['address'];
        header("Refresh:0; url=".$page);
    }
    if (!empty($_GET['reloadtime'])) {
        $_SESSION["reloadtime"] = $_GET['reloadtime'];
        header("Refresh:0; url=".$page);
    }
?>

<?php
    use MCServerStatus\MCPing;
    if (!empty($_GET['address'])) {
        
        //includes composer autoload
        require_once('../lib/vendor/autoload.php');

        if (preg_match('~\b([0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}):([0-9]{1,5}\b)~',$_SESSION['address'], $matches)) {
            $_SESSION['ip'] = $matches[1];
            $_SESSION['port'] = $matches[2];
        };
        
        //checking the server
        $_SESSION['response']=MCPing::check($_SESSION['ip'], (Int)$_SESSION['port'], 1);

        $_SESSION['response2']=$_SESSION['response']->toArray();

        $_SESSION['status'] = $_SESSION['response2']["online"] ? 'Online' : 'Offline';
        $_SESSION['status2'] = $_SESSION['response2']["online"];
        if ($_SESSION['status']) {
            $_SESSION['max_player'] = $_SESSION['response2']["max_players"];
            $_SESSION['playercount'] = $_SESSION['response2']["players"];
            $_SESSION['mc_version'] = $_SESSION['response2']["version"];
            $_SESSION['motd'] = $_SESSION['response2']["motd"];
            $_SESSION['icon'] = $_SESSION['response2']["favicon"];
            $_SESSION['ping'] = $_SESSION['response2']["ping"];
        } else {
            $_SESSION['max_player'] = "???";
            $_SESSION['playercount'] = "???";
            $_SESSION['mc_version'] = "???";
            $_SESSION['motd'] = "No MOTD";
            $_SESSION['icon'] = "";
            $_SESSION['ping'] = "???";
        }
    }
?>

<http>
    <head>
        <title>JJS Server Status</title>
        <style>
            body {background-color: #090c1f;}
            p {color: #99ccd1;}
            bold {color:#d4eaec;text-decoration: dotted underline white;}
        </style>
        <meta property="og:title" content="JJS-Corp" />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="http://jajasteele.rf.gd/test/mc/universal.php" />
        <meta property="og:image" content="http://jajasteele.rf.gd/test/mc_jjs.png" />
        <meta property="og:description" content="Welcome to the server status page." />
        <meta name="theme-color" content="#00FFF1">
        <meta http-equiv="refresh" content="<?php echo ($_SESSION["reloadtime"])?>;URL='<?php echo $page?>'">
        <link rel="stylesheet" href="/test/moo-bot/style.css">
    </head>
    <body>
        <div style="background:#0e1334;color:#fff;text-align:center;padding:1px 1px 0px 1px;overflow: hidden;">
            <p style="position:relative;top:0px;font-size:40px;font-family: 'Upheaval TT (BRK)'; src: url('upheavtt.ttf');">JJS Server Status!</p>
            <img src="/test/mc_jjs.png" alt="JJS-MC-Logo" style="width:200px;height:200px;position:relative;top:-40;"> 
            <p style="position:relative;top:-60px;font-size:20px;font-family: 'Upheaval TT (BRK)'; src: url('upheavtt.ttf');"><i>Yes this place still sucks lmao<br><a href="/test/home.php" style="color:#99ccd1;">Also click here to go back on homepage</a></i></p>
        </div>
    </body>
    <p class="desc1">Choose server here: </p>
    <form name="form" action="" method="get" class="desc1">
        <!-- <input type="text" name="server" id="server" value=<?php echo $_POST['server']; ?>> -->
        <!-- <input type="text" name="port" id="port" value=<?php echo $_POST['port']; ?>> -->
        <select id="address" name="address"> 
            <option value="84.105.22.115:25565">Lamb ATM7TTS</option>
            <option value="84.105.22.115:12000">Lamb ATM8</option>
            <option value="99.229.56.193:25525">MC Eternal</option>
            <option value="109.250.190.254:50150">ProjectOC</option>
            <option value="109.250.190.254:50152">SpaceWarpy</option>
        </select>
        <input type="submit" name="submit" value="Select" />
    </form>

    <p class="desc1">Or input here: (ip:port format)</p>
    <form name="form" action="" method="get" class="desc1">
        <input type="text" name="address" id="server" value=<?php echo $_SESSION['address']; ?>>
        <input type="submit" name="submit" value="Select" />
    </form>

    <p class="desc1">Refresh Frequency: (Current: <?php if ($_SESSION['reloadtime'] < 9999999999) {echo $_SESSION['reloadtime']."s";} else {echo "None";} ?>)</p>
    <form name="form" action="" method="get" class="desc1">
        <!-- <input type="text" name="server" id="server" value=<?php echo $_POST['server']; ?>> -->
        <!-- <input type="text" name="port" id="port" value=<?php echo $_POST['port']; ?>> -->
        <select id="reloadtime" name="reloadtime"> 
            <option value="9999999999">None</option>
            <option value="15">15 sec</option>
            <option value="30">30 sec</option>
            <option value="45">45 sec</option>
            <option value="60">1 min</option>
            <option value="300">5 min</option>
            <option value="600">10 min</option>
        </select>
        <input type="submit" name="submit" value="Set" />
    </form>

    <?php if(true) : ?>
        <p class="title2">The server is currently <u><bold><?php echo $_SESSION['status'] ?></bold></u> on version <u><bold><?php echo $_SESSION['mc_version'] ?></bold></u></p>
        <div class="desc2" style="float: left;">
            <?php if($_SESSION['icon']) : ?>
                <img src=<?php echo $_SESSION['icon']?> alt="Icon" height=150 width=150 style="border-radius: 25px;"/>
            <?php else : ?>
                <img src="/test/mc/unknown_server.png" alt="Icon" height=150 width=150 style="border-radius: 25px;"/>
            <?php endif; ?>
        </div>
        <div style="float: none; position:relative;top:20px;left:70px; max-width: calc(97% - 100px)"">
            <p class="title1" style="max-width: calc(98.5% - 70px)"><?php echo $_SESSION['motd']; ?> </p>
        </div>
        <p class="desc1"style="float: none; position:relative;top:0px;left:100px; max-width: calc(80% - 100px)">Ping: <?php echo $_SESSION['ping']; ?>ms </p>
        <p class="title1" style="position:relative;top:-20px;left:100px; max-width: calc(80% - 100px)">Online Players: (<?php echo $_SESSION['playercount']; echo "/"; echo $_SESSION['max_player']?>) </p>
        <div>
            <p class="desc1" style="position:relative;top:-40px;left:280px; max-width: calc(80% - 100px)"><?php if (!empty($_SESSION['response2']["sample_player_list"])) {foreach($_SESSION['response2']["sample_player_list"] as $value1) {echo "- " . $value1["name"] . "<br>";}} else {echo "No players online.";} ?> </p>
        </div>
    <?php endif; ?>
    <p class="title1" style="position:relative;top:0px; max-width: calc(90% - 100px)">Selected IP is <u><?php echo $_SESSION['ip']; ?>:<?php echo $_SESSION['port']; ?></u> </p>
</http>


