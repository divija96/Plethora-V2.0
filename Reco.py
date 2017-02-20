from math import sqrt
import collections

class Recommender:

    def __init__(self,Rmin,Rmax,user_dataset,item_dataset):
        self.Rmin = Rmin
        self.Rmax = Rmax
        self.Rmid = (self.Rmin + self.Rmax)/2.0

        self.items = {}
        for line in open(item_dataset):
            (id,title) = line.split(',')[0:2]
            self.items[id]=title

        # Load users data
        self.userData ={}
        for line in open(user_dataset):
            (user,titleid,rating,ts)=line.split(',')
            self.userData.setdefault(user,{})
            self.userData[user][self.items[titleid]]=float(rating)        

        # Creating User list
        self.UsersList = [i for i in self.userData]
    


    def COR(self,user1,user2,choice):
        if choice:
            data = self.userData
        else:
            data = self.itemData
        commonItem = {}
        for item in data[user1]:
            if item in data[user2]: commonItem[item]=1
        n = len(commonItem) 
        if n==0: return 0
        s1 = sum([data[user1][it] for it in commonItem])
        s2 = sum([data[user2][it] for it in commonItem])
        s1Sq = sum([pow(data[user1][it],2) for it in commonItem])
        s2Sq = sum([pow(data[user2][it],2) for it in commonItem])

        # Sum of their the products
        pSum = sum([data[user1][it]*data[user2][it] for it in commonItem])

        # Pearson score calculation
        neu = pSum-(s1*s2/n)
        deno = sqrt((s1Sq-(s1**2)/n)*(s2Sq-(s2**2)/n))
        if deno==0: return 0

        return neu/deno
        

    # Cosine (COS)
    def Cos(self,user1,user2,choice):
        if choice:
            data = self.userData
        else:
            data = self.itemData
        
        # Get the list of the shared_items
        commonItem = {}
        for item in data[user1]:
            if item in data[user2]: commonItem[item]=1

        # Find the number of elements
        n = len(commonItem)

        # If no common items
        if n==0: return 0

        # Sum and square all the common data rating of both the users
        s1Sq = sum([pow(data[user1][it],2) for it in commonItem])
        s2Sq = sum([pow(data[user2][it],2) for it in commonItem])

        # Sum of their the products
        neu = sum([data[user1][it]*data[user2][it] for it in commonItem])

        # Constrained Pearson score calculation
        deno = sqrt(s1Sq*s2Sq)
        if deno==0: return 0

        return neu/deno


    
    def CPC(self,user1,user2,choice):
        if choice:
            data = self.userData
        else:
            data = self.itemData
            
        # Get the list of the shared_items
        commonItem = {}
        for item in data[user1]:
            if item in data[user2]: commonItem[item]=1

        # Find the number of elements
        n = len(commonItem)

        # If no common items
        if n==0: return 0

        # Sum all the common data rating of both the users
        s1 = sum([data[user1][it]-self.Rmid for it in commonItem])
        s2 = sum([data[user2][it]-self.Rmid for it in commonItem])

        # Sum and square all the common data rating of both the users
        s1Sq = sum([pow(data[user1][it]-self.Rmid,2) for it in commonItem])
        s2Sq = sum([pow(data[user2][it]-self.Rmid,2) for it in commonItem])

        # Sum of their the products
        pSum = sum([data[user1][it]*data[user2][it] for it in commonItem])

        # Constrained Pearson score calculation
        neu = s1*s2
        deno = sqrt(s1Sq*s2Sq)
        if deno==0: return 0

        return neu/deno

    # Method for item recommendation
    def ItemRecommendation(self,user,distType,n):
        item = {}
        #print n
        userRatings = self.userData[user]
        scrs = {}
        tot = {}        

        # Create Item Dictionary
        self.createItemData()
        for itm in self.itemData:
            # Find the most similar items to this one
            #print itm[user]
            scores = [(distType(itm,other,False),other) for other in self.itemData if other != itm]
            scores.sort()
            scores.reverse()
            item[itm]=scores[0:n]
            #print item[itm]
		 
        # Item rated by user
        for (itm,rating) in userRatings.items():

            # Loop over similar items for user
            for (similar,itm2) in item[itm]:

                # If item alrady rated
                if itm2 in userRatings: continue

                # Weight sum of rating items similarity
                scrs.setdefault(itm2,0)
                scrs[itm2]+=similar*rating

                # Sum of all the similarities
                tot.setdefault(itm2,0)
                tot[itm2]+=similar

        # Divide each total score by total weighting to get an average
        rankings=[(score/tot[itm],itm) for itm, score in scrs.items()]
        rankings.sort(reverse=True)
        return rankings

    # Finding similar items based on given item
    def createItemData(self):
        result = collections.defaultdict(dict)
        for person in self.userData:
            for item in self.userData[person]:
                result[item][person] = self.userData[person][item]
        self.itemData = result
