#include<iostream.h>
#include<conio.h>
#include<string.h>
void main()
{
	char a[20],b[20],c,*p1,*p2;
	do{
	clrscr();
	cout<<"\n\t\t Palindrome using Pointer";
	cout<<"\n\t\t************************";
	cout<<"\n\t Enter the String:\t";
	cin>>a;
	strcpy(b,a);
	strrev(b);
	p1=a;
	p2=b;
	cout<<"\n\t\t The Given string is:\t"<<p1;
	cout<<"\n\t\t The Reversed string is:\t"<<p2;
	{
	while((*p1!='\0')&&(*p2!='\0'))
	{
		if(*p1!=*p2)
		{
			cout<<"\n\t The Given Number is not a Plaindrome";
			goto m;
		}
		else
		{
			p1++;
			p2++;
		}
		}
		cout<<"\n\t The Given Number is a Plaindrome";

		m:

		cout<<"\n\t Do you want to continue (Y/N):\t";
		cin>>c;
		}


	}while(c=='y' || c=='Y');




}