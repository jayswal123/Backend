import random


random.seed(10)
print(random.random())
print(random.getstate())


print(random.random())           #print a random number:
state = random.getstate()        #capture the state:
print(random.random())           #print another random number:
random.setstate(state)           #restore the state:
print(random.random())           #and the next random number should be the same as when you captured the state
