 var playerName = prompt('Enter your name');

 if (playerName) {
     $('#playerName').html(playerName);
 }

 var playerScore = 0;
 var computerScore = 0;


 for (var i = 1; i < 6; i++) {
     $('#choiceContainer').append("<img src=\"img/" + i + ".png\" class=\"choice\" id=" + i + ">");
 }

 $('.choice').on('click', function () {

     $('#choice').val($(this).attr('id'));
     $('#playerChoiceImg').attr('src', 'img/' + $(this).attr('id') + '.png');

     var playerChoice = $('#choice').val();

     $.ajax({
         url: 'engine.php',
         method: "POST",
         data: {
             playerChoice: playerChoice
         },
         dataType: "JSON",
         success: function (response) {

             $('#computerChoiceImg').attr('src', 'img/' + response.computerChoice + '.png');

             if (response.result[0] == 'You win!') {
                 $('#result').css("background-color", "#a5ff82");

                 playerScore += 1;

                 var html = `<p>${response.result[0]}</p>
                                <p>${response.result[1]}</p>        
                    `;

                 $('#result').html(html);
                 $('#choice').val('');
                 $('#playerScore').html(playerScore);
             } else if (response.result[0] == 'You lose...') {
                 $('#result').css("background-color", "#FF8282");

                 computerScore += 1;

                 var html = `<p>${response.result[0]}</p>
                                <p>${response.result[1]}</p>        
                    `;

                 $('#result').html(html);
                 $('#choice').val('');
                 $('#computerScore').html(computerScore);
             } else {
                 $('#result').css("background-color", "#80e1fc");

                 var html = `<p>${response.result}</p>
                    `;

                 $('#result').html(html);
                 $('#choice').val('');

             }
         }
     });
 });
