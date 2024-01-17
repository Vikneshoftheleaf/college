#include <stdio.h>
#include <math.h>
#include <conio.h>
int stack[20];
int top = 0, size;
void push();
void pop();
void list();
void main()
{
    int ch, i, co = 1;
    clrscr();
    printf("\n\t\tSTACK OPERATIONS");
    printf("\n\t\t**********");
    printf("\n\tENTER THE SIZE OF THE STACK:\t");
    scanf("%d", &size);
    do
    {
        printf("\nMENU");
        printf("\n******");
        printf("\n1.PUSH");
        printf("\n2.POP");
        printf("\n3.LIST");
        printf("\n4.EXIT");
        printf("\n\t ENTER YOUR CHOICE[1,2,3,4...]:");
        scanf("%d", &ch);
        switch (ch)
        {
        case 1:
            printf("\n\t\tPUSH OPERATION");
            printf("\n\t\t------------");
            push();
            break;
        case 2:
            printf("\n\t\tPOP OPERATION");
            printf("\n\t\t---");
            pop();
            break;
        case 3:
            printf("\n\t\tLIST OPERATION");
            printf("\n\t\t-----");
            list();
            break;
        case 4:
            printf("\n\t\tPROGRAM TERMINATED");
            printf("\n\t\t-----");
            co = 0;
            break;
        default:
            printf("\n\n\t Invalid Enter the choice[1-4]");
        }
    } while (co==1);
}


void push()
{
int item;
if (top == size)
{
    printf("\n\t STACK IS FULL");
}
else
{
    top++;
    printf("\n\tENTER THE ITEM TO BE INSERTED:\t");
    scanf("%d", &item);
    stack[top] = item;
}
}

void pop()
{
    int item;
    if (top == 0)
    {
        printf("\n\tSTACK IS EMPTY");
    }
    else
    {
        item = stack[top];
        printf("\n\t THE DELETED ITEM FROM STACK:%d", item);
        top--;
    }
}


void list()
{
    int i;
    if (top == 0)
    {
        printf("\n NO ITEM FOUND");
    }
    else
    {
        printf("\nTHE ITEMS IN THE STACK ARE:");
        for (i = top; i >= 1; i--)
        {
            printf("\n\t\t\t%d", stack[i]);
        }
    }
}