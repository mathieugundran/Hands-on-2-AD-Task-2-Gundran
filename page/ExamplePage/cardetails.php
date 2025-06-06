<div class="car-card"> <?php // Added a class for potential styling ?>
    <h3><?php echo $carName; ?></h3>
    <img src="<?php echo $currentCarDetails['image']; ?>" alt="<?php echo $carName; ?>"
        style="width: 30% ; height: 50%;">
    <ul>
        <li>Type: <?php echo $currentCarDetails['type']; ?></li>
        <li>Engine: <?php echo $currentCarDetails['engine']; ?></li>
        <?php if ($currentCarDetails['fuel_economy_km_l'] != null): ?>
            <li>Fuel Economy (km/l): <?php echo $currentCarDetails['fuel_economy_km_l']; ?></li>
        <?php else: ?>
            <li>Fuel Economy (km/l): N/A (Electric)</li>
        <?php endif; ?>
        <li>Fun Fact: <?php echo $currentCarDetails['fun_fact']; ?></li>
    </ul>
</div>