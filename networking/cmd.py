#!/usr/bin/python

import sys
import hashlib


#print('Number of arguments:', len(sys.argv), 'arguments.')
#print ('Argument List:', str(sys.argv))

length = len(sys.argv)
if(length == 1):
    print("\n")
    print("Usage: md5 your_value salt_value")
    print("Note: Salt_value is optional")
    print("\n")

else:
    md5_val = sys.argv[1]
    if(md5_val == "yaru_owner"):
        print('''
 
  ______              _     _     _                _        
 |  ____|            | |   | |   (_)              (_)       
 | |__    ___   __ _ | | __| | __ _    _ __  __ _  _   __ _ 
 |  __|  / __| / _` || |/ /| |/ /| |  | '__|/ _` || | / _` |
 | |____ \__ \| (_| ||   < |   < | |  | |  | (_| || || (_| |
 |______||___/ \__,_||_|\_\|_|\_\|_|  |_|   \__,_|| | \__,_|
                                                 _/ |       
                                                |__/  
      

                ''')
    else:

        print("\n")
        print("The value to be Md5 is : {}".format(md5_val))

        if(length == 3):
            salt = sys.argv[2]
            print("The salt value is : {}".format(salt))
            md5_val_salt = md5_val + salt
            source = md5_val_salt.encode()
            md5 = hashlib.md5(source).hexdigest()  # returns a str
            print("MD5 of {} is --> {} ".format(md5_val_salt, md5))
            print("\n")
        else:
            source = md5_val.encode()
            md5 = hashlib.md5(source).hexdigest()  # returns a str
            print("MD5 of {} is --> {} ".format(md5_val, md5))
            print("\n")
