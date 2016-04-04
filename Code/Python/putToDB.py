import MySQLdb as mdb

db_host = "localhost"
db_user = "root"
db_pass = "csci4448"
db_name = "github_repo"

def insertIntoDB(repo_name, username, html_url, language, forks_count, watchers, stars, readme):
	connection= mdb.connect(db_host,db_user,db_pass,db_name)
	cursor = connection.cursor()
	with connection:

		sql = ("INSERT INTO repos(repo_name, username, html_url, language, forks_count, watchers, stars, readme) VALUES(%s, %s,%s,%s,%s,%s,%s,%s)")
		values = (repo_name, username, html_url, language, forks_count, watchers, stars, readme)
		cursor.execute(sql,values)

def updateDB(repo_name, username, html_url, language, forks_count, watchers, stars, readme,serverID):
	connection= mdb.connect(db_host,db_user,db_pass,db_name)
	cursor = connection.cursor()
	with connection: 
		values = (repo_name, username, html_url, language, forks_count, watchers, stars, readme,serverID)
		cursor.execute("""UPDATE repos SET repo_name=%s, username=%s, html_url=%s, language=%s, forks_count=%s, watchers=%s, stars=%s, readme=%s WHERE id=%s """,values)

def main():
	insertIntoDB(repo_name, username, html_url, language, forks_count, watchers, stars, readme)
	updateDB(repo_name, username, html_url, language, forks_count, watchers, stars, readme, serverID)

if __name__ == '__main__':
	main()