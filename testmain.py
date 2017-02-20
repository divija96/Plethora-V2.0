#!usr/bin/python
import sys
import os
import json

def get_name_file_paths(directory):
	dir_paths=[]
	for root,dirs,files in os.walk(directory):
		for name in dirs:
			dir_paths.append(os.path.join(root,name))
	return dir_paths;

if __name__=="__main__":
	print get_name_file_paths(sys.argv[1])
