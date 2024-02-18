<html>
    <head>
        <title>PHP-Test</title>
        <style>
            body {background-color: #090c1f;}
            p {color: #99ccd1;}
            b {color: #c4f7fd;text-decoration: dotted underline #FFFFFF;}
            
        </style>
        <meta property="og:title" content="Moo-Bot Docs" />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="http://jajasteele.rf.gd/test/moo-bot/moo-bot.php" />
        <meta property="og:image" content="http://jajasteele.rf.gd/test/jjs.png" />
        <meta property="og:description" content="Welcome to the documentation of Jaja Steele's bot." />
        <meta name="theme-color" content="#00FFF1">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div style="background:#0e1334;color:#fff;text-align:center;padding:0.1px 1px 0.1px 1px;">
            <p style="position:relative;top:0px;font-size:70px;font-family: 'Upheaval TT (BRK)'; src: url('upheavtt.ttf');">Moo-Bot documentation</p>
            <p style="position:relative;top:-10px;font-size:20px;font-family: 'Upheaval TT (BRK)'; src: url('upheavtt.ttf');"><i>Yes this place still sucks lmao<br><a href="/test/home.php" style="color:#99ccd1;">Also click here to go back on homepage</a></i></p>
        </div>
    </body>
    <body>
        <p class="title2">How does the documentation works:</p>
        <p class="title1">Arguments:</p>
        <p class="desc1">Almost all the commands written here will require one or more arguments to run properly.<br><br>All the arguments will be written between either &lt&gt or [] in the documentation.<br><br>
        &lt&gt Means that the argument is <b>Required</b>, and [] means that the argument is <b>Optional</b>.<br><br>
        Any parentheses inside the &lt&gt or [] are meant to add details on what to put for that specific argument.<p>
        <p class="title1">Aliases:</p>
        <p class="desc1">If a command title is written like "Command1 or Command2", it means that both commands can be used for the same function.
    </body>
    <body>
        <p class="title2">List of Public Commands:</p>
    </body>
    <body>
        <p class="title2">Sona Commands</p>
        <div>
            <p class="title1">◈ addsona</p>
            <p class="desc1">This command registers a new Sona on your account.<br>Usage:</p>
            <p class="code1">%addsona &ltname (text)&gt</p>
            <p class="desc2"><b>&ltname (text)&gt</b> : The name of the sona to register.<br>Tip: Sonas are registered per-user, therefor two different users can have a sona with the same name.</p>
        </div>
        <div>
            <p class="title1">◈ setsona</p>
            <p class="desc1">This command sets a specific line of your sona infos to the text/link given.<br>Usage:</p>
            <p class="code1">%setsona &ltname (text)&gt &ltline (number)&gt &lttext/link (text)&gt</p>
            <p class="desc2"><b>&ltname (text)&gt</b> : The name of the sona to modify<br><b>&ltline (number)&gt</b> : The line to modify<br><b>&lttext/link (text)&gt</b> : The text that the line will be set to. This can be plain text or image link.s to add images!</p>
        </div>
        <div>
            <p class="title1">◈ getsona</p>
            <p class="desc1">This command fetches the infos of a specific sona.<br>Usage:</p>
            <p class="code1">%getsona &ltname (text)&gt [@mention]</p>
            <p class="desc2"><b>&ltname (text)&gt</b> : The name of the sona to get infos from.<br><b>[@mention]</b> : Optional, allows you to get the sona of another user instead of yourself.</p>
        </div>
        <div>
            <p class="title1">◈ delsona</p>
            <p class="desc1">This command deletes a registered sona on your account.<br>Usage:</p>
            <p class="code1">%delsona &ltname (text)&gt</p>
            <p class="desc2"><b>&ltname (text)&gt</b> : The name of the sona to delete.
        </div>
        <div>
            <p class="title1">◈ listsona</p>
            <p class="desc1">This command lists all the registered sonas names on your account (or on the mentionned user's account).<br>Usage:</p>
            <p class="code1">%listsona [@mention]</p>
            <p class="desc2"><b>[@mention]</b> : Optional, allows you to list another user's sonas names.
        </div>
        <div>
            <p class="title1">◈ renamesona</p>
            <p class="desc1">This command renames a registered sona on your account to a new name.<br>Usage:</p>
            <p class="code1">%renamesona &ltold_name (text)&gt &ltnew_name (text)&gt</p>
            <p class="desc2"><b>&ltold_name (text)&gt</b> : The current name of the sona to rename.<br><b>&ltnew_name (text)&gt</b> : The new name for the sona.
        </div>
        <p class="title2">Random Commands</p>
        <div>
            <p class="title1">◈ moolang</p>
            <p class="desc1">This command translates Alphabetical text to Moo Language.<br>Usage:</p>
            <p class="code1">%moolang &lttext&gt</p>
            <p class="desc2"><b>&lttext&gt</b> : The text to translate.</p>
        </div>
        <div>
            <p class="title1">◈ uwu</p>
            <p class="desc1">This command uwu-ify text.<br>Usage:</p>
            <p class="code1">%uwu &lttext&gt</p>
            <p class="desc2"><b>&lttext&gt</b> : The text to uwu-ify.</p>
        </div>
        <div>
            <p class="title1">◈ pwg</p>
            <p class="desc1">This command generates a random Alphanumerical string.<br>Usage:</p>
            <p class="code1">%pwg &ltlength (number)&gt</p>
            <p class="desc2"><b>&ltlength (number)&gt</b> : The length of the string.</p>
        </div>
        <div>
            <p class="title1">◈ kills/killer_score</p>
            <p class="desc1">This command fetches the Serial Killer Score (your own score, or the score of mentionned user).<br>Usage:</p>
            <p class="code1">%kills [@mention]</p>
            <p class="desc2"><b>[@mention]</b> : Optional, the target user to get the score from.</p>
        </div>
        <p class="title2">Moderation Commands</p>
        <div>
            <p class="title1">◈ kill/murder</p>
            <p class="desc1">This command kills (bans) one or more user.<br>Usage:</p>
            <p class="code1">%kill <@mention> [@mention2] ...</p>
            <p class="desc2"><b>&lt@mention&gt</b> : User to ban.<br><b>[@mention2] ...</b> : Optional, allows to ban multiple users at once with a single command.</p>
        </div>
        <div>
            <p class="title1">◈ accept</p>
            <p class="desc1">This command lets the mentionned user into the server.<br>Usage:</p>
            <p class="code1">%accept &lt@mention&gt</p>
            <p class="desc2"><b>&lt@mention&gt</b> : The user to accept./p>
        </div>
        <div>
            <p class="title1">◈ refuse</p>
            <p class="desc1">This command refuses the mentionned user from entering the server (Kick).<br>Usage:</p>
            <p class="code1">%refuse &lt@mention&gt</p>
            <p class="desc2"><b>&lt@mention&gt</b> : The user to refuse./p>
        </div>
        <div>
            <p class="title1">◈ hrefuse</p>
            <p class="desc1">This command hard-refuses the mentionned user from entering the server (Ban).<br>Usage:</p>
            <p class="code1">%hrefuse &lt@mention&gt</p>
            <p class="desc2"><b>&lt@mention&gt</b> : The user to hard-refuse./p>
        </div>
    </body>
</html>