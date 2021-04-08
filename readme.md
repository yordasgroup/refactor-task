# Refactoring Task
## Introduction
This small micro app allows a user to change their profile details:

Name, Email, Password

The user can only change 1 field at a time.

## Task
Please refactor this code so that it is:
- Easier to read
- Uses more up to date php techniques
- Demonstrates aspectes of "clean code"
- Uses namespaces
- Uses a file standard such as PSR2 or PSR12

For the purposes of this task, please consider this code to be completely isolated from any other project and to be
completely self contained, therefore the renaming of any variables, methods, file names, and folder structures will
have no adverse consequences and is entirely at your discretion.

### Files
- index.php / Basic landing page
- process.php / Processing file (the main refactoring task)
- profile.php / Form input page
- scripts/database/User.php / Stub file to represent modifying the user table in the database
- scripts/database/Activity.php / Stub file to represent an activity logger

## Layout
You do not need to adjust the front end appearance of these files, they have been produced in a minimal form to
provide a functioning app to make refactoring easier to test. Please focus on the PHP refactoring rather than
the layout.

You can modify them any way you wish, we just want to make it clear that layout and front end is not the primary
focus of this task.

## Install
```bash
git clone https://github.com/yordasgroup/refactor-task
```

## Submit
Please push your refactored project to your own GitHub account and provide the link as directed in the
Recruitment Exercise PDF.
