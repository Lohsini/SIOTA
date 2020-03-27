import time
a=time.time()

f = open("data.txt", "w")
f.write(str(a))
f.close()
