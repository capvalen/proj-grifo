cd "C:\wanka\mysql\bin"
mysqldump -P 3309 -u root -p --password=*123456* --databases grifo >"C:/Users/Maria.DESKTOP-UJRSTMR/Documents/Backups grifo/Grifo_backup %date:~-4,4%-%date:~-7,2%-%date:~-10,2%-%time:~0,2%_%time:~3,2%_%time:~6,2%.sql"
