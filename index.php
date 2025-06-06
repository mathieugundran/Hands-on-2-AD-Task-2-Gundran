<?php

// --- Fragmentation ---
include 'page/ExamplePage/header.php';

// --- Arrays ---
$jdmCars = [
    "Toyota",
    "Honda",
    "Mazda",
    "Subaru",
    "Nissan",
    "Mitsubishi",

];

// --- Dictionaries (Associative Arrays) ---
$carDetails = [
    "Toyota Supra Mk4" => [
        "type" => "Sports Car / Grand Tourer",
        "engine" => "Inline-6 (often Twin-Turbo)",
        "fuel_economy_km_l" => 8,
        "fun_fact" => "Iconic for its legendary 2JZ engine and massive tuning potential, a favorite in pop culture.",
        "image" => "/Hands-on-2-AD-Task-2/assets/img/toyota_supra.png"
    ],
    "Honda NSX" => [
        "type" => "Mid-Engine Sports Car",
        "engine" => "V6 (naturally aspirated)",
        "fuel_economy_km_l" => 9,
        "fun_fact" => "Developed with input from Ayrton Senna, known for its exotic looks and precise handling.",
        "image" => "/Hands-on-2-AD-Task-2/assets/img/honda_nsx.png"
    ],
    "Mazda Rx7" => [
        "type" => "Sports Car",
        "engine" => "Rotary (Wankel)",
        "fuel_economy_km_l" => 6,
        "fun_fact" => "Famous for its unique rotary engine, lightweight design, and agile handling.",
        "image" => "/Hands-on-2-AD-Task-2/assets/img/mazda_rx7.png"
    ],
    "Subaru Impreza WRX STI" => [
        "type" => "Performance Sedan / Rally Car",
        "engine" => "Boxer (Turbocharged Flat-4)",
        "fuel_economy_km_l" => 10,
        "fun_fact" => "Legendary for its rally heritage, symmetrical all-wheel-drive, and distinctive 'rumble' exhaust note.",
        "image" => "/Hands-on-2-AD-Task-2/assets/img/subaru_impreza.png"
    ],
    "Nissan Skyline GT-R (R34)" => [
        "type" => "Performance Coupe / Sports Car",
        "engine" => "Inline-6 (Twin-Turbo RB26DETT)",
        "fuel_economy_km_l" => 7,
        "fun_fact" => "Dubbed 'Godzilla' for its dominance in motorsports, it's a technological marvel and pop culture icon.",
        "image" => "/Hands-on-2-AD-Task-2/assets/img/nissan_skyline.png"
    ],
    "Mitsubishi Lancer Evo" => [
        "type" => "Performance Sedan / Rally Car",
        "engine" => "Inline-4 (Turbocharged 4G63/4B11T)",
        "fuel_economy_km_l" => 9,
        "fun_fact" => "A direct rival to the Impreza WRX STI, known for its advanced all-wheel-drive system and rally success.",
        "image" => "/Hands-on-2-AD-Task-2/assets/img/mitsubishi_lancer.png"
    ],
];

// --- Functions ---
function displayCarList($cars)
{
    echo "<ul>";
    foreach ($cars as $car) {
        echo "<li>" . $car . "</li>";
    }
    echo "</ul>";
}

?>

<main>
    <h1>Welcome, this is a showcase of JDM cars</h1>
    <p>Discover the most popular JDM cars</p>

    <h2>Japanese Domestic Market:</h2>
    <?php
    // --- Display Output / Function Call ---
    displayCarList($jdmCars);
    ?>

    <h2>Featured Cars:</h2>
    <?php
    // --- Fragmentation (Content Fragment) ---
    
    $featuredCars = ["Nissan Skyline GT-R (R34)", "Mazda Rx7", "Honda NSX", "Toyota Supra Mk4"];
    foreach ($featuredCars as $carName) {
        // --- Conditional ---
        if (isset($carDetails[$carName])) {
            $currentCarDetails = $carDetails[$carName];
            include 'page/ExamplePage/cardetails.php';
        } else {
            echo "<p>Details for <strong>" . $carName . "</strong> not available.</p>";
        }
    }
    ?>

</main>
<?php
// --- Fragmentation ---
include 'page/ExamplePage/footer.php';
?>