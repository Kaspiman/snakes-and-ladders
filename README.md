# Snakes and Ladders technical challenge

The challenge is to create an OOP version of CLI tool that plays a
multiplayer game of snakes and ladders on it’s own, use PHP 7+. Using
modern technics & tools of code organisation, correctness check, and
delivery would be appreciated.

### Important!

I did not leave comments on methods and classes because I consider their
names self-evident.

### How to run?

- clone repository
- run `composer install`
- run `php bin/console snakes-and-ladders-game:play`
- you may check the code quality, run `composer phpstan`

### What's inside?

- PHP 7.1.3+
- Symfony 4 (Flex) basic app
- PHPStan

### Rules

- You must continue to roll the dice every second till you reach position 100 exactly, you start at position 1
- If your new position after the roll divides by 9 (9, 18, 27, 36…) you landed on a snake and must move back 3 places
- If your new position after the roll is 25 or 55 you must move forward 10 places
- If your roll is near the end of the game and you do not roll enough to move exactly to 100, you do not move forward
- You must output on a new line each turns dice roll, if they landed on a snake or ladder and where their final position was
- There must be a hyphen to separate the dice roll from the position and
  snake/ladder verdict

### My Result

7 - 8

10 - snake 15

2 - 17

8 - ladder 35

8 - 43

5 - 48

12 - 60

8 - 68

10 - 78

9 - 87

9 - 87

5 - 92

7 - snake 96

6 - 96

10 - 96

5 - 96

7 - 96

6 - 96

6 - 96

6 - 96

9 - 96

12 - 96

9 - 96

5 - 96

10 - 96

8 - 96

10 - 96

10 - 96

8 - 96

11 - 96

4 - 100
