#! /usr/bin/python

print 'Content-type: text/html'
print''

for i in range(11):
    print i

favouriteFoods = ["Pizza", "Chocolate", "Ice Cream"]
for food in favouriteFoods:
	print "I like eating " + food +"."

x=0
while x<= 10:
    print x
    x += 1

persons = {}
persons["B"] = 21
persons["T"]= 38
persons["J"]= 2
persons["R"]= 78
for person in persons:
    print person, " is ", persons[person]
