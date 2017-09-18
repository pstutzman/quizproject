<?php

 /*
 Name: Paula Stutzman
 Date: 3/10/2017
 Project 3 - Spring 2017
 Description: This is a program that will present a quiz, collect answers,
 and grade it. The quiz questions and answers are stored as an
array.
 The program makes extensive use of loops and user defined functions
 to work its magic.
*/

 // Array Definition in GLOBAL scope

 $num = 0;

 $questions = array( 0=> 'What is the fastest land animal on the planet?',
 1=> 'What is 5 plus 2?',
 2=> 'Physics is bounded by the laws of ___ '

 );

 $choices = array(
 array ('a'=>'Cow', 'b'=>'Horse', 'c'=>'Cheetah', 'd'=>'Elvis'),
 array ('a'=>'7', 'b'=>'2', 'c'=>'8'),
 array ('a'=>'Mother Nature', 'b'=>'Chuck Norris')

 );

 $answers = array( 'c','a','b' );

 print "<h1>Quiz</h1>\n<form action='' method='post'>\n";

 if ($_POST)
 grade_quiz($answers);
 else
 present_quiz($questions, $choices);

 print "</body></html>\n";

 // End of main program

//present quiz

 function present_quiz($questions, $choices) {

 foreach ($questions as $num => $question) {
 print "$num. $question<br>\n";

 $current_choices = $choices[$num]; // array containing choices for the current
question.
 foreach ($current_choices as $letter => $choice) {
 print "<input type=radio name='test_q$num' value='$letter' > $choice<br>\n";

 }
 }

 print "<br><input type=submit></form>\n";

 }

//grade quiz

 function grade_quiz($answers, $choices ) {

 print "<h1>Results</h1>\n";


 foreach ($answers as $num => $ans) {
 $grade = "test_q$num";
 print "$num. Answer is: $answers[$num],you chose: $_POST[$grade]\n";

 $total++;

 if($_POST[$grade] == $answers[$num]){
 print "Correct <br><br>\n";
 $correct++;

 }
 else
 print "Incorrect <br><br>\n";

 }
 print_results($correct, $total);

 }

 function print_results($num_correct, $total_questions) {
 $score = $num_correct/$total_questions * 100;
 print "You got: $num_correct correct out of: $total_questions. Your score is:
$score ";

 }

?>

 <!DOCTYPE html>
 <html><head><style>
 body {font-family: sans-serif; font-size: 13px; color: #333; margin: 2% 20%;
 padding: 3em; border: 1px solid #DDD; }
 h1 {color: #447; }
 </style></head> <body>

 <?php
