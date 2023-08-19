ToDo API 
toturial link https://www.youtube.com/watch?v=r3835SaZ6Ac

16/08/2023 the structer of Database Tables:

Users table - stores user accounts
Categories table - stores categories created by users
Tasks table - stores todo tasks created by users
Relationships:

User hasMany Categories
User hasMany Tasks
Category belongsTo User
Task belongsTo User
Task belongsTo Category
Key Fields:

Users

id - Unique ID (ULID type)
name - User's name
email - Email address
password - Hashed password
Categories

id - Unique ID (ULID type)
name - Name of category
user_id - Foreign key linking category to a user
Tasks

id - Unique ID (ULID type)
title - Title of the task
status - Status of task (enum using Status class)
priority - Priority of task (enum using Priority class)
content - Description/content of task
category_id - Foreign key linking task to a category
user_id - Foreign key linking task to a user
complete_at - DateTime when task was completed


17/08/2023   creating Models and migrations for User, Category, Task

18/08/2023  
            updating the models 
            creating Enumes   
                           proirity.php
                           status.php
             Factories:
                    Category
                    Task
                    user
             Seeders
             finally solving all the migrations errors.                           

