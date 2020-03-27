import time
a=time.time()
# print("a")
f = open("data.txt", "w")
f.write(str(a))
f.close()
