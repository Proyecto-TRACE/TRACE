**To use scraper.py:**  
---
A linkedin account needs to be used in order to login with the `linkedin_api` library

A file must be created called `linkedinAccount.py`, where 2 variables need to be created:

```
account = "accountName"
password = "passwordForAccount"
```
  


**Creating/Activating virtual environment:** 
---
In the terminal: 

To create a virtual environment:  
`python -m venv virtual_environment_name`

Activating virtual environment on Windows:  
`.\virtual_environment_name\Scripts\activate`

If after running, you get an error of UnauthorizedAccess, run this command, then try activating again:  
`Set-ExecutionPolicy Unrestricted -Scope Process`


Activating virtual environment on Linux:  
`source virtual_environment_name/bin/activate`

To create your own requirements.txt:  
`python -m pip freeze > requirements.txt`


**Install dependencies:**
--- 
**AFTER CREATING AND ACTIVATING VIRTUAL ENVIRONMENT**  
To install dependencies from requirements.txt in terminal:  



`python -m pip install -r requirements.txt`


**Error retrieving data from linkedin-api:** 
---
Sometimes when running the linkedin-api library, a CHALLENGE will be returned from LinkedIn.  This could be due to:
- Rate-limiting
- Temporary-permanent IP blocking

There are try-catches implemented in order to attempt to retrieve information again. If that doesn't work, attempt:
- Connect to a different network 
- Try at a later time 