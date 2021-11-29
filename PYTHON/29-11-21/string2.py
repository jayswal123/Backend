import base64


a="hello \tWorld12"
c=a.capitalize()
b=a.center(40,'f')
print(c)
print(b)
str=a.count('l',0,len(a))
print(str)
b=a.endswith('l',0,len(a))
print(b)
b=a.find('l',0,len(a))
print(b)
str = base64.b64encode(a.encode('utf-8',errors = 'strict'))
print(str)
print (a.expandtabs(16))
print (a.index('W'))
print (a.isalnum())




 #second page

print (a.isalpha())
print (a.isdigit())
print (a.islower())
print (a.isnumeric())
print (a.isspace())
print (a.istitle())
print (a.isupper())
print (len(a))
print (a.lower())
print (a.lstrip())
print ("Max character: " + max(a))
print ("Min character: " + min(a))
print (a.replace("is", "was"))
print (a.rfind('g', 0, len(a)))
print (a.rstrip('*'))
print (a.split('l',1))



print (a.swapcase())
print (a.startswith( 'this' ))
print ("upper : ",a.upper())
print (a.isdecimal())


s = "-"
seq = ("a", "b", "c")
print (s.join( seq ))


