/*  This is a program to translate an input of data which consists of:
    1. 7 bytes of Key
    2. 3 bytes of Length of data
    3. various bytes of Data

    Refer to the testing.txt for the sample input
*/

#include <stdlib.h>
#include <string.h>

int main()
{
    /*  input = consists 7 bytes of Key follow by Length of data and Data    */
    /*  lod[3] = array to capture the length of data    */
    /*  len1 = total length of input    */
    char input[100];
    char lod[3];
    int len1;

    /*  a = counter for loop to determine the Key, Length of data and Data   */
    /*  b = counter to capture the Length of data from input    */
    /*  c = counter to capture the Length of data into lod[3]   */
    int a, b, c;
    /*  i = starting position of the Key, Length of data and Data    */
    /*  j = ending position of the Key, Length of data and Data    */
    /*  k = convert the array lod[3] to integer */
    int i, j, k;

    printf("Input:\n");
    scanf("%[^\n]s",&input);
    len1 = strlen(input);
    //printf("len1:%d\n",len1);

    i=0; j=6;
    printf("\n""  ""Key""    ""Length""    ""Value");
    printf("\n""  ""---""    ""------""    ""-----""\n");
    while(i<len1)
    {
        //printf("a:%d ",a);
        for(a=0;a<3;a++)
        {
            //printf("b:%d ",b);
            if(a==0)
            {
                j=i+6;
                k=0;
            }
            else if(a==1)
            {
                i=j+1;
                j=i+2;
                c=0;
                for(b=i;b<=j;b++)
                {
                    lod[c]=input[b];
                    //printf("%c",len[d]);
                    c++;
                }
                k = atoi(lod);
                //printf("k:%d ",k);
            }
            else if(a==2)
            {
                i=j+1;
                j=i+k-1;
            }
            //printf("k:%d ",k);
            //printf("i:%d ",i);
            //printf("j:%d ",j);
            decode(input,i,j);
        }
        i=j+1;
        j=i+6;
        //printf("k:%d ",k);
        //printf("i:%d ",i);
        //printf("j:%d ",j);
        printf("\n");
    }
    printf("\n");
    system("PAUSE");
    return 0;
}

int decode(char trace[],int x, int y)
{
    int z;
    //printf("x: %d ",x);
    //printf("y: %d ",y);

    printf("  ");

    for(z=x;z<=y;z++)
    {
        printf("%c",trace[z]);
    }
    return 0;
}
