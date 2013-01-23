siege -f ./urls.txt -c 100 -r 5 -d1 -i -v
#php urlgenerator.php|xargs -n1 | xargs -I@ siege -c 2 -r 1 -d1 -i -v @
