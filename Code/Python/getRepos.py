from github import Github
from putToDB import insertIntoDB
from putToDB import updateDB
import threading


def getRepo():
	print "GetRepo"
	gh = Github("dulcetlife","central1")
	count = 0
	terms = ['opensource', 'open source', 'open-source']
	sep = "/"
	for term in terms:
		for repo in gh.search_repositories(query=term,sort = 'stars'):
			repo_name= repo.name
			language = repo.language
			if language == None:
				language = "Undefined"
			html_url = repo.html_url
			temp_username = repo.full_name
			username = temp_username.split(sep,1)[0]
			forks_count = str(repo.forks_count)
			watchers = str(repo.watchers)
			stars = str(repo.stargazers_count)
			try:
				temp = repo.get_readme()
				a = temp.content
				readme = a.decode('base64')
			except:
				continue
			insertIntoDB(repo_name,username,html_url,language,forks_count,watchers,stars,readme)
	print "Done with getting repos"
		
def updateRepo():
	print "Updating repos"
	threading.Timer(3600,updateRepo).start()
	gh = Github("dulcetlife","central1")
	count = 0
	terms = ['opensource', 'open source', 'open-source']
	sep = "/"
	serverID = 1
	for term in terms:
		for repo in gh.search_repositories(query=term,sort = 'stars'):
			repo_name= repo.name
			language = repo.language
			if language == None:
				language = "Undefined"
			html_url = repo.html_url
			temp_username = repo.full_name
			username = temp_username.split(sep,1)[0]
			forks_count = str(repo.forks_count)
			watchers = str(repo.watchers)
			stars = str(repo.stargazers_count)
			try:
				temp = repo.get_readme()
				a = temp.content
				readme = a.decode('base64')
			except:
				continue
			serverID +=1
			print serverID
			print repo_name
			updateDB(repo_name,username,html_url,language,forks_count,watchers,stars,readme,serverID)
	print "Done updating repos"

def main():
	getRepo()
	updateRepo()

if __name__ == '__main__':
	main()
