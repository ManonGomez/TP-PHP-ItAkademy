# TP-PHP-ItAkademy
D12
---------------------------
tp statement:

0. GIT
The project will be saved in a project under GIT
Create the work environment

1. Server
We will use the internal development server. To launch it: open your terminal,
go to your working directory and run php -S localhost: 8080

2. Index.php page
Create the index.php page, it contains a welcome message
Open your browser at the following address: localhost: 8080
Verify that your welcome message is displayed

3. config.php file
Define in this file the constant (s) of the working environment:
- title of the site
Create a participant directory

4. Bootstrap (optional)
We will use bootstrap to design our site
https://getbootstrap.com/docs/4.3/getting-started/introduction/
Modify the index.php page by integrating bootstrap

5. Retrieving the parameters
Include the file config.php in index.php and make sure that the title of the site is the one that is
declared in the file config.php
Do the same manipulation for all future files

6. Game.php Page
Create a game.php page that contains a form
- method: post
- action: participate.php
 - field: email, name, first name
 
7. Participate page.php
Create a page to participate.php
View recovered data
Secure the data
Save the data to a file named: <user-given email> .txt
The location of the file: directory "participants"
format of the data to be recorded: email, name, firstname
Process the case where the same email is returned multiple times.

8. login.php page
Create a login.php page that contains a form
- method: post
- action: account.php
 - field: email, password
 
9. Account.php Page
If login == 'admin' and password == 'hello' then show 'Hello Admin', this is your
dashboard "
If not send back to the login.php page

10. Participant page.php
Only people who are identified can access this page, redirection to login.php
if they are not identified.
View the list of people participating in the game

11. Page index.php
Modify the index.php page to put an account that tells how often the person to
display the page.
Add the link to the game.

-------------------------------------------
PT

12. Calculator page.php
Create the calculator.php page that contains a form to do the exercise:
Calcul5.php
Create a function that performs four basic math operations.
The function must take three arguments - operation (string / character), value1 (number),
value2 (number).
The function must return the result of the numbers after the application of the chosen operation.
(If you know how to use Ajax, then implement it in Ajax)

13. disconnect
Make the function to disconnect

14. Menu
Make a menu containing the following links:
- home: index.php
- Game: game.php
- Login: login.php
- Calculator: calculator.php
If the person is connected (via login.php) add
- search search.php
- Participants Participants.php
- Sign out
- Do not display login

14. Search engine
Make a search.php page that contains
A form
GET method,
An input to do the research
Action: search.php
A part that displays the result of the search: list of file names present in the
participant directory starting with the word.
