import Recommender as Rec
import sys
import os
import json
def reco(user):
	R = Rec.Recommender(1,5,'u.data','u.item')
	score=[]
	for x in R.ItemRecommendation(user,R.Cos,5):
		score.append(x)
		print x[0],"'"
		print x[1][:-1],"'"
		
if __name__=="__main__":
	reco(sys.argv[1])
