 <?php
 //the long version
 for( $i= 1 ; $i <= 100 ; $i++ )
 {
     if( $i%3 === 0 && $i%5 === 0)
     {
         print 'FizzBuzz' . PHP_EOL;
     }
     elseif($i%3 === 0 )
     {
         print 'Fizz' . PHP_EOL;
     }
     elseif($i%5 === 0)
     {
         print 'Buzz' . PHP_EOL;
     }
     else
     {
        print $i . PHP_EOL;
     }
 }
 
 
 
//the compact version
 for( $i= 1 ; $i <= 100 ; $i++ )
 {
    if($i%3 === 0 || $i%5 === 0)
    {
         print (($i%15 === 0 ) ? 'FizzBuzz' : ($i%3 === 0 ) ? 'Fizz' : 'Buzz') . PHP_EOL;
         continue;
    }
    print $i . PHP_EOL;
 }
