#include <stdio.h>
 
/*	Version: 0.1.0 */
/*	Date: 2017-12-10 */
/*	Function:
To check the possible confidential data such as 10 digit account number in a file but to skip line with :20: and :32: 
(based on SWIFT standard format)  
*/

int main ()
{
    /*  filename = filename with maximum 30 bytes characters including the file extension
        con = array to store the characters from the file   */

    //char filename[30];
    char con[999999];
    /*  x = counter for total characters in the file
        nl = counter for number of lines in the file
        y = counter for the continuous 10 digit and above
        z = starting position of continuous 10 digits and above
        s = ending position of continuous 10 digits and above
        w = counter (for loop)  */

    int x = 0, nl2=1, y=1, z=0, w=0, s=0;

    /*  p = switch to be turn on to skip the checking*/

    int p=0;
    /*  For testing purpose, point this program to test0.txt    */
    //printf("Please enter file name (with extension):");
    //scanf("%s", filename);

    //FILE *inp = fopen(&input, "r");
    FILE*inp=fopen("test0.txt","r");

    /*  File is not read successfully   */
    //if (fopen(&input,"r")== NULL)
    if(fopen("test0.txt","r")==NULL)
    {
        printf("File is not found!");
    }
    else
    {
        /*  File is read successfully   */
        while(!feof(inp))
        {
            fscanf(inp,"%c",&con[x]);
            //printf("\n%d %c", x, con[x]);
            /*  Allocate the position of :20:   */
            if(con[x-4]==':'&&con[x-3]=='2'&&con[x-2]=='0'&&con[x-1]==':')
            {
                p=1;
            }
            /*  Allocate the positioin of :32:  */
            if(con[x-4]==':'&&con[x-3]=='3'&&con[x-2]=='2'&&con[x-1]==':')
            {
                p=1;
            }
            /*  Determine the continuous 10 digits and above (account number be like)   */
            if(con[x] == '1' || con[x] == '2' || con[x] == '3' || con[x] == '4' || con[x] == '5' || con[x] == '6' || con[x] == '7' || con[x] == '8' || con[x] == '9' || con[x] == '0' || con[x] == '-')
            {
                if(con[x-1] == '1' || con[x-1] == '2' || con[x-1] == '3' || con[x-1] == '4' || con[x-1] == '5' || con[x-1] == '6' || con[x-1] == '7' || con[x-1] == '8' || con[x-1] == '9' || con[x-1] == '0' || con[x-1] == '-')
                {
                    y++;
                }
            }
            else
            {
                z=y;
                s=x-1;
                y=1;
            }
            /*  Determine the position of next line and end of file */
            if(con[x-1] == '\n' || con[x-1] == EOF)
            {
                nl2++;
                p=0;
            }
            /*  To highlight the possible account number but
                to avoid :20: and :32:  */
            if (z >= 10 && p==0)
            {
                printf("Line %d: Possible Confidential Data= ",nl2);
                for(w=s-z+1;w<s+1;w++)
                {
                    printf("%c", con[w]);
                }
                printf("\n");
                y=1;
            }
            x++;
        }
    }
    fclose(inp);
    system("PAUSE");
    return 0;
}
