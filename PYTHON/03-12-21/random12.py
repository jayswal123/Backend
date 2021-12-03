import random

#random will print diffrent values , everytime you run the code 

print(random.getrandbits(8))
print(random.randrange(3, 9))
mylist = ["apple", "banana", "cherry"]
print(random.choice(mylist))
print(random.choices(mylist, weights = [10, 1, 1], k = 14))
random.shuffle(mylist)
print(mylist)
print(random.sample(mylist, k=2))
print(random.random())
print(random.uniform(20, 60))
print(random.triangular(20, 60, 30))
