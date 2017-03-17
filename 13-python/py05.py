#! /usr/bin/python

print 'Content-type: text/html'
print ''

def sayHello():
    print "Hello!"

sayHello()

def saySomething(sg):
   print sg

saySomething("Hi there!")

def multiply(x, y):
    return x*y

print mulitply(4, 6)

def highestCommonFactor(a, b):
    hcf = 1
    if b>a:
        c = a
        a = b
        b = c
    for i in range(a+1):
        if a%i==0 and b%i==0:
            hcf = i
    return hcf
print highestCommonFactor(10,15)

a=5
b=6
def add():
    return a+b
print add()

