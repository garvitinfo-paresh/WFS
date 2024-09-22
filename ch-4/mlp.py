import subprocess
##
##a=subprocess.Popen("php E://p1.php",stdout=subprocess.PIPE)
##a=subprocess.Popen("php C://xampp//htdocs//php12//PHP//prg1.php",shell=True,stdout=subprocess.PIPE)
##b=a.stdout.read()
##print(b)

#subprocess module:
##Subprocess in Python is a module used to run new codes and applications by
##creating new processes. It lets you start new applications right from
##the Python program you are currently writing. So, if you want to run external
##programs from a git repository or codes from C or C++ programs,you can use
##subprocess in Python. You can also get exit codes and input, output,or error
##pipes using subprocess in Python.

import os
##os.system('notepad')
##os.system("echo $HOME")

##or
##os.system('echo %s'%'$HOME')
##os.system() method execute the command (a string) in a subshell.This method is implemented by
##calling the Standard C function system(),and has the same limitations. If command generates any
##output, it is sent to the interpreter standard output stream. Whenever this method is used then
##the respective shell of the Operating system isopened and the command is executed on it.

##a=os.popen("E:\D drive\IANT\IANTPYTHON\hello.py")
##print(a.read())

##Python method popen():
#opens a pipe to or from command.The return value is an open file object
##connected to the pipe, which can be read or written depending on whether mode is 'r' (default) or 'w'.
##The bufsize argument has the same meaning
##as in open() function.

##out = subprocess.check_output(["python", "--version"], text=True)
output=subprocess.check_output(["echo","Hello World!"],shell=True)
print(output)

##check_output subprocess module in python is used to capture the output of
##the calling program for later processing.













