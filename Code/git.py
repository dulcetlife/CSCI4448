from github import Github
import requests

def doStuff():
	gh = Github("dulcetlife","central1")

	#for repo in gh.get_user().get_repos():
	    #print repo.name
	    #repo.edit(has_wiki=False)
	for repo in gh.search_repositories(query='open source',sort = 'stars'):
		user = repo.full_name
		print user
		temp = repo.get_readme()
		a = temp.content
		new = a.decode('base64')
		print new
		#t = temp.html_url
		#new_temp = t.replace("https://github.com/","https://raw.githubusercontent.com/")
		#r = requests.get(new_temp)
		test = open("README.md", "w")
		test.write(new)
		return

def main():
	doStuff()

if __name__ == '__main__':
	main()
