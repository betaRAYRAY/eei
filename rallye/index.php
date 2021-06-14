<?php
require_once('../config.php');
require_once('../registration.php');
$short = 'RY0'; #Kürzel des Events
$E = $events[$short]; #select Event
?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/style.css<?php echo $FILE_REVISION; ?>">
    <title>Anfi  <?php echo "{$E['name']} - {$CONFIG_TERM}"; ?></title>
</head>
<body>
    <div id="center">
        <div class="block">
            <h1><?php echo "{$E['name']} - {$CONFIG_TERM}"; ?></h1>
            <h2 class="description icon clock"><?php echo $E['date'];?></h2>
            <h2 class="description icon marker"><?php echo $E['location'];?></h2>
            <!-- <p class="error">Nach momentanen Stand lässt sich noch nicht sagen ob die Wanderung stattfindet! Sollte sie stattfinden verschwindet dieser Textblock und die Anmeldung wird freigeschalten.</p> -->
            Die Anfi Stadtrallye<br>
            Bei der Stadtrallye lassen wir dich und deine Kommilitonen gegeneinander in Teams antreten. 
            Dabei werdet ihr interessante, schöne und verstörende Ecken Tübingens kennen lernen, 
            dabei hoffentlich die Orientierung in eurer neuen Heimat etwas verbessern und Kontakte knüpfen.<br>
            Melde dich mit deinen Daten unten an, um genaue Informationen zu Treffpunkt und deiner Gruppe zu bekommen.
            Diese Daten werden evtl. auch an das Gesundheitsamt weitergegeben. Solltest du damit nicht einverstanden sein oder falsche Daten angeben, kannst du nicht teilnehmen.<br>
            Du brauchst keine Angst zu haben - wir werden die Gruppengröße so klein wie möglich halten.<br><br>
        </div>
        <?php
            echo ($h['info'] == '' ? '' : "<div class='block info'>{$h['info']}</div>");
            echo ($h['error'] == '' ? '' : "<div class='block info'>{$h['error']}</div>");
        ?>
        <div class="block>">
            <?php
                if ($_SERVER['REQUEST_METHOD'] === 'POST')
                    registerForOfflineEvent($E);

                showOfflineRegistration($E); //Please comment in if event will happen!
            ?>
        </div>
    </div>
</body>
</html>
