<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <link rel="stylesheet" href="css/style.css?v=06052019">
    <title>Rock, paper</title>
</head>

<body>
    <br><br>
    <div class="container">

        <div class="top">
            <h1 id="playerScore">0</h1>
            <h1>Select gesture</h1>
            <h1 id="computerScore">0</h1>
        </div>

        <form id="myForm">


            <div id="choiceContainer"></div>

            <div class="names">

                <div id='playerName' class="player block">Player</div>
                <div class="computer block">Computer</div>
                <div class="clear"></div>

            </div>

            <div class="center">
                <div class="playerChoice block">
                    <img src="img/question.png" id="playerChoiceImg" class="battle" alt="">
                </div>
                <div class="vs block">vs.</div>
                <div class="computerChoice block">
                    <img src="img/question.png" id="computerChoiceImg" class="battle" alt="">
                </div>
                <div class="clear"></div>


            </div>

            <div id="result"></div>

            <input type='hidden' name='playerChoice' min='1' max='5' id="choice" required/>

        </form>

    </div>
</body>


<script type="text/javascript" src="js/game.js?v=06052019"></script>

</html>
