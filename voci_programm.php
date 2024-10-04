<?php

system("clear");
echo "\nHerzlich Willkommen zu meinem kleinen Italienisch Vokabular Test.
*********************************************************************\n\n";


//Bekommt man Daten von hier.
//get information from JSON file
$path = "q_a.json";
$questions_string = file_get_contents($path);
$questions_data = json_decode($questions_string, true);


/*
// dieser ganze Codeblock nimmt die Daten vom JSON, zeigt sie, wartet auf den Benutzer input,kontrolliert mit der Antwort und sagt ob richtig oder falsch und beendet wenn 5 fragen gestellt worden sind.
foreach ($questions_data as $numbers => $q_a){
  if ($numbers == "6") break;
  //get the question
  $question = $q_a["question"];

  //echo the question
  echo("Frage: $question\n\n");

  //user input
  $guess = readline("Antwort: ");

  //get answers from json file
  $answer = $q_a['answer'];

  //if guess equals answer, echo true
  if ($guess == $answer) {
    //success message
    echo("\nDie Antowort $guess ist richtig! \n");
  }
  //false message
  else {
    echo "\nDie Antwort $guess ist leider falsch!\n";
    echo "Die richtige Antwort wäre $answer. \n";
  }
}
*/


$points = 0;

//system("clear"); löscht text vom system ausser was später kommt.
//while schleife mit if drinnen
//nicht immer neustarten, sondern im menü bleiben und nochmals versuchen

