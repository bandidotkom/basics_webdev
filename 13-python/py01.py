#! /usr/bin/python

print 'Content-type: text/html'
print''

age = 35
print age

pi = 3.14
print pi

name = "Bandi"
print name

print age / pi

number = "5"
print number*3
print int(number)*3

str = "My name is: "
print str[0]
print str[1]
print str+name

myList = ["Bandi", "Tomi", "James", "Rosi"]
print myList
print myList[2:4]

myTuple = (1, 2, 3, 4)
print myTuple[2]

myDictionary = {}
myDictionary["dad"] = "Bandi"
myDictionary["dog"] = "James"
print myDictionary["dad"]
print myDictionary.items()
print myDictionary.values()
print myDictionary.keys()