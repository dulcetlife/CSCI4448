import MySQLdb as mdb

db_host = "localhost"
db_user = "root"
db_pass = "central1"
db_name = "github_repos"

def insertIntoDB(repo_name, username, html_url, language, forks_count, watchers, stars, readme):

	
	connection= mdb.connect(db_host,db_user,db_pass,db_name)
	cursor = connection.cursor()
	with connection:

		sql = ("INSERT INTO repos(repo_name, username, html_url, language, forks_count, watchers, stars, readme) VALUES(%s, %s,%s,%s,%s,%s,%s,%s)")
		values = (repo_name, username, html_url, language, forks_count, watchers, stars, readme)
		cursor.execute(sql,values)

def main():
	insertIntoDB(repo_name, username, html_url, language, forks_count, watchers, stars, readme)

if __name__ == '__main__':
	main()