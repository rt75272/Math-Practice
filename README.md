# Math-Practice
Elementary grade level math practice website for the family teacher
&nbsp;
### Run Locally  
_Copy repo:_
```sh
$ git clone https://github.com/rt75272/Math_Practice.git
```
&nbsp;
_Dependencies:_
```sh
$ sudo apt install php8.1-cli
$ sudo apt install postgresql
$ sudo apt install php-pgsql
```
&nbsp;
_Create local PostgreSQL database table:_
###### _Option 1:_
```sh
# Inside of plain terminal
$ psql -U bob -d bob -a -f create_table.sql
```
###### _Option 2:_
```sql
-- Inside of psql cli
bob=# \i /home/bob/Math_Practice/create_table.sql
```
&nbsp;  
_Run & open local host:_
```sh
$ php -S localhost:8000
$ google-chrome -incognito http://localhost:8000
```
&nbsp;
### Run Live [Webpage]()
<!-- _[Live URL](#)_ -->
```
$ google-chrome -incognito [insert url]
```