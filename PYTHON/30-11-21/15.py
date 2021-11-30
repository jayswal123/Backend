#Remove all occurrences of a specific item from a list.

list1 = [8, 60, 45, 20, 25, 70, 20]

def remove_value(sample_list, val):
    return [i for i in sample_list if i != val]

res = remove_value(list1, 20)
print(res)
