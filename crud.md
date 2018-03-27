CRUD

Create a record
Read record(s) - index page, single record page
Update a record
Destroy a record

Our database system:

MySQL
other popular ones: Postgresql, Sqlite
These all use a query language called SQL
And they are all relational databases

1. Define your table structure

Database: calendar
 |_ Table: events
      |_ id: integer (auto-increment)
      |_ title: string - MySQL calls this VARCHAR(255)
      |_ date: date
      |_ time: time
      |_ description: text

create database:
name - calendar ignore collation

create table - events
number of columns: 5
id - click AI for auto integer
title VARCAR
date DATE
time TIME
description TEXT

preview SQL

