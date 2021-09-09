
           
POINT INFO ===> REGEX :

/*(a|b|z) =>  a ou b ou z
[a-z0-9] => alphanumérique
[a-c] => a b ou c
^ => début de ligne
$ fin de ligne
+ 1 ou plusieurs fois
? optionnel donc 0 ou 1 fois
* 0 ou 1 ou plusieurs fois
...

^[a-zA-Z]* ?'?[a-zA-Z]+$
                    
https://www.php.net/manual/fr/function.preg-match.php

                    