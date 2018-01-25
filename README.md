# dummy programs

## What is this?
This is a collection of **prototype/dummy** programs for further development.

I am working in a bank and sometimes I have to retrieve some logs/files for troubleshooting purpose.
A data checking program is required to mask (replace) the confidential data.

## Table of Contents:
###### 1. Account No. checking
To check the _possible confidential data_ such as _10 digit account number_ in a *file* 
but to skip line with **:20:** and **:32:**
(based on **SWIFT** standard format)

This program is written in C language and compiled in Windows 10 (64 bit).

###### 2. Formatter
To translate a length of data to fix in a *80 x 24* windows size (Terminal) which consists of:
1. 7 bytes of Key
2. 3 bytes of Length of data
3. various bytes of Data

This program is written in C language and compiled in Windows 10 (64 bit).

## Disclaimer
All the prototype/dummy programs are for personal interest only.
Use on your own risk!
