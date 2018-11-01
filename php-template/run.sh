echo "TECHIO> open -s /project/target/ $1.html"
echo "TECHIO> redirect-streams 'Output'"
php $1".php" > "output.html"
php Test.php "output.html" $2
