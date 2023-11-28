<?php
// snack 1

$partite = [
    [
        "squadra_casa" => "Atlanta Hawks",
        "squadra_ospite" => "Oklahoma City Thunder",
        "punti_casa" => "50",
        "punti_ospite" => "45",
    ],
    [
        "squadra_casa" => "Charlotte Hornets",
        "squadra_ospite" => "Chicago Bulls",
        "punti_casa" => "37",
        "punti_ospite" => "44",
    ],
    [
        "squadra_casa" => "Cleveland Cavaliers",
        "squadra_ospite" => "Denver Nuggets",
        "punti_casa" => "37",
        "punti_ospite" => "82",
    ],
    [
        "squadra_casa" => "Milwaukee Bucks",
        "squadra_ospite" => "Washington Wizards",
        "punti_casa" => "46",
        "punti_ospite" => "75",
    ],
];

// snack 2
if (!isset($_GET['name']) || strlen($_GET['name']) > 3) {
    $name = false;
} else {
    $name = true;
}

if (!isset($_GET['mail']) || str_contains(($_GET['mail']), '@') && str_contains(($_GET['mail']), '.')) {
    $mail = false;
} else {
    $mail = true;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>PHP Snacks</title>
</head>

<body>
    <!-- snack 1 -->
    <div class="container">
        <h2>Snack 1</h2>
        <?php
        foreach ($partite as $match) { ?>
            <div>
                <?php echo "{$match["squadra_casa"]} - {$match["squadra_ospite"]} | {$match["punti_casa"]} - {$match["punti_ospite"]}; " ?>
            </div>
        <?php } ?>
    </div>
    <!-- snack 2 -->
    <div class="container mt-5">
        <h2>Snack 2</h2>
        <form>
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name">
                <?php if ($name) { ?>
                    <div class="form-text">minimo 4 caratteri</div>
                <?php } ?>

                <label for="mail" class="form-label">Mail</label>
                <input type="text" class="form-control" id="mail" name="mail">
                <?php if ($mail) { ?>
                    <div class="form-text">deve contenere @ e .</div>
                <?php } ?>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

</body>

</html>