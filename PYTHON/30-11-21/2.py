#Remove first n characters from a string

def remove_first_char(org_str, n):
    
    mod_string = ""
    for i in range(n, len(org_str)):
        mod_string = mod_string + org_str[i]
    return mod_string
    
s1 = input("enter string : ")
n = int(input("enter number : "))
output = remove_first_char(s1,n)
print(output)