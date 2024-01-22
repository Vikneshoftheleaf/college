#include<stdio.h>
#include<conio.h>
#include<graphics.h>
#include<math.h>
void main()
{
	int gd=DETECT,gm;
	int a[10],b,i,j,n,x,y;
	clrscr();
	initgraph(&gd,&gm,"c:\\TurboC3\\BGI");
	printf("\n\n Enter the no of points used:");
	scanf("%d",&n);
	for(i=0,j=0;i<n;i++,j+=2)
	{
		printf("\n Enter the coordinates points:");
		scanf("%d%d",&a[i],&a[j+i]);
	}
	setcolor(10);
	fillpoly(n,a);
	printf("\n\n Enter the finding pixel coordinate value:");
	scanf("%d%d",&x,&y);
	b=getpixel(x,y);
	putpixel(x,y,2);
	printf("\n%d",&b);
	if(b==15)
	{
		printf("\n Given pixel is inside the polygon");
	}
	else if(b==10)
	{
		printf("\n Given pixel is on the polygon");
	}
	else
	{
		printf("\n Given pixel is outside the polygon");
	}
	getch();
	closegraph();


}