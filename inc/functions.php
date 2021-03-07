<?php
$quotes[] = array (
	'quote' => 'Every great developer you know got there by solving problems they were unqualified to solve until they actually did it.',
	'source' => 'Patrick McKenzie',
	'citation' => 'Twitter',
	'year' => '2016'
);

$quotes[] = array (
	'quote' => 'The greatest glory in living lies not in never falling, but in rising every time we fall.',
	'source' => 'Nelson Mandela',
	'citation' => '',
	'year' => ''
);

$quotes[] = array (
	'quote' => 'Folks are usually about as happy as they make their minds up to be.',
	'source' => 'Abraham Lincoln ',
	'citation' => '',
	'year' => ''
);

$quotes[] = array (
	'quote' => 'You cannot find peace by avoiding life.',
	'source' => 'Michael Cunningham',
	'citation' => 'The Hours',
	'year' => '2002'
);

$quotes[] = array (
	'quote' => 'I know what they would like, they would like a blank they could fill in. A person already filled in disturbs them terribly.',
	'source' => 'Patricia Highsmith',
	'citation' => 'The Price of Salt',
	'year' => '1952'
);

/*
	Function that receives the array of quotes as a parameter.
	It obtains a random number and with this number it obtains
	an element from the quotes array and passes this element to
	the printQuote function.
*/
function getRandomQuote($quotes){
	$num = rand(0, 4);
	$quote = $quotes[$num];
	printQuote($quote);
}

/*
	Function that receives quote element from the quotes array.
	It echo's the quote.
*/
function printQuote($quote){

	echo "<p class='quote'>".$quote['quote']."</p></br>
	  <p class='source'>".$quote['source']."
	  <span class='citation'>".$quote['citation']."
	  </span><span class='year'>".$quote['year']."</span></p>";

}

getRandomQuote($quotes);
?>