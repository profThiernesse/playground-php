
echo "TECHIO> redirect-streams 'Output'"
php $1".php" > "output.html"
php Test.php "output.html" $2
echo "TECHIO> open -s /project/target/ output.html"