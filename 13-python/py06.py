#! /usr/bin/python

print 'Content-type: text/html'
print ''

import cgi
form = cgi.FieldStorage()

reds = 0
whites = 0

if "answer" in form:
    answer = form.getvalue("answer")
else:
    answer = ""
    for i in range(4):
        answer += str(random.randint(0,9))

if "guess" in form:
    guess = form.getvalue("guess")
    for key, digit in enumerate(guess):
        if digit == answer[key]:
            reds += 1
        else:
            for answerDigit in answer:
                if answerDigit == digit:
                    whites += 1
                    break
        
else:
    guess = ""

if "nrGuesses" in form:
    nrGuesses = int(form.getvalue("nrGuesses")) + 1
else:
    nrGuesses = 0

if nrGuesses==0:
    msg = "I've chosen a 4 digit number. Can you guess it?"
else if reds==4:
   msg = "Well done! You got it in " + str(nrGuesses) + " guesses. <a href=''>Play again</a>"
else:
    msg = "You have " + str(reds) + " correct digit(s) in the right place, and " + str(whites) + " correct digit(s) in the wrong place. You have had " + str(nrGuesses) + " guess(es)."
print '<h1>Mastermind</h1>'
print '<p>I've chosen a 4 digit number. Can you guess it?</p>'
print '<form method="post">'
print '<input type="text" name="guess" value="' + guess " '">'
print '<input type="hidden" name="answer" value="' + answer +'">'
print '<input type="hidden" name="nrGuesses" value="'+ nrGuesses +'">'
print '<input type="submit" value="Guess!">'
print '</form>'
