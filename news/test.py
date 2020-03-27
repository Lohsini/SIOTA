a= "test.py 傳送至 news_data.txt"

f = open("news_data.txt", "w")
f.write(str(a))
f.close()
