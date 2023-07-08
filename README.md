# songDB
Church Song Usage Database

This is just my little pet project, as I am starting to learn about databases in class. 

I decided to make a mySQL database to track what songs we use at church. I'm sure there are already databases that do this, but I'm trying to figure it out myself.

I've hit a little bit of a wall. As of 7/8/2023 3:04am CST I can add a record to the database if I put in nothing but numbers. however, if I add in any text I get the following error:

  Fatal error: Uncaught mysqli_sql_exception: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right  
  syntax to use near 's Your Grace','C','4/4','Bob Kauflin, Doug Plank','CCLI Song # 7001321 Bob Kauf' at line 1 in 
  /home/hostwithhope/songdb.morethanredemptionmusic.com/phpForm.php:26 Stack trace: #0 /home/hostwithhope/songdb.morethanredemptionmusic.com/phpForm.php(26): mysqli-
  >query('INSERT INTO tbl...') #1 {main} thrown in /home/hostwithhope/songdb.morethanredemptionmusic.com/phpForm.php on line 26

