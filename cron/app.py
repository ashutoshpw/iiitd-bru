#!/usr/bin/python
import MySQLdb
import urllib2


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
    print row[8]
    address = row[8]
    response = urllib2.urlopen('https://9vub0z97ml.execute-api.ap-southeast-1.amazonaws.com/Production/calculator?source=iiit delhi&destination=saket')
    print response.info()

db.close()