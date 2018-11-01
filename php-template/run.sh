
echo "TECHIO> redirect-streams 'Output'"
php $1".php" > "output.html"
php Test.php "output.html" $2

cat output.html
ls -al

echo "TECHIO> open -s /project/target/ output.html"
