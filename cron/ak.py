import MySQLdb
import urllib2
import requests
import json
from time import gmtime, strftime

url = "https://9vub0z97ml.execute-api.ap-southeast-1.amazonaws.com/Production/calculator"

querystring = {"source":"iiit delhi","destination":"saket"}

headers = {
    'user-agent': "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.132 Safari/537.36",
    'upgrade-insecure-requests': "1",
    'accept': "text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8",
    'accept-encoding': "gzip, deflate, br",
    'accept-language': "en-US,en;q=0.9,hi;q=0.8",
    'cache-control': "no-cache",
    'postman-token': "68fe02ce-9960-f2c0-9b0d-6182031677ec"
    }

db = MySQLdb.connect(host="ftp.sgp-21.host-webserver.com",    # your host, usually localhost
                     user="apinet_bru",         # your username
                     passwd="54QHbPiF",  # your password
                     db="apinet_bru")        # name of the data base

# you must create a Cursor object. It will let
#  you execute all the queries you need
cur = db.cursor()

# Use all the SQL you like
cur.execute("SELECT * FROM student_profile")

# print all the first cell of all the rows
for row in cur.fetchall():
    ctime = strftime("%Y-%m-%d %H:%M:%S", gmtime())
    print row[8]
    address = row[8]
    # response = urllib2.urlopen('https://9vub0z97ml.execute-api.ap-southeast-1.amazonaws.com/Production/calculator?source=iiit delhi&destination=saket')
    querystring['destination'] = address
    response = requests.request("GET", url, headers=headers, params=querystring)
    #print response.text
    jsonResponse=json.loads(response.text)
    #print jsonResponse
    distance = jsonResponse['distanceMeasured']['value']
    time_taken = jsonResponse['timeMeasured']['value']
    distance = int(distance)
    time_taken = int(time_taken)
    id_insert = int(row[0])
    print id_insert
    cur.execute ("""
      UPDATE student_profile
      SET distance=%d, time_taken=%d, script_updated_at='%s'
      WHERE id=%d
      """ %(distance,time_taken,ctime,id_insert))
     
    db.commit()
    #db.close()
    #print response.info()
    

db.close()