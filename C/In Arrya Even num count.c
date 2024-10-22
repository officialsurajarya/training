#include<stdio.h>
int main()
{
	int array[100],i,num;
	printf("Enter the size of an arrray\n");
	scanf("%d",&num);
	printf("Enter the elements of the array\n");
	for(i=0;i<num;i++)
	{
		scanf("%d",&array[1]);
	}
	printf("Even numbers in the array are-");
	for(i=0;i<num;i++)
	{
		if (array[i]%2==0)
		{
			printf("%d\t",array[i]);
		}
	}
	printf("\nOdd numbers in the array are-");
	for(i=0;i<num;i++)
	{
		if (array[i]%2!=0)
		{
			printf("%d\t",array[i]);
		}
	}
}
