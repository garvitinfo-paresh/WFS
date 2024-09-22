##OS.walk() generate the file names in a directory
##tree by walking the tree either top-down or bottom-up. 
import os
##a=os.listdir("E:\D drive\IANT\IANTPYTHON")
##print(a)
a=os.walk("E:\D drive\IANT\IANTPYTHON")
print(a)
##
for i in a:
    print(i)
