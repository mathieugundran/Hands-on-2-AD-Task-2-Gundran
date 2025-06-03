<?php

// --- Fragmentation ---
include 'page/header.php';

// --- Arrays ---
$solarSystemPlanets = [
    "Mercury",
    "Venus",
    "Earth",
    "Mars",
    "Jupiter",
    "Saturn",
    "Uranus",
    "Neptune"
];

// --- Dictionaries (Associative Arrays) ---
$celestialDetails = [
    "Earth" => [
        "type" => "Terrestrial Planet",
        "diameter_km" => 12742,
        "moons" => 1,
        "fun_fact" => "The only known planet to support life."
    ],
    "Mars" => [
        "type" => "Terrestrial Planet",
        "diameter_km" => 6779,
        "moons" => 2,
        "fun_fact" => "Known as the 'Red Planet' due to iron oxide on its surface."
    ],
    "Jupiter" => [
        "type" => "Gas Giant",
        "diameter_km" => 139820,
        "moons" => 95,
        "fun_fact" => "The largest planet in our solar system."
    ],
    "Moon" => [
        "type" => "Natural Satellite",
        "diameter_km" => 3474,
        "moons" => 0,
        "fun_fact" => "Earth's only natural satellite, responsible for tides."
    ]
];

// --- Functions ---
function displayPlanetList($planets)
{
    echo "<ul>";
    foreach ($planets as $planet) {
        echo "<li>" . $planet . "</li>";
    }
    echo "</ul>";
}

?>

<main>
    <h1>Welcome, Galactic Explorer!</h1>
    <p>Discover the wonders of our solar system and beyond.</p>

    <h2>Planets in Our Solar System:</h2>
    <?php
    // --- Display Output / Function Call ---
    displayPlanetList($solarSystemPlanets);
    ?>

    <h2>Featured Celestial Bodies:</h2>
    <?php
    // --- Fragmentation (Content Fragment) ---

    $featuredBodies = ["Earth", "Mars", "Jupiter", "Moon"];
    foreach ($featuredBodies as $bodyName) {
        // --- Conditional ---
        // Check if the celestial body details exist before trying to access them
        if (isset($celestialDetails[$bodyName])) {
            $currentBodyDetails = $celestialDetails[$bodyName];
            include 'page/index.php';
        } else {
            echo "<p>Details for <strong>" . $bodyName . "</strong> not available.</p>";
        }
    }
    ?>

</main>

<?php
// --- Fragmentation ---
include 'page/footer.php';
?>