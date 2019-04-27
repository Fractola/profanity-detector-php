# My Profanity Analysis Project

This project takes a string an detects if any profanities are in the string, it passes a variable by reference and returns a array 
with the the profane words and also the reference is stored in the parameter $string the function assigns a new value to $string, which changes the value stored in the variable that was passed to the function.

The value stored in $string passed by reference to function hate_word , is a value with the profane words . In the funtion the value 
is extracted of the profane words ands returned as an array.

The reference value is obfuscated of the dirty words, and because its passed by reference it can be used directly


It's very easy to use and can filter a 100 chars string in about 0.0021 seconds!
Here is an additional quick introduction, if necessary.

## Why?

This project exist to aid any develover who aims to produce content that is not profane and vulgar to the readers ,
it's a simple project with little overhead run effiently and can be extented by adding profane word specific to your region/country.



## Usage

Here is a simple usage of the function.

Just subsititute the string for the string you want analysed

```bash
$string = "If you go home with somebody, and they don't have fucken books, don't fuck 'em!";
$hate_word = hate_word(strtolower($string)); 
$counts = get_word_counts($hate_word);
        
if (!empty($counts)) {
        
        foreach ($counts as $word => $word) {
            echo "This word, <b>$word</b> is a swear word please change it!";
            echo '<br>';
        }
            echo "Sanitized string";
            echo '<br>';
            echo $string;
}

```

Make sure your examples work by testing them! I didn't test mine and I should feel ashamed.

## License

Profanity Analysis is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT)

