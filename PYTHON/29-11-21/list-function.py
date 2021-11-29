

list1, list2 = [123, 'xyz'], [456, 'abc']
#print (cmp(list1, list2))
#print (len(list1))
print ("Max value element : ", max(list1))
print ("Max value element : ", min(list1))
list1.append('C#')
print ("Count for 123 : ", list1.count(123))


list1.extend(list2)
print ('Extended List :', list1)
print ('Index of C#', list1.index('C#'))
list1.insert(1, 'efg')
print ('Final list : ', list1)
