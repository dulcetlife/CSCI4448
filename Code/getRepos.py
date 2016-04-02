from github import Github
from putToDB import insertIntoDB


#Need to take care of Null values from search

def getRepo():
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
				print "Pass"
			except:
				print "Fail"
				continue
			#insertIntoDB(repo_name,username,html_url,language,forks_count,watchers,stars,readme)
			rate = Github().rate_limiting
			count +=1
			# rate
			print language + " language"
			print username + " username"
			print watchers + " watchers"
			print stars + " stars"
			print repo_name + " repo_name"
			print forks_count + " forks_count"
			print html_url + " html_url"
			print count, " Count"

		

def main():
	getRepo()

if __name__ == '__main__':
	main()
