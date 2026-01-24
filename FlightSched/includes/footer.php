<!-- 
Name: Graciela C. Gozum
Section: WD-201
Date: 01/22/26
6DWEB 
-->



<footer>
    <div class="timeZone-container">
        <?php
        $timezones = [
            ["city"=>"Australia","zone"=>"Australia/Sydney"],
            ["city"=>"Singapore","zone"=>"Asia/Singapore"],
            ["city"=>"Paris","zone"=>"Europe/Paris"]
        ];

        foreach ($timezones as $tz) {
            date_default_timezone_set($tz["zone"]);
            $timeNow = date("h:i A");
        ?>
        <div class="timeZone-box">
            <div class="timezone-city"><?php echo $tz["city"]; ?></div>
            <div class="timezone-time"><?php echo $timeNow; ?></div>
            <div class="timezone-zone"><?php echo $tz["zone"]; ?></div>
        </div>
        <?php } ?>
    </div>

    <div class="footer-container">
        <p>&copy; <?= date('Y')?> | Graciela Gozum</p>
    </div>
    
</footer>

