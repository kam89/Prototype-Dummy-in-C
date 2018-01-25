# Formatter
## What is this?
This is a **prototype/dummy** program.
To translate a length of data to fix in a **80 x 24** windows size (Terminal) which consists of:

1. 7 bytes of Key
2. 3 bytes of Length of data
3. various bytes of Data (depends on _2. Length of data_)

This program is written in C language and compiled in Windows 10 (64 bit).

Version: 0.1.0
Date: 2017-12-10

## Installation (compile the source code on your own)
### 1. On **Windows**:
_Software required_: **Code::Blocks** [Download](http://www.codeblocks.org/downloads)
1. Download and Install the **Code::Blocks**.
2. Download the _formatter.c_ and open in **Code::Blocks**
3. Compile and build it.

### 2. On **Linux**: (not tested by me)
_Software required_: **gcc**
1. Download the _formatter.c_
2. Compile using terminal command:
  - gcc -o formatter formatter.c

## Usage
### 1. On **Windows**:
1. Download _formatter.exe_ (only if you want to try the prototype/dummy program)
2. Download _testing.txt_ and put at the same folder with _formatter.exe_
3. Double click the _formatter.exe_

### 2. On **Linux**:
1. Must complete the step in Installation for **Linux**.
2. 2. Download _testing.txt_ and put at the same folder with formatter
3. run the formatter using command:
  - ./formatter

## Disclaimer
All the prototype/dummy programs are for personal interest only.
Use at your own risk!

I have developed this program to a higher version but I cannot share it 
because the higher version is done in the workplace workstation which have no internet access.
