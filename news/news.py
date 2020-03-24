import requests
import json

api = "https://www.googleapis.com/customsearch/v1"
key = "AIzaSyDl7lKKeyRZLseiVKaz6Escr_vtcYTHFhs"
searchId = "010230242516722102980:n0ssdaoccan"
query = "黃能富 農業"

res = requests.get(api + "?key=" + key + "&cx=" + searchId + "&q=" + query)
searchResult = json.loads(res.text)

num = 0
array = []
class News:
    def __init__(self, title, link):
        self.type = "公告"
        self.title = title
        self.links = link
for n in searchResult["items"]:
    title = n["title"]
    links = n["links"]
    num = num+1
    # print("這是第" + str(num) + "則新聞，新聞標題：『" + title + "』，網址：" + link)
    result = News(title, links)
    print("這是第" + str(num) + "則新聞，類型是"+result.type +"，新聞標題：『" + result.title + "』，網址：" + result.links)
    # array.append({type: result.type, title: result.title, link: result.link})
    array.append(result)
print(array)

class MyEncoder(json.JSONEncoder):
    def default(self, obj):
        if not isinstance(obj, News):
            return super(MyEncoder, self).default(obj)

        return obj.__dict__

print (json.dumps(array, cls = MyEncoder))

f = open("news_data.txt", "w")
f.write(json.dumps(array, cls = MyEncoder))
f.close()
