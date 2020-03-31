# import requests
# import json
import time

# 這個可以嗎？ 辛苦你啦，:(我現在看起來也不太確定問題是出在哪
有可能是因為php跟python在heroku上面不能同時用
畢竟我們的這種寫法滿古怪的（php呼叫python娜的寫法欸甚麼要用這種古怪的寫法
因為妳對python比較熟悉 但php比較好寫api那正常人都怎麼寫
全部寫在php 或全部寫在python
這兩個都是可以做爬蟲+api那我怎麼改
有三個方案
1. 繼續看能不能同時用php+python, 但這個我要花一點時間測試一下 -> 成功率<80%
2. 把new.py溶入news.php, 這個部份如果你對php有一點概念應該不會太難,只是會有一點凡, 但絕對是可行的 -> 成功率100%
那我講一下那個會改到那些
3. 整個api回傳架構改成python, 這個我沒做過也不知道怎麼弄, 如果你 <3 python, 可以挑戰看看 -> 成功率未知

面目全非有沒有改成這樣之前的版本

我先去個廁所<等一下可能要跟老闆開會好

可以先開一個新的php 等測試好在融合近來

api = "https://www.googleapis.com/customsearch/v1"
key = "AIzaSyDl7lKKeyRZLseiVKaz6Escr_vtcYTHFhs"
searchId = "010230242516722102980:n0ssdaoccan"
query = "english usa"
#
#
res = api + "?key=" + key + "&cx=" + searchId + "&q=" + query
# resa = requests.get(res)
# searchResult = json.loads(res.text)



f = open("data.txt", "w")
f.write(str(res))
f.close()
