Snakes and Ladders technical challenge


The challenge is to create an OOP version of CLI tool that plays a multiplayer game of snakes and ladders on it’s own, use PHP 7+. Using modern technics & tools of code organisation, correctness check, and delivery would be appreciated.

Put the result on GitHub and the link back.


Rules


You must continue to roll the dice every second till you reach position 100 exactly, you start at position 1


If your new position after the roll divides by 9 (9, 18, 27, 36…) you landed on a snake and must move back 3 places


If your new position after the roll is 25 or 55 you must move forward 10 places


If your roll is near the end of the game and you do not roll enough to move exactly to 100, you do not move forward


You must output on a new line each turns dice roll, if they landed on a snake or ladder and where their final position was


There must be a hyphen to separate the dice roll from the position and snake/ladder verdict

12 - 13
6 - 19
8 - snake 24
6 - 30
7 - 37
6 - 43
5 - 48
6 - snake 51
7 - 58
4 - 62
9 - 71
9 - 80
8 - 88
8 - stand 88
6 - 94
11 - stand 94
8 - stand 94
7 - stand 94
5 - snake 96
9 - stand 96
7 - stand 96
11 - stand 96
9 - stand 96
6 - stand 96
8 - stand 96
9 - stand 96
6 - stand 96
9 - stand 96
7 - stand 96
7 - stand 96
12 - stand 96
10 - stand 96
8 - stand 96
11 - stand 96
9 - stand 96
7 - stand 96
10 - stand 96
4 - 100
