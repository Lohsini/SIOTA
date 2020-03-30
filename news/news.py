import requests
import json # 內建的
import time # 內建的

# 這邊沒有執行到, 真的是import的問題!

api = "https://www.googleapis.com/customsearch/v1"
key = "AIzaSyDl7lKKeyRZLseiVKaz6Escr_vtcYTHFhs"
searchId = "010230242516722102980:n0ssdaoccan"
query = "劉真 心臟"

res = requests.get(api + "?key=" + key + "&cx=" + searchId + "&q=" + query)
searchResult = json.loads(res.text)

array = []
class News:
    def __init__(self, title, href):
        self.type = "公告"
        self.title = title
        self.href = href
        self.day = time.time()
for n in searchResult["items"]:
    title = n["title"]
    href = n["link"]
    result = News(title, href)
    array.append(result)

class MyEncoder(json.JSONEncoder):
    def default(self, obj):
        if not isinstance(obj, News):
            return super(MyEncoder, self).default(obj)
        return obj.__dict__

f = open("news_data.txt", "w")
f.write(json.dumps(array, cls = MyEncoder))
f.close()
