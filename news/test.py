a= "test.py 傳送至 data.txt"

f = open("data.txt", "w")
f.write(str(a))
f.close()
