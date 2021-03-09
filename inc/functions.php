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
	an element from the quotes array and returns the quote.
*/
function getRandomQuote($quotes){
	$num = rand(0, 4);
	return $quotes[$num];
}

/*
	Function that calls the calls the getRandomQuote function and.
    echo's the html string for the quote.
*/
function printQuote(){
    global $quotes;
    $quote = getRandomQuote($quotes);

    $html_string = "<p class='quote'>".$quote['quote']."</p></br>
                    <p class='source'>".$quote['source'];

    if(!empty($quote['citation'])){
        $html_string .= "<span class='citation'>".$quote['citation'];
    }

    if(!empty($quote['citation'])){
        $html_string .= "</span><span class='year'>".$quote['year']."</span></p>";
    }

    echo $html_string;
}

function getRandomColor(){
    $color_array = array( "#00FFFF", "#7FFFD4", "#DC143C", "#006400", "#FF1493","#4B0082");
    $num = rand(0, 5);

    echo $color_array[$num];
}

