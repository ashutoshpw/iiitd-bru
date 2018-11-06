#!/usr/bin/python 

import pymysql,re,operator

hostname = 'ftp.sgp-21.host-webserver.com'
username = 'apinet_bru'
password = '54QHbPiF'
database = 'apinet_bru'
        
myConnection = pymysql.connect( host=hostname, user=username, passwd=password, db=database ,autocommit=True)
cur = myConnection.cursor()
cur.execute( 'select request_table.user_id,student_profile.user_id,program,student_profile.distance,student_profile.pincode from request_table,student_profile where request_table.user_id = student_profile.user_id' )

phd_i = {}
phd_o = {}
distance_outside = {}
distance_delhi = {}

for r_user_id,user_id,program,distance,pincode in cur.fetchall() :
    matchObj = re.match( r'^1100[0-9][0-9]', str(pincode))
    region = ""
    if matchObj:
        region = "Delhi"
    else:
        region = "Outside Delhi"
    print program,distance,region
    if program == "PHD" and region == "Outside Delhi":
        if user_id not in phd_o:
            phd_o[user_id]=[]
        phd_o[user_id].append(distance)
        phd_o[user_id].append(r_user_id)
    elif program == "PHD" and region == "Delhi":
        if user_id not in phd_i:
            phd_i[user_id]=[]
        phd_i[user_id].append(distance)
        phd_i[user_id].append(r_user_id)

    elif region == "Outside Delhi":
        if user_id not in distance_outside:
            distance_outside[user_id]=[]
        distance_outside[user_id].append(distance)
        distance_outside[user_id].append(r_user_id)

    else:
        if user_id not in distance_delhi:
            distance_delhi[user_id]=[]
        distance_delhi[user_id].append(distance)
        distance_delhi[user_id].append(r_user_id)


sorted_phd_i = sorted(phd_i.items(), key=lambda e: e[1][0],reverse=True)
sorted_phd_o = sorted(phd_o.items(), key=lambda e: e[1][0],reverse=True)
sorted_distance_outside = sorted(distance_outside.items(), key=lambda e: e[1][0],reverse=True)
sorted_distance_delhi = sorted(distance_delhi.items(), key=lambda e: e[1][0],reverse=True)

print sorted_phd_i
print sorted_phd_o
print sorted_distance_outside
print sorted_distance_delhi

for i in phd_o:
    cur.execute('select * from room where room_type = "Single" and status = 0 and hostel_type = "Girls"')
    j=cur.fetchone()
    if j!=None:
        # update status to 1 in room table
        cur.execute('update room set status = 1 where id=%s' % j[0])
        # add in alloted_students table
        cur.execute("""insert into alloted_students(user_id,room_id,hostel,room_type,room_number) values(%s,%s,'%s','%s','%s')""" % (i,j[0],j[6],j[2],j[1]))
        # status = approve in request table
        cur.execute("""update request_table set status='%s' ,room_id=%s where id=%s""" % ("Approved",j[0],phd_o[i][1]))
        
        

myConnection.close()

# select * from request_table,student_profile where request_table.user_id = student_profile and program = phd