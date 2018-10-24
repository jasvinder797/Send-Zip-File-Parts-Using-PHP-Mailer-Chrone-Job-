# Send-Zip-File-Parts-Using-PHP-Mailer-Chrone-Job-
Send File parts automatically using php mailer sheduled by task shedul

//shedule task
Task sheduler with .bat file (send mail)....
    >> create a file with extension .bat and put following content in file 
       "D:\wamp64\bin\php\php5.6.25\php.exe" -f "D:\wamp64\www\split_and_mail\sendmail.php"

    1. MyComputer > Manage > Task Sheduler > Create Basic Task
    2. Give name to task and description(optional)
    3. Select when to execute task. > Next
    4. Action > Start a program > next
    5. In "program script" add cmd (to open cmd)
    
    6. In "add arguments (optional)" enter argument
       /k "C:\Users\Perfect\Desktop\chrone job\Send Mail\script.bat"


