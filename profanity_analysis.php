<?php

function hate_word(&$string)
{ 
    $str = str_replace(array("\r", "\n"), ' ', $string);
    $bad = array('word','ass','ass fuck','ass hole','assfucker','asshole','assshole','bastard','bitch','black    cock','bloody hell','boong','cock','cockfucker','cocksuck','cocksucker','coon','coonnass','crap','cunt','cyberfuck','damn','darn','dick','dirty','douche','dummy','erect','erection','erotic','escort','fag','faggot','fuck','Fuck off','fuck you','fuckass','fuckhole','fuckhole','god damn','gook','hard core','hardcore','anal','anus','arse','homoerotic','hore','lesbian','lesbians','mother fucker','motherfuck','motherfucker','negro','nigger','orgasim','orgasm','penis','penisfucker','piss','piss off','porn','porno','pornography','pussy','retard','sadist','sex','sexy','shit','slut','son of a bitch','suck','tits','viagra','whore','xxx');
    $piece = explode(" ",$str);
    $badword = array();
    $r=0;
    for($i=0; $i < sizeof($bad); $i++)
    {
        for($j=0; $j < sizeof($piece); $j++)
        {
            if($bad[$i] == $piece[$j])
            { 
                $badword[$r] = $bad[$i];
                $r++;
            }
        }
    }
    foreach ($badword as $word => $word) 
    {
            $string = str_replace($word,"*****", $string);
    }
   
    return $badword;
}

function get_word_counts($phrases)
{
    $counts = array();
    for($i=0; $i < sizeof($phrases); $i++)
        {
            $phrases[$i] = preg_replace("#[^a-zA-Z\-]#", "", $phrases[$i]);
            @$counts[$phrases[$i]] += 1;
        
        }
   
    return $counts;
}

$string = "If you go home with somebody, and they don't have fucken books, don't fuck 'em!";
$hate_word = hate_word(strtolower($string)); 
$counts = get_word_counts($hate_word);
        
if (!empty($counts)) 
{
        foreach ($counts as $word => $word) 
        {
            echo "This word, <b>$word</b> is a swear word please change it!";
            echo '<br>';
        }
            echo "Sanitized string";
            echo '<br>';
            echo $string;
}


?>
