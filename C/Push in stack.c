#include <stdio.h>
#include <stdlib.h>

#define MAX_SIZE 100

int stack[MAX_SIZE];
int top = -1;

void push(int value) {
    if (top == MAX_SIZE - 1) {
        printf("Stack is full. Cannot push %d\n", value);
    } else {
        stack[++top] = value;
        printf("%d pushed to the stack\n", value);
    }
}

int main() {
    push(10);
    push(20);
    push(30);

return 0;
}

