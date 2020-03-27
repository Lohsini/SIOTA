import requests
# import json
import time

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
