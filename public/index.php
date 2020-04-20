<?php

$randomTime = mt_rand();

$presentTime = new DateTime();
$destinationTime = new DateTime("@$randomTime");
$presentTime->setTimezone(new \DateTimeZone('Europe/Paris'));
$destinationTime->setTimezone(new \DateTimeZone('Europe/Paris'));

?>


<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="style/style.css">
    <link href='style/digital_7/digital-7 (italic).ttf' rel='stylesheet' type='text/css'>
</head>
<body>

<h1>RETOUR VERS LE FUTUR</h1>

<div class="div_body">
    <table>
        <thead>
        <tr>
            <th>MONTH</th>
            <th>DAY</th>
            <th>YEAR</th>
            <th class="AM-PM" ><p>AM</p><span <?php if($destinationTime->format('A') == "AM"){echo"class=\"flash_red\"";} ?>>&#8226</span></th>
            <th>HOUR</th>
            <th>MIN</th>
        </tr>
        </thead>
        <tbody class="tbody_destination">
        <tr>
            <td class="td_black"><?php echo $destinationTime->format('M'); ?></td>
            <td class="td_black"><?php echo $destinationTime->format('j'); ?></td>
            <td class="td_black"><?php echo $destinationTime->format('Y'); ?></td>
            <td  class="AM-PM"><p>PM</p><span <?php if($destinationTime->format('A') == "PM"){echo"class=\"flash_red\"";} ?>>&#8226</span></td>
            <td class="td_black"><?php echo $destinationTime->format('h'); ?></td>
            <td class="td_black"><?php echo $destinationTime->format('i'); ?></td>
        </tr>
        <tr>
            <td class="td_surrounding"></td>
            <td colspan="4" class="location_time">DESTINATION TIME</td>
            <td class="td_surrounding"></td>
        </tr>
        </tbody>
        <tfoot>
        </tfoot>
        <thead>
        <tr>
            <th>MONTH</th>
            <th>DAY</th>
            <th>YEAR</th>
            <th class="AM-PM" ><p>AM</p><span <?php if($presentTime->format('A') == "AM"){echo"class=\"flash_green\"";} ?>>&#8226</span></th>
            <th>HOUR</th>
            <th>MIN</th>
        </tr>
        </thead>
        <tbody class="tbody_present ">
        <tr>
            <td class="td_black"><?php echo $presentTime->format('M'); ?></td>
            <td class="td_black"><?php echo $presentTime->format('j'); ?></td>
            <td class="td_black"><?php echo $presentTime->format('Y'); ?></td>
            <td  class="AM-PM"><p>PM</p><span <?php if($presentTime->format('A') == "PM"){echo"class=\"flash_green\"";} ?>>&#8226</span></td>
            <td class="td_black"><?php echo $presentTime->format('h'); ?></td>
            <td class="td_black"><?php echo $presentTime->format('i'); ?></td>
        </tr>
        <tr>
            <td class="td_surrounding"></td>
            <td colspan="4" class="location_time">PRESENT TIME</td>
            <td class="td_surrounding"></td>
        </tr>
        </tbody>
        <tfoot>
        </tfoot>
    </table>
</div>
<section>

    <?php
    if($destinationTime < $presentTime) {
        $interval = $destinationTime->diff($presentTime);
    } else {
        $interval = $presentTime->diff($destinationTime);
    }

    echo ("<br>MAIS RENDS-TOI COMPTE MARTY.<BR>LA DUREE TOTALE QUI SEPARE CES DEUX DATES EST DE  " . $interval->format('%Y ANNEE(S), %m MOI(S), %d JOUR(S), %H HEURE(S) et %i MINUTE(S).') . "<br>");
    $nbMinutesDifference =  (($interval->days) * 24 * 60);
    $nbLittersFuel = ceil($nbMinutesDifference / 10000);
    echo "AFIN DE PARCOURIR UNE TELLE DISTANCE TEMPORELLE, IL VA NOUS FALLOIR AU MOINS $nbLittersFuel LITRES DE JUS DE PLUTONIUM.<BR>...<BR>";
    echo "NOM DE ZEUS!"
    ?>

</section>
</body>
</html>

