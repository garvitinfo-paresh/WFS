##decode() is a method specified in Strings. This method is used to convert from one encoding scheme,
##in which the argument string is encoded to the desired encoding scheme. This works opposite to
##the encode. It accepts the encoding of the encoding string to decode it and
##returns the original string.
##String = "python is a popular programming language"
##########
##x=String.encode('utf-8')
##print(x)
##txt = "My name is Ståle"
##
##x = txt.encode()
##
##print(x)
##encoded_string = String.encode('utf-16')
##print('The encoded string in base64 format is :')
##print(encoded_string)
##
####
##decoded_string = encoded_string.decode('utf-16')
##print('The decoded string is :')
##print(decoded_string)

import subprocess
a=subprocess.Popen(["echo","helloo"],shell=True,stdout=subprocess.PIPE,stderr=subprocess.PIPE)
out,err=a.communicate()
print(out)

##communicate() returns a tuple The data will be strings if streams were opened in text mode;
##otherwise, bytes.

##txt = "Python is a popular programming language"
##x = txt.split(" ",3)
##print(x)