$repeat = true;
$repeat2 = true;
while ($repeat) {
    $schwierigkeit = readline("Wie würden sie sich einschätzen? \nBitte schreiben sie Fortgeschritten oder Anfaenger: ");
    if ($schwierigkeit == "Fortgeschritten") {
        system("clear");
        echo "Sie haben Fortgeschritten gewahlt. \n";
        $anzahl_fortgeschritten = readline("Moechten sie 5 oder 10 Vokabeln testen? ");

        if ($anzahl_fortgeschritten == "5") {
            system("clear");
            echo "Sie haben 5 gewaehlt.\n";
            echo "Bitte antworten sie in einem Wort mit dem ersten Buchstaben gross.\n\n";


            foreach ($questions_data as $numbers => $q_a){
              if ($numbers == "6") break;
              //get the question
              $question = $q_a["question"];

              //echo the question
              echo("Übersetzen sie: $question\n\n");

              //user input
              $guess = readline("Antwort: ");

              //get answers from json file
              $answer = $q_a['answer'];

              //if guess equals answer, echo true
              if ($guess == $answer) {
                //success message
                system("clear");
                echo("\nDie Antowort $guess ist richtig! \n");
                $points ++;
              }
              //false message
              else {
                system("clear");
                echo "\nDie Antwort $guess ist leider falsch!\n";
                echo "Die richtige Antwort wäre $answer. \n\n";
              }
            }

            echo "Sie hatten $points von 5 richtig! \n";

            function note($note){
              echo "Sie haben die Note $note.\n\n";
            };
            note(round(($points*5/5+1)*20)/20);
            round($betrag * 20) / 20;
            break;

        } elseif ($anzahl_fortgeschritten == "10") {
            system("clear");
            echo "Sie haben 10 gewaehlt.\n";
            echo "Bitte antworten sie in einem Wort mit dem ersten Buchstaben gross.\n\n";


            foreach ($questions_data as $numbers => $q_a){
              if ($numbers == "16") break;
              if ($numbers == "1") continue;
              if ($numbers == "2") continue;
              if ($numbers == "3") continue;
              if ($numbers == "4") continue;
              if ($numbers == "5") continue;

              //get the question
              $question = $q_a["question"];

              //echo the question
              echo("Übersetzen sie: $question\n\n");

              //user input
              $guess = readline("Antwort: ");

              //get answers from json file
              $answer = $q_a['answer'];

              //if guess equals answer, echo true
              if ($guess == $answer) {
                //success message
                $points ++;
                system("clear");
                echo("\nDie Antowort $guess ist richtig! \n");
              }
              //false message
              else {
                system("clear");
                echo "\nDie Antwort $guess ist leider falsch!\n";
                echo "Die richtige Antwort wäre $answer. \n\n";
              }
            }

            echo "Sie hatten $points von 10 richtig! \n";
            function note($note){
              echo "Ihre Note ist $note.\n\n";
            };
            note($points*5/10+1);
            break;

        } else {
            system("clear");
            echo "Diese Anzahl Fragen gibt es nicht.\n";
        }


    } elseif ($schwierigkeit == "Anfaenger") {
      system("clear");
      echo "Sie haben Anfaenger gewaehlt. \n";

      while ($repeat2) {

        $anzahl_anfaenger = readline("Moechten sie 5 oder 10 Vokabeln testen? ");
        if ($anzahl_anfaenger == "5") {
            system("clear");
            echo "Sie haben 5 gewaehlt.\n";
            echo "Bitte antworten sie in einem Wort mit dem ersten Buchstaben gross.\n\n";



            foreach ($questions_data as $numbers => $q_a){
              if ($numbers == "21") break;
              if ($numbers == "1") continue;
              if ($numbers == "2") continue;
              if ($numbers == "3") continue;
              if ($numbers == "4") continue;
              if ($numbers == "5") continue;
              if ($numbers == "6") continue;
              if ($numbers == "7") continue;
              if ($numbers == "8") continue;
              if ($numbers == "9") continue;
              if ($numbers == "10") continue;
              if ($numbers == "11") continue;
              if ($numbers == "12") continue;
              if ($numbers == "13") continue;
              if ($numbers == "14") continue;
              if ($numbers == "15") continue;


              //get the question
              $question = $q_a["question"];

              //echo the question
              echo("Übersetzen sie: $question\n\n");

              //user input
              $guess = readline("Antwort: ");

              //get answers from json file
              $answer = $q_a['answer'];

              //if guess equals answer, echo true
              if ($guess == $answer) {
                //success message
                $points ++;
                system("clear");
                echo("\nDie Antowort $guess ist richtig! \n");
              }
              //false message
              else {
                system("clear");
                echo "\nDie Antwort $guess ist leider falsch!\n";
                echo "Die richtige Antwort wäre $answer. \n\n";
              }
            }

            echo "Sie hatten $points von 5 richtig! \n";
            function note($note){
              echo "Ihre Note ist $note.\n\n";
            };
            note($points*5/5+1);
            break;
            break;
            $repeat2 = false;



        } elseif ($anzahl_anfaenger == "10") {
            system("clear");
            echo "Sie haben 10 gewaehlt.\n";
            echo "Bitte antworten sie in einem Wort mit dem ersten Buchstaben gross.\n\n";


            foreach ($questions_data as $numbers => $q_a){
              if ($numbers == "1") continue;
              if ($numbers == "2") continue;
              if ($numbers == "3") continue;
              if ($numbers == "4") continue;
              if ($numbers == "5") continue;
              if ($numbers == "6") continue;
              if ($numbers == "7") continue;
              if ($numbers == "8") continue;
              if ($numbers == "9") continue;
              if ($numbers == "10") continue;
              if ($numbers == "11") continue;
              if ($numbers == "12") continue;
              if ($numbers == "13") continue;
              if ($numbers == "14") continue;
              if ($numbers == "15") continue;
              if ($numbers == "16") continue;
              if ($numbers == "17") continue;
              if ($numbers == "18") continue;
              if ($numbers == "19") continue;
              if ($numbers == "20") continue;


              //get the question
              $question = $q_a["question"];

              //echo the question
              echo("Übersetzen sie: $question\n\n");

              //user input
              $guess = readline("Antwort: ");

              //get answers from json file
              $answer = $q_a['answer'];

              //if guess equals answer, echo true
              if ($guess == $answer) {
                //success message
                $points ++;
                system("clear");
                echo("\nDie Antowort $guess ist richtig! \n");
              }
              //false message
              else {
                system("clear");
                echo "\nDie Antwort $guess ist leider falsch!\n";
                echo "Die richtige Antwort wäre $answer. \n";
              }
            }

            echo "Sie hatten $points von 10 richtig! \n";
            function note($note){
              echo "Ihre Note ist $note.\n\n";
            };
            note($points*5/10+1);
            
            break;
            break;
            $repeat2 = false;



        } else {
            system("clear");
            echo "Diese Anzahl Fragen gibt es nicht.\n";
        }
      }


      } else {
        system("clear");
        echo "Diese Schwierigkeitsstufe gibt es nicht.\n";

    }
}

//punkte system
